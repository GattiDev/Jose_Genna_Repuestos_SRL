<?PHP 
  include ('../setting/database.php'); //--> Importo la Base de Dato
?>
<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Jose Genna Repuestos : : Login</title>
    
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

    <link rel="stylesheet" href="css/login_style.css">
  </head>
  <body>
    
    <div id="box_body">
      
      <div class="avatar" onclick="login()">
        <div class="avatar_box">
          <div id="avatar_img">
            <?php
              $fecha = date("j-m");
              // Cambio la imagen segun el dia 
              if($fecha == "08-12" || $fecha == "09-12" || $fecha == "10-12" || 
                $fecha == "11-12" || $fecha == "12-12" || $fecha == "13-12" || 
                $fecha == "14-12" || $fecha == "15-12" || $fecha == "16-12" || 
                $fecha == "17-12" || $fecha == "18-12" || $fecha == "19-12" || 
                $fecha == "20-12" || $fecha == "21-12" || $fecha == "22-12" || 
                $fecha == "23-12" || $fecha == "24-12" || $fecha == "25-12" || 
                $fecha == "26-12" || $fecha == "27-12" || $fecha == "28-12" || 
                $fecha == "29-12" || $fecha == "30-12" || $fecha == "31-12" || 
                $fecha == "1-01" || $fecha == "2-01" || $fecha == "3-01" || 
                $fecha == "4-01" || $fecha == "5-01" || $fecha == "6-01" || 
                $fecha == "7-01"){ ?>
                <img src="../materials/perfil/nv-men.jpg" alt="Image 1" class="img1">
              <?php }else{ ?>
                <img src="../materials/perfil/men.jpg" alt="Image 1" class="img1">
              <?php } 
            ?> 
          </div>
        </div>
      </div>

      <div id="Formbox">
        <form action="controllers/login_main.php" method="POST">
          <div id="boxInputName">
            <div class="InputName">
              <input type="text" class="name" name="user" required pattern='[A-Za-z Á-É-Í-Ó-Úá-é-í-ó-ú]+' maxlength="9"/>
              <label class="name-label">User</label>
            </div>
          </div>
        
          <div id="boxInputPass"> 
            <div class="InputPass">
              <input type="password" class="pass" name="password" required pattern='[0-9- ]+' maxlength="6" />
              <label class="pass-label">Password</label>       
           </div>
          </div>
          <button type="submit" style="opacity: 0;"></button>
        </form>
      </div>
    <script src="js/main.js"></script>
  </body>
</html>