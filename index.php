<?php
		$host = "dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com"; $username = "admin";
		$password = "root1234";
		$connect = @mysqli_connect($host, $username, $password) or die("Unable to connect to host");
		$db = @mysqli_select_db($connect, "db_1822002") or die("Cannot connect to database");
		$sql = "select * from Erp";
		$dbrecords = mysqli_query($connect,$sql) or die("Unable to query data");
		
		header("Content-type: text/xml");
		 echo "<?xml version = '1.0' encoding = 'UTF-8'?>
			<data>";
		while($row = mysqli_fetch_object($dbrecords)) {
				echo "<item>
					<name>$row->Name</name>
					<age>$row->Age</age>
					<gender>$row->Gender</gender>
					
				</item>";
				}
				echo "</data>";
				mysqli_close($connect);
		?>
		
		
