<!DOCTYPE html>
<html class="">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
  <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
<link href="_css/javascript.css" rel="stylesheet" type="text/css">
<title>Terry Bu - Portfolio Website | JavaScript/jQuery</title>
</head>
<body>
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
    <?php include("_includes/kyotoImage.php"); ?>

<div id="mainContent">
<div id="jsprojects" class="well">
    <ul>
    <li><a href="https://bucifer-lifeclock.herokuapp.com/" target="_blank">"Your Life-Clock" - JavaScript-based Web App</a></p>
          <img src="_images/js1clock.png">
    </li>
    <li><p><a href="sketchpad.php" target="_blank">Odin Project jQuery Practice Sketchpad</a></p>
        <img src="_images/js2color.png">
    </li>
    </ul>
</div>
<br>

    <div id="wrapSlider">
    <header>
        <p>Thank you to <a href="http://helpingdevelop.com" target="_blank">Helping Develop</a>! jQuery Image Slider</p>
    </header>
        <div id="loopStatus"></div>
        <div id="slider">
            <img id="1" src="_images/image1.jpg">
            <img id="2" src="_images/image2.jpg">
            <img id="3" src="_images/image3.jpg">
            <img id="4" src="_images/image4.jpg">
        </div>
        <a class="sliderLinks" id="left" href="#" onclick="prev(); return false;">Previous</a>
        <a class="sliderLinks" id="right" href="#" onclick="next(); return false;">Next</a>
    </div>
    <script src="_javascript/slider.js">
    </script>
    <div id="js1">
        <p id="codeAcademy">Thank you, Code Academy!<br>
        Hover over my name!</p>
        <canvas id="myCanvas"></canvas>
        <script src="_javascript/bubbleName.js"></script>
    </div>
<p id="gaptext">Earth's orbit around the sun</p>
    <div id="js2">
        <img id="sun" src="http://goo.gl/dEEssP">
                <!-- Insert the 'earth' on the next line -->
                <div id="earth-orbit">
                <img id="earth" src=_images/earth.png>
                </div><!--http://goo.gl/o3YWu9-->      
    </div>
  
  
</div>
</div>

<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>


</body>
</html>
