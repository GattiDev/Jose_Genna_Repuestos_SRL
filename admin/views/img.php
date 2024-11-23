<?php 
    include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
    require_once "../models/main_model.php"; 
    $Gallery = new Get_Model();
    $getImagesHomeAviso = 2;
    $HomeProduct = 'home-product';

?>
<section class="gallery" id="portafolio">
  <div class="contenedor">
    <div class="contenedor-galeria">
        <?php 
            $Get_gallery = $Gallery->Get_Images($getImagesHomeAviso, $HomeProduct);  
            while($getgallery = mysqli_fetch_assoc($Get_gallery)){
                echo "<img src='data:".$getgallery['type'].";base64,".base64_encode($getgallery['image'])."' alt='' class='img-galeria'>";
            }
          ?>      
    </div>
  </div>
</section>

<!-- js -->
<script  src="../js/gallery_script.js"></script>