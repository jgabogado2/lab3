<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

body{
        background: url(images/b6.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: white;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: rgb(255, 224, 137);
  
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: rgb(173, 138, 41);
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

h2.Title{
    color: rgb(255, 219, 119);
    text-transform: lowercase;
    font-size: 50px;
    text-align: center;
    margin-left: 0x;
    font-family: 'Ubuntu', sans-serif;
    letter-spacing: 10px;
}

p.Subtext{
    color: rgb(209, 173, 72);
    text-transform: lowercase;
    font-size: 30;
    text-align: center;
    margin-left: 0x;
    font-family: 'Ubuntu', sans-serif;
}

a{
  color: rgb(78, 61, 15);
  text-decoration: none;
  letter-spacing: 3px;
  font-size: 25px;
  
  padding-top: .5ch;
}
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 class = "Title">This is a javascript slideshow</h2>
<p class = "Subtext">it changes images every 2 seconds:</p>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/sld1.jpg" style="width:100%">
  <div class="text"><a href ="Index4.php">Click here to go back</a></div>
</div>

<div class="mySlides fade">
  
  <img src="images/sld2.jpg" style="width:100%">
  <div class="text"><a href="Index4.php">Click here to go back</a></div>
</div>

<div class="mySlides fade">
 
  <img src="images/sld3.jpg" style="width:100%">
  <div class="text"><a href="Index4.php">Click here to go back</a></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>