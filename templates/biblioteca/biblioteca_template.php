<section class="container bg-circulos">
    <div class="grid-container">
        <h1>Biblioteca</h1>
        <h2>Aquí te presentamos algunas de las dudas más comunes</h2>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>¿Por qué debo vacunar a mi hijo?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        Porque las vacunas previenen enfermedades graves en los niños, las cuales pueden dejar secuelas e incluso causar la muerte. 
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>Si no le aplicaron ninguna vacuna a mi hijo cuando nació ¿Cuándo debo llevarlo a vacunar?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        En el primer contacto con los servicios de salud. Se le aplicarán las vacunas correspondientes a su edad.
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>¿Cómo sé que funcionan las vacunas si nunca he visto a un niño con esas enfermedades?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        Precisamente es gracias a la efectividad de las vacunas que actualmente no nos 
                        encontramos fácilmente con niños que presenten esas enfermedades. 
                    </p>    
                    <p>
                        El resurgimiento de enfermedades como el sarampión se ha dado por la 
                        falta de apego a la vacunación. 
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>¿Qué enfermedades se previenen si le aplico todas las vacunas a mi hijo?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        Tuberculosis (formas graves: miliar y meníngea), hepatitis B, difteria, tos ferina, 
                        tétanos, haemophilus Influenza tipo B, poliomielitis, diarreas por rotavirus, 
                        neumonías ocasionadas por neumococo, sarampión, rubéola, parotiditis o paperas, 
                        infección por virus del papiloma humano e influenza.  
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>¿Qué hacer si se me pasó la fecha de aplicación de alguna vacuna?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        Las vacunas tienen un control muy estricto y es muy poco probable que algún niño 
                        presente reacción seria, sin embargo se recomienda que permanezca los siguientes 
                        15 a 30 minutos en la sala de espera para vigilancia de posibles reacciones 
                        adversas inmediatas (según lo establece el Manual de Vacunación 2017, Procedimiento para la aplicación de vacunas. P72)
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chevron_right</i>
                    <strong>¿Qué hacer si creo que las vacunas pueden hacerle reacción a mi hijo?</strong>
                </div>
                <div class="collapsible-body">
                    <p>
                        Porque las vacunas previenen enfermedades graves en los niños, las cuales pueden dejar secuelas e incluso causar la muerte. 
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="container">
    <div class="grid-container">
        <h2>Infografías</h2>
    </div>
    <div class="grid-container">
        <div class="infografias-container">
            <div id="links">
                <a href="assets/images/test-gde.jpeg" title="" class="img-galeria">
                    <img src="assets/images/test.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    
</section>
<section class="container">
    <div class="grid-container">
        <h2>Publicaciones</h2>
    </div>
    <ul class="slider publicaciones">                 
            <li class="item-slider">
                <div class="slide-img-container">
                    <img src="assets/images/vector/proteccion.svg" alt="" class="img-slide">
                    <div class="vector-bg">
                        <img src="assets/images/fondos/publicaciones-icon-bg.svg" alt="" class="slide-bg">
                    </div>
                </div>
                <p>Evitar que los mosquitos encuentren en donde depositar sus huevecillos modificando el entorno.</p>
            </li>
            <li class="item-slider">
                <div class="slide-img-container">
                    <img src="assets/images/vector/proteccion.svg" alt="" class="img-slide">
                </div>            
                <p>Evitar que los mosquitos encuentren en donde depositar sus huevecillos modificando el entorno.</p>
            </li>
            <a href="#">
                <div class="slider-right-control">
                    <i class="material-icons medium">chevron_right</i>
                    
                </div>
            </a>
            <a href="#">
                <div class="slider-left-control">
                    <i class="material-icons medium">chevron_left</i>
                </div>
            </a>                
        </ul>
</section>

<!-- HTML Gallery Snippet -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
		<div class="slides"></div>
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
	</div>
	<script src="assets/js/gallery/blueimp-gallery.min.js"></script>
	<script>
		document.getElementById('links').onclick = function (event) {
			event = event || window.event;
			var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {index: link, event: event},
			links = this.getElementsByTagName('a');
			blueimp.Gallery(links, options);
		};
	</script>