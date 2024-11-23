<?PHP 
    include ('../setting/database.php');
	require_once "models/main_model.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--/ Para que funcione en los navegadores viejos /-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--/ Para los celulares, para que no hagan zoom /-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>GattiDev</title>
		<!--/ Icono /-->   
	    <link rel="icon" type="favicon/x-icon" href="materials/icon/gattidev.png" />
		<!--/ Styles /-->
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<!--/ Font Awesome V6 /-->
		<script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>
		<!--/ Js /-->
		<script src="js/main_title.js"></script>
		<script src="js/button.js"></script>
		<script src="js/datetime.js"></script>
		<script src="bookstores/Jquery/jquery-3.7.0.min.js"></script>
		<!--/ ALERTIFY /-->	
		<link rel="stylesheet" type="text/css" href="bookstores/alertify/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="bookstores/alertify/css/themes/bootstrap.css">
		<script src="bookstores/alertify/alertify.js"></script>	
	</head>
	<body onLoad="Reloj()">
		
		<header id="head_content"> <!--/ Head Content - Inicio /-->
				
			<span id="logobox">
				<img src="materials/logo/banner.png" alt="Banner GattiDev" class="img1">
			</span>
				
			<address class="datebox">
					
				<div class="fecha">
					<p id="date" class="date"></p>
				</div>
	
				<div class="reloj">
					<p id="time" class="time"></p>
				</div>
			</address>
				
		</header>  
				
		<main id="main_content"> <!--/ Main Content - Inicio /-->
								
			<nav>
				<button class="btn icon fa-solid fa-user" aria-hidden="true" onclick="btn_admin()">
					<span class="btnadmin">Administrador<span>
				</button>
				
				<button class="btn icon fa-solid fa-award" aria-hidden="true" onclick="btn_license()">
					<span class="btnlicen">Licencia<span>
				</button>
			</nav>
				
			<section>
					
				<aside>
					<h1 id="titulo"></h1>
				</aside>
					
				<article id="table">
					<div class="tb_administrator"></div>	
					<div class="tb_license"></div>	
				</article>
			</section>
					
		</main>
		
		
		<?php //---> OPCIONES PARA COMPLETAR -->
			require_once 'views/insert_data.php';
		?>
		
		<script  src="js/datetime.js"></script>
	</body>
</html>
<!--/ Generador de Contraseña /-->
<script type="text/javascript" src="js/key/key-generator.js"></script>
<script type="text/javascript" src="js/key/automatic-key-generator.js"></script>
<!--/ Metodos /-->
<script type="text/javascript" src="js/method/get.js"></script>
<script type="text/javascript" src="js/method/put.js"></script>
<script type="text/javascript" src="js/method/update.js"></script>
<script type="text/javascript" src="js/method/delete.js"></script>