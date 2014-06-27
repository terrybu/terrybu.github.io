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
  <title>Terry Bu - Portfolio Website | Home</title>
  <!--[if lt IE 9]><script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script><![endif]-->
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

    <div id="clickOhover">
      <p>Click or Hover. Click again to close</p>
      <img id="arrow" src="_images/arrows.jpg">
      <img src="_images/leftharsh.png" width="37" height="30">
      <img src="_images/left-diag.png" width="37" height="30">
      <img src="_images/right-diag.png" width="37" height="30">
      <img src="_images/rightharsh.png" width="37" height="30">
    </div>
      
    <div class="panel-group" id="accordion">
           <!--COLLAPSIBLE PANELS START HERE -->
      <div id="CollapsiblePanel1" class="panel panel-default">
      <div href="#collapseOne" class="panel-heading">
         <h4 class="panel-title">
               <b class="caret"></b> TECHNOLOGY
         </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
         <div class="panel-body">
          <p>As impressed as we already are with the exponential advancement of technology since the new millennium (Google, mobile revolution, cloud, IoE) I believe we have only scratched the surface. </p>
          <p>Technology will continue to be the glue that binds information and knowledge across all disciplines including education, sciences, public health, government, and private sector.</p>
          <p>There is little doubt that the world's need for engineers and programmers will keep rising rapidly within the next several decades.</p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel2" class="panel panel-default">
      <div href="#collapseTwo" class="panel-heading">
         <h4 class="panel-title">
               <b class="caret"></b> EDUCATION
         </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse in">
        <div class="panel-body">
          <p>I am self-taught in Ruby on Rails, Ruby, JavaScript, CSS, HTML and the basics of Java, Eclipse (Android SDK) and Python.</p>
          <p>I have a working knowledge of Git, Haml, Sass, Compass, PHP, SQL, jQuery and Vagrant from past projects. I am proficient in Adobe CS6(Photoshop, Dreamweaver, Premiere Pro) and Excel.</p>
          <p>I graduated with a B.S. in Business Administration with a minor in Japanese from UNC - Chapel Hill. I recently made the career switch into coding and web development in early 2014. </p>
        </div>
     </div>
   </div>
   <div id="CollapsiblePanel3" class="panel panel-default">
      <div href="#collapseThree" class="panel-heading">
         <h4 class="panel-title">
               <b class="caret"></b> EXPERIENCE
         </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in">
         <div class="panel-body">
      <p>My background is in business, marketing and sales. I gained close exposure to the tech world as an Account Executive at an IT solutions/consulting company that partners with Cisco and Microsoft. </p>
      <p>I have freelance web development experience (RoR, jQuery and Haml) and worked as an Online Community Manager for a small business. Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a> for details on my work experience.</p>
      <p>I also performed stand-up comedy in NYC. </p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel4" class="panel panel-default">
      <div href="#collapseFour" class="panel-heading">
         <h4 class="panel-title">
               <b class="caret"></b> VISION
         </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in">
         <div class="panel-body">
      <p>Free online educational resources have allowed many including myself to gain new knowledge, learn new skills and pursue new careers. I want to give back to those who made this possible. </p>
      <p>Following examples like Khan Academy, I am driven to help create better accessibility to knowledge and information for people all over the world wherever, whomever they are.</p>
      <p>I also hope to become better in coding so that I can impact Open Source projects in public health, sciences, local government, and education through channels like Github and Code for America. </p>
         </div>
      </div>
     </div>
    </div> <!-- /bodyContent -->  

  </div> <!-- /container -->  
  <?php include("_includes/viewSizeDisplay.php"); ?>


<!--BELOW is javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<script src="_javascript/collapsible.js"></script>

<!--sound effect related -->
<script type="text/javascript" src="_javascript/sound-mouseover.js"></script>
<audio>
<source src="_sound/click.mp3"></source>
<source src="_sound/click.ogg"></source>
</audio>
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>
<!-- --> 
</body>
</html>
