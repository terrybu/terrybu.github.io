<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Portfolio Website | Home</title>
</head>
<body>
  <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
  </div>
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
      <?php include("_includes/welcomeNav.php"); ?>
      <?php include("_includes/kyotoImage.php"); ?>

  <div id="bodyContent">
      
    <div class="panel-group" id="accordion">
           <!--COLLAPSIBLE PANELS START HERE -->
      <div id="CollapsiblePanel1" class="panel panel-default">
      <div href="#collapseOne" class="panel-heading" id="p1">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-flash"></span> TECHNOLOGY
         </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
         <div class="panel-body" id="body1">
          <p>As impressed as we already are with the exponential innotivation in technology (Google, mobile, cloud, IoE) in recent years, I believe we've only scratched the tip of the iceberg. </p>
          <p>Technology will continue to be the glue that binds information and knowledge across all disciplines. There's little doubt that the world's need for developers/engineers/programmers will keep rising within the next several decades.</p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel2" class="panel panel-default">
      <div href="#collapseTwo" class="panel-heading" id="p2">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-book"></span> EDUCATION
         </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <p>I am self-taught in Ruby on Rails, Ruby, JavaScript, CSS, HTML. I have a working knowledge of Git, Haml, Sass, PHP, SQL, jQuery, AJAX and Vagrant from past projects. I am proficient in Adobe CS6(Photoshop, Dreamweaver, Premiere Pro) and Excel. I do have an understanding of Java, Eclipse (Android SDK) and Python at a basic level.</p>
          <p>I graduated with a BSBA with a minor in Japanese from UNC - Chapel Hill in 2011. </p>
        </div>
     </div>
   </div>
   <div id="CollapsiblePanel3" class="panel panel-default">
      <div href="#collapseThree" class="panel-heading" id="p3">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-tasks"></span> EXPERIENCE
         </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
         <div class="panel-body">
      <p>My original background is in business, marketing and sales. I  gained close exposure to the tech world in 2013 as a sales rep at an IT solutions company. Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a> for details.</p>
      <p>The decision to pursue coding professionally is recent (early 2014) though my love for CS dates back to my teenage years. I am committed to the decision and strongly driven to be a part of next generation's technology innovators.</p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel4" class="panel panel-default">
      <div href="#collapseFour" class="panel-heading" id="p4">
         <h4 class="panel-title">
               <span class='glyphicon glyphicon-eye-open'></span> VISION
         </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
         <div class="panel-body">
      <p>Free online education have allowed people like myself to gain new knowledge, learn new skills and pursue new careers. I eventually want to give back to this cause through my own efforts. I want to help create better accessibility to free knowledge and information for people all over the world. </p>
      <p>In the near future, I also hope to impact open-source projects in a variety of different sectors like sciences, non-profit and education.</p>
         </div>
      </div>
     </div>
    </div> <!-- /bodyContent -->  

  </div> <!-- /container -->  
  <?php include("_includes/viewSizeDisplay.php"); ?>


<!--BELOW is javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<script src="_javascript/collapsible.js"></script>

<!--sound effects -->
<script type="text/javascript" src="_javascript/sound-mouseover.js"></script>
<!--sound effects only for index -->
<audio><source src="_sound/click.mp3"></source></audio>
<audio><source src="_sound/rollover.mp3"></source></audio>

<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>