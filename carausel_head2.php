<br><br><br><br><br><br>
<style>
* {box-sizing: border-box;}

.mySlidesa1 {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 90%;
  position: relative;
  margin: auto;
}

/* Caption text */
.texta {
  color: #f2f2f2;
  font-size: 1px;
  padding: 10px 25px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
}

/* Number text (1/3 etc) */
.numbertexta {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dotass/bullets/indicators */
.dotas {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.activea {
  background-color: #717171;
}

/* Fading animation */
.fades {
  -webkit-animation-name: fades;
  -webkit-animation-duration: 1.5s;
  animation-name: fades;
  animation-duration: 1.5s;
}

@-webkit-keyframes fades {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fades {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .texta {font-size: 44px}
}
</style>


<div class="slideshow-container">



<div class="mySlidesa1 fades">

  <img src="lib/img/22.jpg" style="width:100%">
  
  
</div>





<div class="mySlidesa1 fades">
 
  <img src="lib/img/23.jpg" style="width:100%">
  
 
</div>

</div>
<br>
<div style="text-align:center; visibility: hidden;">
  <span class="dotas"></span> 
  <span class="dotas"></span> 
  <span class="dotas"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlidesa1");
  var dotass = document.getElementsByClassName("dotas");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dotass.length; i++) {
    dotass[i].className = dotass[i].className.replace(" activea", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dotass[slideIndex-1].className += " activea";
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>

