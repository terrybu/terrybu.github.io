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
          <p>Technology will continue to be the glue that binds information and knowledge across all disciplines. There's little doubt that the world's need for developers/engineers will keep rising within the next several decades.</p>
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
          <p>I learned basic HTML at age 12 and picked up programming again at age 25. I started out studying JavaScript/Rails and then discovered a full-time iOS bootcamp at TurnToTech in New York City. There, we studied object-oriented programming, C and Objective-C. Currently, I have a working knowledge of Java/Android, Swift, Angular and Flask from past projects, and feel comfortable with Rails, JavaScript and Git. My next goal is to be a "Triple-Threat" across three domains: iOS, Android and Web Dev.</p>
          <p>I graduated with a Bachelor's in Business Administration and a minor in Japanese from UNC - Chapel Hill in 2011. </p>
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
      <p>After working in the business side of digital marketing and IT, I went on a mission to find myself a career that I personally felt was more fulfilling and aligned with my talents. This led me to the world of computer programming where I was inspired by becoming a driver of innovation and creator of new possibilities for the future. After intense studying throughout 2014, I became a full-time programmer in 2015. Currently, I work as a Software Engineer at the Hackerati, a boutique high-end consulting start-up here in NYC.</p>
      <p>Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a> for details.</p>
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
      <p>The internet has changed the way we learn, but I think we can make it even better. I want to help create better accessibility to free knowledge and information for people all over the world. I also am deeply curious about the future of tech entrepreneurship and want to help create lasting progress. </p>
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