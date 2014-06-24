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
<title>Terry Bu - Portfolio Website | Home</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<script src="respond.min.js"></script>
<script type="text/javascript" src="_javascript/sound-mouseover.js"></script>

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


<div id="clickohover">
  <p>Click or Hover. Click again to close</p>
</div>

<img src="_images/arrows.jpg" id="arrow">
<div id="leftharsh">
<img src="_images/leftharsh.png" width="37" height="30">
</div>
<div id="leftarrow"><img src="_images/left-diag.png" width="37" height="30"></div>
<div id="rightarrow">
<img src="_images/right-diag.png" width="37" height="30">
</div>
<div id="rightharsh">
<img src="_images/rightharsh.png" width="37" height="30">
</div>

<div id="mainContent">
  
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0" onclick="playclip();"onmouseover="CollapsiblePanel1.open(); return false; " >TECHNOLOGY</div>
  <!--onmouseout="CollapsiblePanel1.close(); return false;"-->
  <div class="CollapsiblePanelContent">
    <p>As impressed as we already are with the fast advancement of technology, with inventions like Google, Facebook, Twitter and smartphones changing  world culture, I believe we have only scratched the surface. </p>
    <p>Technology will continue to be the glue that binds information and knowledge across all areas including education, science, public health, government, and private sector.</p>
    <p>There is little doubt that the world's need for  engineers, developers and programmers will continue to rise exponentially within the next several decades.</p>
    <br>
  </div>
</div>

<div id="CollapsiblePanel2" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0" onclick="playclip();"onmouseover="CollapsiblePanel2.open(); return false;" >EDUCATION</div>
  <div class="CollapsiblePanelContent"><p>I am self-taught in front-end web design (HTML,CSS, Dreamweaver) and in the basics of Java, Eclipse (Android App Development), Ruby and Python.</p>
  <p>I graduated with a B.S. in Business Administration with a minor in Japanese from UNC - Chapel Hill. </p>
  I am still in the process of teaching myself JavaScript, Ruby on Rails, PHP, MySQL and other skills necessary to build a powerful, functioning web application. 
      <br>
      <br>
  </div>
</div>
<div id="CollapsiblePanel3" class="CollapsiblePanel" >
  <div class="CollapsiblePanelTab" tabindex="0" onclick="playclip();"onmouseover="CollapsiblePanel3.open(); return false;">Work Experience</div>
  <div class="CollapsiblePanelContent">
  <p>I come from a background in marketing and sales. I've always had an interest and passion for studying technology, and recently made the commitment to switch fully into the world of computer programming and web development in early 2014. </p>
        <p>As for my technical work experience, I worked as a B2B Account Executive in the IT solutions industry, working closely with Cisco networking. I also have experience working as an Online Community Manager for a small business.</p>
<p>Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">http://www.linkedin.com/in/terrybu</a> for more detailed information on my work experience.</p>
    <br>
  </div>
</div>
<div id="CollapsiblePanel4" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0" onclick="playclip();"onmouseover="CollapsiblePanel4.open(); return false;">Vision</div>
  <div class="CollapsiblePanelContent">
<p>Emerging resources available for self-education have allowed many people including myself to pursue new careers in technology. To give back to the people who made this possible, I want to help create free, high-quality self-education resources for people all over the world, following examples like Khan Academy. To ensure steady progress in future of society, I believe more knowledge should be free and accessible.</p>
<p>I also hope to gain enough expertise in coding so that I can impact a variety of different areas like public health, science, local government, education and nonprofit through channels like Github and Code for America. </p>
<br>
</div></div>
<?php include("_includes/viewSizeDisplay.php"); ?>

</div>




<!--BELOW is javascripts stuff-->
<audio>
<source src="_sound/click.mp3"></source>
<source src="_sound/click.ogg"></source>
</audio>
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</div>
</body>
</html>