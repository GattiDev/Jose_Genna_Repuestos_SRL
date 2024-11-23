<?php 
    include ('setting/database.php');
    require_once "admin/models/main_model.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5839KTZD');</script>
        <!-- End Google Tag Manager -->

        <!-- AdSense - Google -->
        <meta name="google-adsense-account" content="ca-pub-7818068429544622">
        <title>Jose Genna Repuestos : : Listas</title>
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
        <!-- Js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <!-- AdSense - Google -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7818068429544622"
        crossorigin="anonymous"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GZGJQ4FP6L"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-GZGJQ4FP6L');
        </script>
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
						        <a class="col logo navbar-brand img" href="#"><img src="materials/logo-nv.png"/></a>
					        <?php }else{ ?>
						        <!-- Logos -->
						        <a class="col logo navbar-brand img" href="#"><img src="materials/logo.png" /></a>
					        <?php }
			            ?> 
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="productos.php">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pedido.php">Pedido</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Listas</a>
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
              
            <!--Thing Body-->
            <div id="thingBody" class="row">
                <?php 
                    $Run_Model = new Run_Model();
                    $run_lista = $Run_Model->Run_listas();
                    echo "<div id='box'>";
                        echo "<p> Estimado cliente a continuación usted podrás descargar las listas con sus precios, en formato Excel si la lista está disponible.</p>";
                        echo "<p>Cualquier consulta que tenga sobre algún precio o artículo en particular, comuníquese por WhatsApp o por el correo de ventas que se encuentra dentro de contacto.</p>";
       
                        while($getLista = mysqli_fetch_assoc($run_lista)){

                            echo "<div class='boxLista'>";
                   
                                $id = $getLista['id_brands'];
                
                                $Get_Model = new Get_Model();
                                $get_marca = $Get_Model->Get_Marca($id);

                                while($getmarca = mysqli_fetch_assoc($get_marca)){
                   
                                    echo "<h4>".$getmarca['brand']."</h4>";
               
                                    $fecha = new DateTime($getLista['date']);
                                    $fecha_d_m_y = $fecha->format('d/m/Y');
                                    echo "<p>".$fecha_d_m_y."</p>"; 
                        
                                    if($getLista['state'] == 'Di'){ ?>
                          
                                        <!--EXE-->
                                        <a class='menu-btn' style='text-decoration: none; color: #5B94CF;' href="admin/controllers/archivos-subidos/<?php echo $getmarca['brand'] ?>.xlsx" target='_blank'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"/>
                                                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                            </svg> 
                                        </a>
                            
                                        <svg xmlns="http://www.w3.org/2000/svg" style='color: green;' width="30" height="30" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                        </svg>
                                            
                                    <?php }else{  ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" style='color: #323232;' width="32" height="32" fill="currentColor" class="bi bi-cloud-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.112 5.112a3.125 3.125 0 0 0-.17.613C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13H11l-1-1H3.781C2.231 12 1 10.785 1 9.318c0-1.365 1.064-2.513 2.46-2.666l.446-.05v-.447c0-.075.006-.152.018-.231l-.812-.812zm2.55-1.45-.725-.725A5.512 5.512 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773a3.2 3.2 0 0 1-1.516 2.711l-.733-.733C14.498 11.378 15 10.626 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3c-.875 0-1.678.26-2.339.661z"/>
                                            <path d="m13.646 14.354-12-12 .708-.708 12 12-.707.707z"/>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" style='color: orange;' width="30" height="30" fill="currentColor" class="bi bi-bookmark-x" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"/>
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                        </svg>
                                    <?php   }	
                                } 
                            echo "</div>";
                        }
                    echo "</div>";
                ?>
            </div>
      
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
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>