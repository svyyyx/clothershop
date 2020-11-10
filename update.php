<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","insta");
 	$text_query = "SELECT * FROM posts";
	$query = mysqli_query($connect, $text_query);
	$stroka1 = $query->fetch_assoc();
	$stroka2 = $query->fetch_assoc();
	$query1 = mysqli_query($connect, "UPDATE posts SET user = 'ligonneleprikon' WHERE id = 1;");
	$query2 = mysqli_query($connect, "UPDATE posts SET user = 'dan441' WHERE id = 2;");
	echo $stroka1["user"];
	echo $stroka2["user"];
		
	?>