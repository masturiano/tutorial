<?php
# Split an array into chunks of two
define("CHUNK_NUMBER",2);
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print"<pre>";
print_r(array_chunk($cars,CHUNK_NUMBER));
print"</pre>";

echo "<br/>";
echo "<hr>";

$cars_loop = array_chunk($cars,2);
foreach($cars_loop as $key => $value){
        $cars_loop_count[] =  $key;      
}
if(count($cars_loop_count)>0){
        for($i=0;$i<count($cars_loop_count);$i++){
                for($j=0;$j<CHUNK_NUMBER;$j++){
                        echo $cars_loop[$i][$j];
                        echo "<br/>";
                }
        }
}

# Can use on inserting data to avoid the one time inserting of large data.
?>