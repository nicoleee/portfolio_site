<?php 
require 'php/header.php';
?>
<div class="section section--padded push-down">
	<div class="container">
		<h1 class="h1 align-center">Photography</h1>
		<div class="gallery">
			<!-- Javascript Injects each grid item after scanning a directory -->
		</div>
	</div>
</div>

<script src="js/ajax.js"></script>
<script>
	
	var url = "http://localhost:8888/portfolio_site/pictures/photography/";
	var gallery = document.getElementsByClassName('gallery')[0];

	Ajax.get(url, function(data){
		var photos = JSON.parse(data);
		
		for ( var i = 0, l = photos.length; i <= l -1; i++) {
			var imgWrap = document.createElement('div');
			imgWrap.setAttribute('class', 'gallery__item media-holder third left');

			var img = document.createElement('img');
			img.setAttribute('src', url + photos[i]);

			imgWrap.appendChild(img);

			gallery.appendChild(imgWrap);
		}


	});

	

</script>
<?php 
require 'php/footer.php';
 ?>