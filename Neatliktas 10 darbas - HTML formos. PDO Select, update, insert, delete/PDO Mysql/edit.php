<?php
include "connect.php";
	$id=$_GET["id"];
	$sql="SELECT * FROM book where id=$id";
	$data = $conn->query($sql)->fetchAll();
  
	foreach ($data as $row) {
	$id=$row['id'];
	$name=$row['author'];
	$title=$row['title'];
		print ("<FORM METHOD=get  ACTION='update.php'>");
				print("<INPUT TYPE='hidden' NAME='id' value='$id'>");
				print("Title: <INPUT TYPE='text' NAME='title' value='$title'>");
				print ("<br>Author: <INPUT TYPE='text' NAME='author' value='$name' > ");
				print ("<br> <INPUT TYPE='submit' VALUE='Keisti'>");
				print 	("<INPUT TYPE='reset' VALUE='Atsaukti'>");
		print ("</FORM>");
		print ("<a href=list.php> Sarasas </a>");
 	}
?>