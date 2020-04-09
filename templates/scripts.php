<script src="scr/js/bin/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="scr/js/nav.js"></script>

<?php 
    ## JS files
    switch ($pagina) {

      case 'inicio':
        echo '<script src="scr/js/inicio/inicio.js"></script>';
        break;

      case 'descargas':
        echo '<script src="scr/js/descargas/descargas.js"></script>';
        break;
      
      case 'panorama':
        echo '<script src="scr/js/panorama/panorama.js"></script>';
        break;
      
      case 'enfermedades-por-vector':
        echo '<script src="scr/js/tnsSettings.js"></script>';
        break;
      
      default:
        echo '<script src="scr/js/inicio/inicio.js"></script>';
        break;
    }
  ?>

<?php
        /*if (isset($_GET['p'])) {

            $path  = 'scr/js/'.$pagina;

            if ( is_dir($path) ) {
                
                $files = scandir($path);
            
                $files = array_diff(scandir($path), array('.', '..'));
                rsort($files);

                foreach ($files as $key => $value) {

                    echo '<script src="' . $path . '/' . $value . '"></script>';
                
                }

            }

        }*/

    ?>
    
</body>
</html>