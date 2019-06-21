<script src="scr/js/bin/materialize.min.js"></script>
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
        if (isset($_GET['p'])) {

            $path  = 'scr/js/'.$pagina;

            if ( is_dir($path) ) {
                
                $files = scandir($path);
            
                $files = array_diff(scandir($path), array('.', '..'));
                rsort($files);

                foreach ($files as $key => $value) {

                    echo '<script src="' . $path . '/' . $value . '"></script>';
                
                }

            }

        }

    ?>
</body>
</html>