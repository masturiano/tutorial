<?php

/**
 * XML file creation for Template Two
 * @param string $website
 * @param string $template
 * @param string $page_type
 * @param string $frequency
 * @param string $priority
 */
public function buildXmlMysql($website,$template,$page_type,$frequency,$priority,$date_today)
{
    $sitemap_folder = $this->bootstrap->getOption('sitemap');
    $destiFoldr  = $sitemap_folder['export']['directory'];
    $xml_file_extension = ".xml";
    /* START - DELETE ALL THE FILES INSIDE DIRECTORY FOLDER */
    if ($dirhandler = opendir($destiFoldr)) 
    {
        while ($file = readdir($dirhandler)) 
        {
            $delete[] = $destiFoldr.$file;
            foreach ( $delete as $file ) {
                unlink( $file );
            }
        }
    }
    /* END - DELETE ALL THE FILES INSIDE DIRECTORY FOLDER */ 
    /* START - XML FILE CREATION */
    $limit_index = 0;
    $limit_record_per_file = 50000;
    if($page_type == 'ymmp')
    {
    	$get_record_count_all = $this->connection_apw->getApwYmmseCountAll($page_type);
    }
    else if($page_type == 'sku_page')
    {
    	$get_record_count_all = $this->connection_apw->getApwSkuCountAll($page_type);
    	$get_record_count_all = $get_record_count_all['count'];
    }
    else
    {
    	$get_record_count_all = $this->connection_apw->getApwCountAll($page_type);
    	$get_record_count_all = $get_record_count_all['count'];
    }
    $count_number_of_files = $get_record_count_all / $limit_record_per_file;
    $count_number_of_files = ceil($count_number_of_files);
    if($get_record_count_all > 0)
    {
    	for ($i = 1; $i <= $count_number_of_files; $i++) 
        {
        	// Filename
        	if($i == 1)
	        {
	        	$filename = $website."-sitemap-".$page_type.$xml_file_extension;
	        }
	        else
	        {
	        	$filename = $website."-sitemap-".$page_type.$i.$xml_file_extension;
	        }
	        if($page_type == 'ymmp')
    		{
    			$get_record_count_chunks = $this->connection_apw->getApwYmmseCountChunks($page_type,$limit_index,$limit_record_per_file);
    		}
    		else if($page_type == 'sku_page')
    		{
    			$get_record_count_chunks = $this->connection_apw->getApwSkuCountChunks($page_type,$limit_index,$limit_record_per_file);
	        	$get_record_count_chunks = $get_record_count_chunks['count'];
    		}
    		else{
    			$get_record_count_chunks = $this->connection_apw->getApwCountChunks($page_type,$limit_index,$limit_record_per_file);
	        	$get_record_count_chunks = $get_record_count_chunks['count'];
    		}
	        if($get_record_count_chunks > 0)
    		{
    			$handleFromFileName = fopen($destiFoldr.$filename, "x");
    			if($page_type == 'ymmp')
        		{
					$get_record_data = $this->connection_apw->getApwYmmse($page_type,$limit_index,$limit_record_per_file);
        		}
        		else if($page_type == 'sku_page')
    			{
    				$get_record_data = $this->connection_apw->getApwSku($page_type,$limit_index,$limit_record_per_file);
    			}
        		else
        		{
        			$get_record_data = $this->connection_apw->getApw($page_type,$limit_index,$limit_record_per_file);	
        		}
    			$file_cont = ""; // initialize file content
		        foreach ($get_record_data as $value) 
		        {
		            // urlset
		            $file_cont .= "<urlset>";
		            $file_cont .= "\r\n";
		                // url
		                $file_cont .= "\t";
		                $file_cont .= "<url>";
		                $file_cont .= "\r\n";
		                    // this is where the url should be placed
		                    $file_cont .= "\t\t";
		                    $file_cont .= "<loc>";
		                    if($page_type == 'ymmp')
			        		{
								$file_cont .= $this->makeUrlStructure($website,$page_type,$value);
			        		}
			        		else
			        		{
			        			$file_cont .= $this->homepageUrl($website).$this->makeUrlStructure($website,$page_type,$value);
			        		}
		                    $file_cont .= "</loc>";
		                    $file_cont .= "\r\n";
		                    // date of last modification
		                    $file_cont .= "\t\t";
		                    $file_cont .= "<lastmod>";
		                    $file_cont .= $date_today;
		                    $file_cont .= "</lastmod>";
		                    $file_cont .= "\r\n";
							if($template == 'template2')
			                {
		                	// change frequency
		                    $file_cont .= "\t\t";
		                    $file_cont .= "<changefreq>";
		                    $file_cont .= $frequency;
		                    $file_cont .= "</changefreq>";
		                    $file_cont .= "\r\n";
		                    // priority
		                    $file_cont .= "\t\t";
		                    $file_cont .= "<priority>";
		                    $file_cont .= $priority;
		                    $file_cont .= "</priority>";
		                    $file_cont .= "\r\n";
			                }
		                // url
		                $file_cont .= "\t";
		                $file_cont .= "</url>";
		                $file_cont .= "\r\n";
		            // urlset
		            $file_cont .= "</urlset>";
		            $file_cont .= "\r\n";
		        }
		        if(fwrite($handleFromFileName, $file_cont))
		        {
		        	fclose($handleFromFileName);
			        $gunzip_file = $destiFoldr.$filename;
			        $this->gzCompressFile($gunzip_file,9);
		        }
    		}
    		$limit_index = $limit_index + $limit_record_per_file;
    	}
        /* END - XML FILE CREATION */
    }

} 

/**
 * GZIPs a file on disk (appending .gz to the name)
 *
 * From http://stackoverflow.com/questions/6073397/how-do-you-create-a-gz-file-using-php
 * Based on function by Kioob at:
 * http://www.php.net/manual/en/function.gzwrite.php#34955
 * 
 * @param string $source Path to file that should be compressed
 * @param integer $level GZIP compression level (default: 9)
 * @return string New filename (with .gz appended) if success, or false if operation fails
 */
function gzCompressFile($source, $level = 9){ 
    $dest = $source . '.gz'; 
    $mode = 'wb' . $level; 
    $error = false; 
    if ($fp_out = gzopen($dest, $mode)) { 
        if ($fp_in = fopen($source,'rb')) { 
            while (!feof($fp_in)) 
                gzwrite($fp_out, fread($fp_in, 1024 * 512)); 
            fclose($fp_in); 
        } else {
            $error = true; 
        }
        gzclose($fp_out); 
    } else {
        $error = true; 
    }
    if ($error)
        return false; 
    else
        return $dest; 
} 

?>