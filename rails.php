<!DOCTYPE html>
<html>
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
  <title>Terry Bu - Portfolio Website | Ruby on Rails </title>
  <!--[if lt IE 9]><script src="/js/vendor/html5-3.6-respond-1.1.0.min.js"></script><![endif]-->
</head>
<body>
  <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
  </div>
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
</div><!--closes wrapper from welcomeNav -->
  <div id="headImage">
    <img src="_images/rubyonrails.png">
  </div>

<div id="bodyContent">

  <h1 style="color: #C63B3B"> Ruby on Rails Projects</h1>
  <div id="projects" class="well">
    <ul>
    <li>        
<a href="https://terrysquotes.herokuapp.com/" target="_blank"><strong>Personal Rails Project: Terry's Quotes Database</strong></a>
    <img src="_images/s1quote.png">
    </li>
      <hr>
    <li>
    <a href="https://bucifer-micropost.herokuapp.com/" target="_blank"><strong>Michael Hartl's Rails Tutorial: Micropost App</strong></a>    <img src="_images/s1micro.png" class='thinimg'>
    </li>
      <hr>
    <li>
    <a href="https://bucifer-blogger.herokuapp.com/" target="_blank"><strong>JumpstartLab Blogger 2 Tutorial: Blogger App</strong></a>    <img src="_images/s1blogger.png">

    </li>
  </div>

</div> <!-- /bodyContent -->  

</div> <!-- /container -->  

<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>
