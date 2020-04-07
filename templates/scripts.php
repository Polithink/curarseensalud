<script src="scr/js/bin/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script>

  const menu = document.querySelector('nav');
  // console.log(menu);
  const burgerButton = document.querySelector('#burger-menu');
  // console.log(burgerButton);

  burgerButton.addEventListener('click', hideShow)
    
  
  function hideShow() {

    if (menu.classList.contains('is-active')) {
      menu.classList.remove('is-active');
    } else {
      menu.classList.add('is-active');
    }

    if (burgerButton.classList.contains('is-active')) {
      burgerButton.classList.remove('is-active');
    } else {
      burgerButton.classList.add('is-active');
    }

  }
</script>

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
    <script type="module">
      // var slider = tns({
      //   container: '.my-slider',
      //   items: 3,
      //   slideBy: 'page',
      //   autoplay: true,
      //   autoHeight: true
      // });
  </script>
</body>
</html>