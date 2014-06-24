

<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Terry Bu - Portfolio Website| Contact Terry</title>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<!-- BeginOAWidget_Shared_2187524 -->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<!-- EndOAWidget_Shared_2187524 -->
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2187524" binding="#mapCanvas" />
</oa:widgets>
-->
</script>

</head>
<body>

<div class="gridContainer clearfix">
<div id="browser">
<p>*Best viewed in 1920x1080 resolution with Chrome</p>
</div>
<?php include("_includes/connect.php"); ?>

<?php include("_includes/helloHeader.php"); ?>

<?php include("_includes/kyoto.php"); ?>

<?php include("_includes/nav.php"); ?>

<?php include("_includes/viewSizeDisplay.php"); ?>
</div>
<div id="contactTerry">Contact Terry</div>
<div id="mapCanvas" style="width:381px; height:330px; min-width:300px; min-height:300px"></div>
<script type="text/javascript">
// BeginOAWidget_Instance_2187524: #mapCanvas

	  // initialize the google Maps 	
	
     function initializeGoogleMap() {
		// set latitude and longitude to center the map around
		var latlng = new google.maps.LatLng(40.78151, 
											-73.91499);
		
		// set up the default options
		var myOptions = {
		  zoom: 12,
		  center: latlng,
		  navigationControl: true,
		  navigationControlOptions: 
		  	{style: google.maps.NavigationControlStyle.DEFAULT,
			 position: google.maps.ControlPosition.TOP_LEFT },
		  mapTypeControl: true,
		  mapTypeControlOptions: 
		  	{style: google.maps.MapTypeControlStyle.DEFAULT,
			 position: google.maps.ControlPosition.TOP_RIGHT },

		  scaleControl: true,
		   scaleControlOptions: {
        		position: google.maps.ControlPosition.BOTTOM_LEFT
    	  }, 
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		  draggable: true,
		  disableDoubleClickZoom: false,
		  keyboardShortcuts: true
		};
		var map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);
		if (false) {
			var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(map);
		}
		if (false) {
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(map);
		}
		if (true) {
			addMarker(map,40.78151,-73.91499,"Terry's here");
		}
	  }

	  window.onload = initializeGoogleMap();

	 // Add a marker to the map at specified latitude and longitude with tooltip
	 function addMarker(map,lat,long,titleText) {
	  	var markerLatlng = new google.maps.LatLng(lat,long);
	 	var marker = new google.maps.Marker({
      		position: markerLatlng, 
      		map: map, 
      		title:"Terry's here",
			icon: ""});   
	 }
// EndOAWidget_Instance_2187524
</script>
<div id="reachMe">
  <p>To reach me, you can either email me at <a href="mailto:burea1124@gmail.com" target="_blank">burea1124@gmail.com</a> or contact me via the form below.</p>

  <form name="form1" method="post" action="formmail.php">
  <p><span id="nameTextField">
    <label for="name"></label>
      <input type="text" name="name" id="name">
      <span class="textfieldRequiredMsg">A value is required.</span>
      </span>  </p>
      
    <p><span id="emailTextField">
      <label for="email"></label>
    <input type="text" name="email" id="email">
    <span class="textfieldRequiredMsg">A value is required.</span>
    <span class="textfieldInvalidFormatMsg">Invalid format.</span>
    </span></p>
    
    <p><span id="messageTextArea">
    <label for="message"></label>
    <textarea name="message" id="message" cols="45" rows="5"></textarea>
    <span id="countmessageTextArea">&nbsp;</span>
    <span class="textareaRequiredMsg">A value is required.</span>
    <span class="textareaMinCharsMsg">Minimum number of characters not met.</span>
    <span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span>
    </span></p>
  <input type="submit" name="submitbutton" id="submitbutton" value="Submit">
  </form>
  <p>&nbsp;</p>
</div>


 
<!--BELOW is javascripts stuff-->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("nameTextField", "none", {hint:"Your Name", validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("emailTextField", "email", {hint:"Your Email", validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("messageTextArea", {minChars:1, maxChars:500, counterType:"chars_remaining", counterId:"countmessageTextArea", validateOn:["blur"], hint:"Your Message"});
</script>
<audio id="1up" src="_sound/swim.wav"></audio>

</div>
</body>
</html>
