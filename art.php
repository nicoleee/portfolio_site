<?php
require 'php/header.php';
?>
<div class="section section--padded push-down">
  <div class="container">
    <h1 class="h1 align-center">Art</h1>
    <div class="gallery">
      <img class="loading-icon" src="media/oval.svg" alt="loading svg"/>
      <!-- Javascript Injects each grid item after scanning a directory -->
    </div>
  </div>
</div>

<script src="js/ajax.js"></script>
<script src="js/lightbox.min.js"></script>
<script>

var url = "http://localhost:8888/portfolio_site/pictures/artwork/";
var gallery = document.getElementsByClassName('gallery')[0];
var loading = document.getElementsByClassName('loading-icon')[0];

Ajax.get(url, function(data){
  var photos = JSON.parse(data);
  var imgsLoaded = 0;

  for ( var i = 0, l = photos.length; i <= l -1; i++) {
    var imgWrap = document.createElement('div');
    imgWrap.setAttribute('class', 'gallery__item media-holder third left');

    var img = document.createElement('img');
    img.setAttribute('src', url + photos[i]);
    img.setAttribute('data-jslghtbx', '');
    img.addEventListener('load', function(){
      imgsLoaded++;
      if (imgsLoaded == l) {
        loading.setAttribute('class','loading-icon hidden');
      }
    });

    imgWrap.appendChild(img);

    gallery.appendChild(imgWrap);
  }

  var lightbox = new Lightbox();
  lightbox.load();
});
</script>
<?php
require 'php/footer.php';
?>
