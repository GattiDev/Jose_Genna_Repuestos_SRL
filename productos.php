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
        <title>Jose Genna Repuestos : : Productos</title>
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
                                    <a class="nav-link active" href="#">Productos</a>
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
              
            <!--Thing Body-->
            <div id="thingBody" class="row">
                <?php 
                    $GetModel_ImagesHomeProduct = new Get_Model();
                    $getHomeProduct = 2;
                    $HomeProduct = 'home-product';

                    $dataHomeProduct = $GetModel_ImagesHomeProduct->Get_Images($getHomeProduct, $HomeProduct);
    
                    while($getHomeProduct = mysqli_fetch_assoc($dataHomeProduct)){
       
                        $pos = strpos($getHomeProduct['description'], '|');
        
                        $num = ($pos + 1);
                        $before = substr($getHomeProduct['description'], 0, $pos);
                        $after = substr($getHomeProduct['description'], $num);
                                  
                        $posAfter = strpos($getHomeProduct['description'], '|');
                        $numAfter = ($posAfter - 1);
            
                        echo "<div id='thingProduct'>";
                            echo "<div class='card'>";
                                echo "<img src='data:".$getHomeProduct['type'].";base64,".base64_encode($getHomeProduct['image'])."' class='card-img-top'>";
                                echo "<div class='card-body'>";
                                    echo "<h4>".$before."</h4>";
                                    echo "<p class='card-text'>".$after."</p>";
                                echo "</div>";
                            echo "</div>";     
                        echo "</div>";           
                    }
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