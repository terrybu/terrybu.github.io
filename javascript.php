<!DOCTYPE html>
<html class="">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
  <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
<link href="_css/javascript.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="_css/colorbox.css">
<title>Terry Bu - Portfolio Website | JavaScript/jQuery</title>
</head>
<body>
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
    <?php include("_includes/kyotoImage.php"); ?>

<div id="bodyContent">
  <h1 style="color: #C63B3B; clear: both;">JavaScript Portfolio</h1>
  <div class="projectsDiv" id="projectsJavascript">
    <ul>
        <li>
        <a href="http://bucifer-realtime-twitter.nodejitsu.com/" target="_blank"><h3>Twitter Streaming API Project with Node, Express and Socket.io</h3>
        <img src="_images/streaming.png">
        </a>
        </li>
        <li>
        <a href="http://favcelebstwitterapi.herokuapp.com/" target="_blank"><h3>Twitter REST API Project with Mustache.js and PHP OAuth library</h3>
        <img src="_images/twitterAPI1.png">
        </a>
        </li>
        <li><a href="https://bucifer-lifeclock.herokuapp.com/" target="_blank"><h3>"Terry's Life-Clock" - Original JS/jQuery Web App</h3>
        <img src="_images/js1clock.png">
        <img src="_images/credits.png">
        </a>
        </li>
        <li>
            <a href="angular/pokemon.html" target="_blank"><h3>Angular JS Practice - Pokemon Gallery</h3>
            <img src="_images/pokemonScreenshot.png">
            <img src="_images/pikachu.gif">
            </a>
        </li>
        <li><a href="sketchpad.php" target="_blank"><h3>Odin Project jQuery Practice Sketchpad</h3>
            <img src="_images/js2color.png"></a>
        </li>
        <li>
            <div id="bubbleName">
            <canvas id="myCanvas"></canvas>
            <script src="_javascript/bubbleName.js"></script>
            </div>
        </li>    
    </ul>
    <hr>
        <div>
        <h3>Colorbox Slideshow</h3>
            <p><a class="group1" href="_images/image2.jpg" title="JFK">Grouped Photo 1</a></p>
            <p><a class="group1" href="_images/image3.jpg" title="Gandhi">Grouped Photo 2</a></p>
            <p><a class="group1" href="_images/image4.jpg" title="N.M">Grouped Photo 3</a></p>
        </div>
</div>
</div>



<!--for colorbox jQuery plugin -->
<script type="text/javascript" src="_javascript\vendor\jquery.colorbox-min.js"></script>
<script>
$(document).ready(function(e) {
$(".group1").colorbox({rel:'group1'});
});   
</script>
<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>


</body>
</html>
