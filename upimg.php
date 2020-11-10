<?php
	
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","insta");
	$updating = "UPDATE posts SET img = '".$_GET[imge]."' WHERE id = '".$_GET[idee]."'";
 	$zapros_vvoda = mysqli_query($connect, $updating); //запрос для ввода в таблицу
	header('Location: index.php')
?>

