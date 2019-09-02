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
			
			case "quienes":
				include 'templates/nav.php';
				include 'templates/quienes/quienes.php';
				include 'templates/footer.php';
				break;

			 case "nosmueve":
				 include 'templates/nav.php';
				 include 'templates/mueve/mueve.php';
				 include 'templates/footer.php';
				 break;
				
			case "panorama":
				 include 'templates/nav.php';
				 include 'templates/panorama/panorama_template.php';
				 include 'templates/footer.php';
				 break;
				
			case "enfermedades-por-vector":
				 include 'templates/nav.php';
				 include 'templates/vector/vector_template.php';
				 include 'templates/footer.php';
				 break;
				
			case "descargas":
				 include 'templates/nav.php';
				 include 'templates/biblioteca/biblioteca_template.php';
				 include 'templates/footer.php';
				 break;
				
			case "global-week":
				//  include 'templates/nav.php';
				 include 'templates/global-week/global-week.php';
				//  include 'templates/footer.php';
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