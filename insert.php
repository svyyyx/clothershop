<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","insta");
	$text_zaprosa_vstavit = "INSERT INTO posts (user, img, text) VALUES ('{$_GET["user"]}','{$_GET["img"]}','{$_GET["text"]}')";
 	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); //запрос для ввода в таблицу

 	header('Location: index.php')
?>