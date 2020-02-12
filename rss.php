<?php
	
	$object = new DOMDocument();
	$object->load("https://exerxml.herokuapp.com/");
	
	
	$content = $object->getElementsByTagName("item");
	
	foreach($content as $data){
			$name = $data->getElementsByTagName("name")->item(0)->nodeValue;
			$age = $data->getElementsByTagName("age")->item(0)->nodeValue;
			$gender = $data->getElementsByTagName("gender")->item(0)->nodeValue;
			
	
		echo "$name - $age - $gender <br>";
	}

	
	
?>
