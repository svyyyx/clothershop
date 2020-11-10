<?php
	
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","insta");
	$updating = "UPDATE posts SET text = '".$_GET[texte]."'  WHERE id = '".$_GET[ide]."'";
 	$zapros_vvoda = mysqli_query($connect, $updating); //запрос для ввода в таблицу
	header('Location: index.php')
	?>

