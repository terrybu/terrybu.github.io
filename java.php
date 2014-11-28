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
<title>Terry Bu - Portfolio Website | Java</title>
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
</head>
<body>

<div class="gridContainer clearfix">
<div id="browser">
<p>*Best viewed in 1920x1080 resolution with Chrome</p>
</div>
<?php include("_includes/connect.php"); ?>

<?php include("_includes/helloHeader.php"); ?>

<div id="java">
<img src="_images/java.png">
</div>

<?php include("_includes/nav.php"); ?>

<?php include("_includes/viewSizeDisplay.php"); ?>

<div id="androidapps">
<p> Java Projects</p>
</div>
<div id="javaProjects">
<pre>
<a href="_java/EnglishLifeClock.exe"><strong>Life Clock (.exe)</strong></a>
Click to Download

<a href="_java/PicDemoAppNaruto.jar"><strong>Naruto Image Gallery Demo App (.jar)</strong></a>
Click to Download
</pre>
</div>





</div>

  

<!--BELOW is javascripts stuff-->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<audio id="1up" src="_sound/swim.wav"></audio>

</div>
</body>
</html>
