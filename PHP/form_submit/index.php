<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	<body>
		<?php 
		include('db_conn.php');
		
		$select_info = "select * from tb_info"; // select table info
		$query_exec = mysqli_query($conn,$select_info); // execute query

		/*
		* Loop the results
		*/
		?>
		<table border=1>
			<thead>
				<td>FIRST NAME</td>
				<td>MIDDLE NAME</td>
				<td>LAST NAME</td>
				<td>BIRTHDAY</td>
			</thead>
		<?php
		while($row = mysqli_fetch_array($query_exec)){
			?>
			<tr>
				<td><?=$row['FNAME'];?></td>
				<td><?=$row['MNAME'];?></td>
				<td><?=$row['LNAME'];?></td>
				<td><?=$row['BDAY'];?></td>
			</tr>
			<?php
		}
		?>
			</tr>
		</table>
		<?php
		/*
		* End the loop
		*/

		if(isset($_POST['information']) && !empty($_POST['information'])){
			$first_name = $_POST['txt_fname'];
			$middle_name = $_POST['txt_mname'];
			$last_name = $_POST['txt_lname'];
			$bday = $_POST['txt_bday'];
			$insert_info =  "insert into " . TABLE . "(FNAME,MNAME,LNAME,BDAY) values('".$first_name."','".$middle_name."','".$last_name."','".$bday."');";
			if(mysqli_query($conn,$insert_info)){
				echo "<meta http-equiv='refresh' content='0'>";
			}
		}
		else{
			echo "<br/>";
			echo "Form not set";
		}
		?>
		<hr>
		<form action="" method="post" onsubmit="return VALIDATE();">
			FIRST NAME:
			<input type="text" name="txt_fname" id="txt_fname" required><br/>
			MIDDLE NAME:
			<input type="text" name="txt_mname" id="txt_mname" required><br/>
			LAST NAME:
			<input type="text" name="txt_lname" id="txt_lname" required><br/>
			BIRTHDAY:
			<input type="text" name="txt_bday" id="txt_bday" required><br/>
			<input type="submit" name="information" value="SUBMIT">
		</form>
	</body>
</html>