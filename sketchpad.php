<!DOCTYPE html>
<html class="">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--LOAD jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="_javascript/vendor/jquery-1.11.1.min.js"><\/script>')</script>
  <script src="_javascript/vendor/bootstrap.min.js"></script>
  <!--LOAD YOUR STYLESHEETS -->
<link href="_css/application.css" rel="stylesheet" type="text/css">
<link href="_css/sketchpad.css" rel="stylesheet" type="text/css">
<title>Terry Bu - Portfolio Website | JavaScript/jQuery</title>
<script type="text/javascript" src="_javascript/sketchpad.js"></script>
  <!--[if lt IE 9]><script src="/js/vendor/html5-3.6-respond-1.1.0.min.js"></script><![endif]-->
</head>
<body>
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
<div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
    <?php include("_includes/kyotoImage.php"); ?>

<div class="spcontainer">
			<div id="spheader">
				<h1>Terry Odin Project Sketchpad jQuery Practice</h1>
				<p>Move mouse over squares to sketch, clear to start over, try different buttons for different effects by setting the # of columns!</p>
			</div>
			<div class="spnavbar">
				<button class="spclear">Clear</button>
				<button class="spnormal">Default</button>
				<button class="sprandom">Rainbow Colors</button>
				<button class="sptrail">Trail</button>
			</div>
			<div class="spwrap"></div>
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
