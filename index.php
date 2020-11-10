<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">

	</style>
  </head>
  <body>
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<a href="admin.php">
								<img src="logo2.png" class="w-100">
							</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2">
							<img src="1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="3.png" class="w-50">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2"> 
				<?php 
					$con = mysqli_connect('127.0.0.1', 'mysql','mysql','insta');
					$query = mysqli_query($con, "SELECT * FROM posts");

	 			?>
							<?php 
	 		//цикл начинается
	 		for($i=0;$i < $query->num_rows; $i++){
	 			$stroka = $query->fetch_assoc();

	 						?>
				<!--САМ ПОСТ-->
				<div class="mt-5 border rounded">   
					<div class="col-12 px-1">
						<div class="row">
							<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
								<img src="logo.gif" class="w-100 rounded-circle">
							</div>
							<div class="col-10 pb-4 pt-3 text-left">
								<h6 class="mb-0"><?php echo $stroka["user"]; ?></h6>
								<p class="mb-0">Якутск</p>	
							</div>													
						</div>
					</div>
					
					<div class="col-12 kartinka" style="height: 400px; background-image: url(<?php echo $stroka["img"]; ?>); background-size: 100% 100%"> <!--картинка поста-->
						<div class="redactImg" style="display: none;">
							<div class="mx-auto text-center" style="width: 350px;height: 200px;background-color: red;" >
								<h1>Вы уверены?</h1>
								<div style="display: flex;width: 200px;" class="mx-auto px-5">
									<button class="btn-success btn btnyes">Да</button>
									<button class="btn ml-1 btnno" style="background: none;">Нет</button>
								</div>
								<form method="GET" action="upimg.php" class="updImg" style="display: none;">
									<input type="file" name="imge">
									<input type="" placeholder="" style="display: none" value='<?php echo $stroka["id"]?>' name="idee">
									<button>Send</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-12 py-2">  <!--текстовые элементы поста-->
						<div>
							<p>Lol, KEK еще 13</p>
						</div>
						<div>
							<p><?php echo $stroka["text"]; ?></p>
						</div>
						<div>
							<p>5 недель назад</p>
						</div>						
					</div>
					<button class="btn reda">Редактировать</button>
					<div class="redact" style="display: none;">
	 					<form action="updatenow.php" method="GET" style="">
							<input type="" placeholder="Текст" style="border:none;" value='<?php echo $stroka["text"]?>' name="texte">
							
							<input type="" placeholder="" style="display: none" value='<?php echo $stroka["id"]?>' name="ide">
							<button class="btn">Send</button>
						</form>
					</div>
					<form method="GET" action="delete.php">
	 					<input type="text" style="display: none;" name="ide" placeholder='' value='<?php echo $stroka["id"]?>' class="w-100">
	 					<button class="btn" style="background-color: red;">Удалить</button>
	 				</form>
				</div>
				<!-- ПОСТ ЗАКРЫЛСЯ-->
							<?php } ?>

			
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10">
								<h6 class="mb-0">Nickname</h6>
								<p class="text-secondary mb-0">Name</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
  		let reda = document.querySelectorAll(".reda");
  		let redact = document.querySelectorAll(".redact");
  		let redactImg = document.querySelectorAll(".redactImg");
  		let btnyes = document.querySelectorAll(".btnyes");
  		let btnno = document.querySelectorAll(".btnno");
  		let updImg = document.querySelectorAll(".updImg");
  		let kartinka = document.querySelectorAll(".kartinka");
  		let yesnovalue = 0;
  	for (let i = 0; i < reda.length; i++) {
  		reda[i].onclick = function(){
  		reda[i].style.display = "none";
  		redact[i].style.display = "block";
  		}	
  	}

  	for (let i = 0; i < kartinka.length; i++) {
  		kartinka[i].onclick = function(){
  		redactImg[i].style.display = "block";
  		btnyes[i].onclick = function(){
  			yesnovalue = 1
  		};
  		btnno[i].onclick = function(){
  			yesnovalue = 0;
  		};
  		if (yesnovalue == 1) {
  			updImg[i].style.display = "block"
  		}
  		if (yesnovalue == 0) {
  			redactImg[i].style.display = "none"
  		}
  		
  		}	
  	}
  		


  </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

  
</html>