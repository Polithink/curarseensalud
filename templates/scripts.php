<script src="scr/js/bin/materialize.min.js"></script>
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