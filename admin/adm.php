<?PHP 
	include ('../setting/database.php');
  require_once "models/main_model.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jose Genna Repuestos : : Administración</title>

    <!--/ Icono /-->
    <?php
	    $fecha = date("j-m");
      // Cambio la imagen segun el dia 
      if($fecha == "08-12"  || $fecha == "09-12" || $fecha == "10-12" || $fecha == "11-12" || $fecha == "12-12" || $fecha == "13-12" || 
        $fecha == "14-12" || $fecha == "15-12" || $fecha == "16-12" || $fecha == "17-12" || $fecha == "18-12" || $fecha == "19-12" || 
        $fecha == "20-12" || $fecha == "21-12" || $fecha == "22-12" || $fecha == "23-12" || $fecha == "24-12" || $fecha == "25-12" || 
        $fecha == "26-12" || $fecha == "27-12" || $fecha == "28-12" || $fecha == "29-12" || $fecha == "30-12" || $fecha == "31-12" || 
        $fecha == "1-01"  || $fecha == "2-01"  || $fecha == "3-01"  || $fecha == "4-01"  || $fecha == "5-01"  || $fecha == "6-01"  || 
	      $fecha == "7-01"){ ?>
				
        <!-- Icono Navideño -->
		    <link rel="icon" type="favicon/x-icon" href="../materials/logo/logo-nv.png" />	
      <?php }else{  ?>
			  <!-- Icono -->
			  <link rel="icon" type="favicon/x-icon" href="../materials/logo/logo.png" />
      <?php  }
    ?> 

    <!-- Styles -->
	  <link rel="stylesheet" type="text/css" href="css/main_style.css" />
    <link rel="stylesheet" type="text/css" href="css/adm_styles.css" />
    <link rel="stylesheet" type="text/css" href="css/includes/BootsTrap.min.css" />
    <!-- Js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="../bookstores/Jquery/jquery-3.7.1.min.js"></script>
    <script src="js/insert/admbtn.js"></script>
    
    <!--/ Font Awesome V6 /-->
    <script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>

    <!--/ ALERTIFY /-->	
		<link rel="stylesheet" type="text/css" href="../bookstores/alertify/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../bookstores/alertify/css/themes/bootstrap.css">
		<script src="../bookstores/alertify/alertify.js"></script>
  </head>
    
  <body>
        
    <div id="thingBox" class="container text-center">
      
      <!-- Head Content -->
      <div id="thingHead" class="row justify-content-start">
        <!--Logo-->
        <div id="logo" class="col-12">
          <h1>Jose Genna</h1>
        </div>
      </div>
  
      <!-- Menú -->
      <nav id="section_button">	
                    
        <a class="menu-btn" onclick="btn_marcas()">
          <span class="title">Marca</span>	  
        </a>

				<a class="menu-btn" onclick="btn_product()"> 
          <span class="title">Productos</span>
        </a> 

				<a class="menu-btn" onclick="btn_dolar()">
          <span class="title">Dólar</span>
        </a>

        <a class="menu-btn" onclick="btn_lista()">
          <span class="title">Listas</span>
        </a>

        <a class="menu-btn" onclick="btn_subImg()">
          <span class="title">Subir Imágenes</span>              	  
        </a>
              
        <a class="menu-btn" onclick="btn_Img()">
          <span class="title">Imágenes</span>                 	  
        </a>

        </br>

        <a class="menu-btn" href="../index.php">
          <span class="title">Cerrar Sesión</span>                 	  
        </a>
    	</nav>
        
      <h2 id="titulo"></h2>
				
			<aside id="table">
				<section class="marcas"></section>
				<section class="productos"></section>
				<section class="dolar"></section>    
				<section class="listas"></section>
				<section class="subImg"></section>
				<section class="img"></section>
			</aside>	

      <div id="thingFooter" class="row justify-content-end">
        <div class="col-12">
          <!-- Footer - Inicio -->
		      <footer>
			      <h6> Jose Genna | 2021 - <?php echo date("Y");?> | Todos los derechos reservados | </h6>
			      <h5> &copy; Developed and Designed by <a href="https://gattidev.com" target="_blank" title="Gatti Developer">GattiDev</a></h5>
		      </footer>
        </div>
      </div>
    </div>     
    
    <!-- Formularios para completar -->
    <?php require_once 'views/insert_form.php'; ?>	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>

<!--/ Metodo para Obtener los datos /-->
<script type="text/javascript" src="js/method.js"></script>
<script type="text/javascript" src="js/mtd_get.js"></script>
<script type="text/javascript" src="js/mtd_put.js"></script>
<script type="text/javascript" src="js/mtd_upd.js"></script>
<script type="text/javascript" src="js/mtd_dlt.js"></script>