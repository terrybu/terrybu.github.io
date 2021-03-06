<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
<link href="_css/contact.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="dist/css/bootstrapValidator.css"/>
<script type="text/javascript" src="dist/js/bootstrapValidator.js"></script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANc2OOYLVVwOz0rgpkiv78vHVIHnNyA70"></script>
<script src="_javascript/googlemaps.js"></script>
<title>Terry Bu - Portfolio Website | Contact Terry</title>
</head>
<body>
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
      <?php include("_includes/welcomeNav.php"); ?>
      <?php include("_includes/kyotoImage.php"); ?>

<div id="bodyContent">
<h1>Contact Terry</h1>
  <p align='center'>Please email me at <a href="mailto:burea1124@gmail.com" target="_blank">burea1124@gmail.com</a> or contact me via the form below.</p>
<div id="large">

<div id="mapCanvas"></div>

<div id="reachMe">
<form id='contactForm' method="post" action="formmail.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="sender" class="form-control" />
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" />
  </div>
  <div class="form-group">   
    <label>Message</label><br>
    <textarea class="form-control" name="mesbody" rows="6" cols='45' placeholder="Enter a short message"></textarea>
  </div>
  <button type="submit" name="submitbutton" id="submitbutton" value="Submit" class="btn btn-primary">Submit</button>
  </form>
  <p>&nbsp;</p>
</div>
</div>

</div> <!-- /bodyContent -->  
</div> <!-- /container -->  

<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script src="_javascript/validation.js"></script>
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>

