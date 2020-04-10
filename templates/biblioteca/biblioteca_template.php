<section class="container bg-circulos pt-95">
    <div class="grid-container">
        <h1>Biblioteca</h1>
        <p>Encuentra infografías y documentos relevantes para compartir.</p>
    </div>
</section>
<section class="container">
    <div class="grid-container">
        <h2>Infografías</h2>
    </div>
    <div class="grid-container">
        <div class="infografias-container">
            <h4>Infografías sobre vacunación</h4>
            <div id="links">
                <a href="assets/images/infografias/vacunacion/vacunas-001.jpg" title="" class="img-galeria">
                    <img src="assets/images/infografias/vacunacion-thumbnails/vacunas-001.jpg" alt="">
                </a>
                <a href="assets/images/infografias/vacunacion/vacunas-002.jpg" title="" class="img-galeria">
                    <img src="assets/images/infografias/vacunacion-thumbnails/vacunas-002.jpg" alt="">
                </a>
                <a href="assets/images/infografias/vacunacion/vacunas-003.jpg" title="" class="img-galeria">
                    <img src="assets/images/infografias/vacunacion-thumbnails/vacunas-003.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    
</section>
<section class="container">
    <div class="grid-container">
        <h2>Publicaciones</h2>
    </div>
    
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