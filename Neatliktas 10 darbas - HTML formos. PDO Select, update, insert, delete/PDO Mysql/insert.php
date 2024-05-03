<?php
include "connect.php";

	$title=$_GET["title"];
	$author=$_GET["author"];
	//print ($title." ");
	$sql="INSERT INTO book (title, author) VALUES ('".$title."','".$author."')";
	
	if ($conn->query($sql) == TRUE) {
		print ("Naujas irasas sukurtas");
		print ("<a href=list.php> Sarasas </a>");
	} else {
		print ("laida");
	}
?>