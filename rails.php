<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Portfolio Website | Ruby on Rails </title>
</head>
<body>
  <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
  </div>
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
  </div>
<img src="_images/rubyonrails.png" id="headImageRails">

<div id="bodyContent">
  <h1 style="color: #C63B3B">Ruby on Rails Projects</h1>
  <div class="projectsDiv"  id="projectsRails">
   <ul>
    <li>
    <h3><a href="https://terrysnotes.herokuapp.com/" target="_blank">Personal Rails Project: Terry's Book Notes</h3>    
      <img src="_images/_booknotes.png"></a>
    </li>
    <li>
    <h3><a href="https://terrysquotes.herokuapp.com/" target="_blank">Personal Rails Project: Terry's Quotes Database</h3>
    <img src="_images/s1quote.png"></a>
    </li>

    <li>
        <h3>Helping non-profit organization (<a href="http://www.ourgoods.org">Ourgoods.org</a>) by rebuilding their Admin CMS interface through Rails migrations, model/database manipulation</h3>
        <br>
        <a href="_images/ourgoods1.png" target="_blank"><img src="_images/ourgoods1.png"></a> 
        <a href="_images/ourgoods2.png" target="_blank"><img src="_images/ourgoods2.png"></a>
      </li> 
      <li>
       <h3>Close 18 Github issue tickets using jQuery, Haml, Ruby and CSS for a Rails App. Push code and contribute through Git</h3>
       <br>
        <a href="_images/ourgoods3.png" target="_blank"><img src="_images/ourgoods3.png"></a>   
        <a href="_images/ourgoods4.png" target="_blank"><img src="_images/ourgoods4.png"></a>       
      </li>
    </ul>
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
