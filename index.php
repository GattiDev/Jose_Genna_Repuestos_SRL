<?php 
  include ('setting/database.php');
  require_once "admin/models/main_model.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta athor="GattiDev : Ezequiel Gatti" date="01/08/2021">
  
    <title>Jose Genna Repuestos : : Home</title>
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
				<link rel="icon" type="favicon/x-icon" href="materials/logo/logo-nv.png" />
				
      <?php }else{  ?>
			  <!-- Icono -->
				<link rel="icon" type="favicon/x-icon" href="materials/logo/logo.png" />
      <?php  }
    ?> 
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/cookies-style.css">
    <!-- Js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="bookstores/Jquery/jquery-3.7.1.min.js"></script>

    
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5839KTZD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container text-center">
      
      <!--Thing Menu-->
      <div id="thingMenu" class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
        
            <?php
				      $fecha = date("j-m");
				      // Cambio la imagen segun el dia 
				      if($fecha == "08-12"  || $fecha == "09-12" || $fecha == "10-12" || $fecha == "11-12" || $fecha == "12-12" || $fecha == "13-12" || 
					      $fecha == "14-12" || $fecha == "15-12" || $fecha == "16-12" || $fecha == "17-12" || $fecha == "18-12" || $fecha == "19-12" || 
					      $fecha == "20-12" || $fecha == "21-12" || $fecha == "22-12" || $fecha == "23-12" || $fecha == "24-12" || $fecha == "25-12" || 
					      $fecha == "26-12" || $fecha == "27-12" || $fecha == "28-12" || $fecha == "29-12" || $fecha == "30-12" || $fecha == "31-12" || 
					      $fecha == "1-01"  || $fecha == "2-01"  || $fecha == "3-01"  || $fecha == "4-01"  || $fecha == "5-01"  || $fecha == "6-01"  || 
					      $fecha == "7-01"){ ?>
							  
                <!-- Logo Navideño -->
						    <a class="col logo navbar-brand img" href="admin/login.php"><img src="materials/logo-nv.png"/></a>
					     
				      <?php }else{ ?>
						    <!-- Logos -->
						    <a class="col logo navbar-brand img" href="admin/login.php"><img src="materials/logo.png" /></a>
					    <?php }
			      ?> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pedido.php">Pedido</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listas.php">Listas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="historia.php">Historia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
           
      <div id="thingAviso" class="row">
        <?php //---> AVISOS          
          $GetModel_ImagesHomeAviso = new Get_Model();
          $getImagesHomeAviso = 1;
          $HomeAviso = 'home-aviso';
            
          //Varaible para la fecha publicacion
          $fechaPublicacion = '';
            
          $dataHomeAviso = $GetModel_ImagesHomeAviso->Get_Images($getImagesHomeAviso, $HomeAviso);  
          while($getHomeAviso = mysqli_fetch_assoc($dataHomeAviso)){
                
            if(isset($getHomeAviso)){
                   
              $fechaPublicacion = $getHomeAviso['date'];           
                
              //Fecha actual
              $fechaActual = date("Y-m-d");
              if($fechaPublicacion >= $fechaActual ){
                echo "<div class='col-12'>";
                  echo "<h2 class='efecto'>Avisos Importantes</h2>";
                  echo "<img src='data:".$getHomeAviso['type'].";base64,".base64_encode($getHomeAviso['image'])."'>";
                echo "</div>";
              }elseif($fechaPublicacion < $fechaActual){       
                $id = $getHomeAviso['id'];
                       
                $Delete_Model = new Delete_Model();
                $dataHomeAviso = $Delete_Model->Delete_Images($id);
              }
            }              
          }  
        ?>
      </div>
    
      <!--Thing Body-->
      <div id="thingBody" class="row">
        <div class="col">
          <img class='img local' src="materials/local.jpg" />
        </div>
          
        <div class="col txt">
          <h3>~ Venta de repuestos legítimos para tractores </h3>
          <h3>~ Venta y reparación de equipos hidráulicos </h3>
          <h3>~ Repuestos para motores</h3>
        </div>  
      </div>
      
      <div id="thingBisBody" class="row">    
        <h2 class="efecto">Somos Distribuidores Oficiales</h2>
        
        <div id="caja" class="col">
          <a href="" target='_black'><img src="materials/marcas/Comel.png"></a>
          <h4>Acoples Rápidos</h4>      
        </div>  
          
        <div id="caja" class="col">
          <a href="" target='_black'><img src="materials/marcas/Fulp100.png"></a>
          <h4>Bombas de agua</h4>      
        </div> 
          
        <div id="caja" class="col">
          <a href="" target='_black'><img src="materials/marcas/Livenza.png"></a>
          <h4>Sohipren | Livenza</h4>      
        </div> 
                      
        <div class='col-12'>
          <hr>
          <div id='ubicacion'>
            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44192.30163197539!2d-60.912697392262466!3d-34.58867101495128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c8674c03ed7f1c5!2sGENNA%20JOSE!5e0!3m2!1ses!2sar!4v1623000018302!5m2!1ses!2sar' width='100%' height='340px' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
          </div>
          <hr>
        </div>
      </div>
      
      <div id="thingData" class="row">
        <div class="col ubicacion">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
          </svg>       
          Bto. de Miguel 551 - Junín - Bs.As.
        </div>
        
        <div class="col horario">  
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
          </svg>
          <b>Lunes a Viernes</b><br>  
          8:30hs a 13:00hs y 14:30hs a 18:00hs     
          <br><b>Sábado</b><br>  
          8:30hs a 13:00hs			    
        </div>
      </div>


      <!-- Thing Slider Marcas -->
      <div class="row justify-content-end">
        <div class="col-12" style="margin: 0px; padding: 0px;">
		      <section id="thingSlider">
			      <div class="marcas"></div>
		      </section>     
        </div>
      </div>

      <!-- Thing WhatsApp-->
      <!--<div>
        <div>
   		    <div class="whatsapp-main">
			      <div type="floating" class="whatsapp-wrapper hide-whatsapp" style="width: 360px;">
     			    <--Close--
     			    <div role="button" tabindex="0" class="close_whatsapp"></div>
           		<div class="whatsapp-header">
           		  <--Avatar--
        			  <div size="52" class="support-avatar">
              	  <div class="avatar-wrapper">
                 		<div class="avatar-img"></div>
               		</div>
              	</div>
              				
					      <--Info--  
              	<div class="header-info">
               		<div class="whatsapp-name">Mariano</div>
               		<div class="whatsapp-reply-time">En linea.</div>
              	</div>
            	</div>
            
            	<div class="whatsapp-background">
              	<div class="whatsapp-message-container">
               		<div class="loading-animation">
               			<div class="dot-pulse"></div>
               		</div>
                
               		<div class="whatsapp-message-wrapper">
              			<div class="chat-body-wrapper">
                 			<div class="whatsapp-chat-name">Mariano</div>
                 			<div class="whatsapp-chat-message">
                 				<p>Hola</p> <--<br>--
                 				<p>Estoy aquí para tomarte el pedido, así que déjame tu consulta y estaré encantado de tomar tu pedido.</p>
                 			</div>
							        <?php
								        /* date_default_timezone_set('America/Argentina/Buenos_Aires');
								        $fecha_actual = date("H:i");
                 				echo "<div class='whatsapp-chat-time'>" . $fecha_actual . "</div>"; */
							        ?>
            			  </div>
            		  </div>
         			  </div>
            
        		    <a role="button" href="https://api.whatsapp.com/send?phone=2364657124" title="WhatsApp" class="whatsapp-btn">
              	  <span class="chat-button-text">Comenzar chat</span>
                </a> 
              </div>
            </div>
          
 		        <div class="whatsapp-popup-button btn-whatsapp-pulse" id="whatsapp-popup">
              <div class="whatsapp-notify"></div>
              <div class="whatsapp-button-main">
         		    <svg class="whatsapp-send-icon-big" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            		  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="#FFFFFF"/>
          		  </svg> 
        		  </div>
      		  </div>
       	  </div>
 	      </div>
      </div>-->
      <!--Thing Footer-->
      <footer id="thingFooter" class="row"> 
        <div class="col jg">
  	      <h6> Jose Genna | 2021 - <?php echo date("Y");?> | Todos los derechos reservados | </h6>
        </div>
        
        <div class="col dev">
          <h6> &copy; Developed by <a href="https://gattidev.com" target="_blank" title="Gatti Developer">GattiDev</a></h6>
        </div> 		     
      </footer>
    </div>
      
    <div class="aviso-cookies" id="aviso-cookies">
      <p class="parrafo">Este sitio web utiliza cookies para mejorar tu experiencia de usuario. Si continúas navegando aceptas mi política de cookies.
      <a class="enlace" href="politica-de-cookies.html">Leer más.</a></p>
      <button class="boton" id="btn-aceptar-cookies">Aceptar</button>
    </div>

    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>
  <script src="js/aviso-cookies.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Whatsapp--->			
    <script src="js/whatsapp.js"></script>
  </body>
</html>