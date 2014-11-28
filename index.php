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
          <p>As impressed as we already are with the exponential advancement in technology (mobile, cloud, IoE) in recent years, I believe we've only scratched the surface. </p>
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
          <p>I am currently involved in a full-time iOS immersion internship at TurnToTech and code in Objective-C and Java. I am self-taught in Java, Android SDK, Ruby on Rails, JavaScript and CSS. I have a working knowledge of Git, jQuery, Haml, SASS and PostgreSQL from past projects. I dabble in Angular, Node, and Adobe Creative Suite.</p>
          <p>I graduated with a BSBA and a minor in Japanese from UNC - Chapel Hill in 2011. </p>
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
      <p>My bachelor's is in Business, and I worked in marketing and sales after graduation. I gained close exposure to the tech world in 2013 as a sales rep at an IT solutions company. Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a> for details.</p>
      <p>I made the decision to learn and pursue coding as a career in early-2014. I did some freelance and pro-bono work in web dev before I got into iOS. I am a big fan of both web and mobile.</p>
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
      <p>The internet has changed the way we learn, but I think we can make it even better. I want to help create better accessibility to free knowledge and information for people all over the world. I also am deeply curious about the future of tech entrepreneurship.</p>
      <p>In the short term, I want to keep growing and developing my skills at a place where I can make an impact. </p>
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