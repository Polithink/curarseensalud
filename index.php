<?php
	
	include 'scr/config.php';
	
	include 'templates/header.php';
	
	if( isset( $_GET['p'] ) ) {

		$url_vars = explode("/",$_GET['p']);
		$pagina = $url_vars[0];
		
		switch ( $pagina ) {

			case "inicio":
				include 'templates/nav.php';
				include 'templates/home/home_template.php';
				include 'templates/footer.php';
				break;

			default:
				include 'templates/404.php';
                break;
		}
	}
	else{
		include 'templates/nav.php';
		include 'templates/home/home_template.php';
		include 'templates/footer.php';
	}
	
    include 'templates/scripts.php';
?>