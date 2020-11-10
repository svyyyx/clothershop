<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","insta");
	$deleting = "DELETE FROM posts WHERE id = '".$_GET[ide]."'";
 	$zapros_vvoda = mysqli_query($connect, $deleting); //запрос для ввода в таблицу

 	header('Location: index.php')
?>