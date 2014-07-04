<!DOCTYPE html>
<?php 
include '_includes/twitterSearchAPI.php';
$taeyeon = returnTweet('T_yeon9', '5');
$sunny = returnTweet('Sunnyday515', '5');
$seohyun = returnTweet('sjhsjh0628', '3');
$yuri = returnTweet('Pearl_YuRi_', '3');
$sooyoung = returnTweet('Soo_3906', '3');
$tiffany = returnTweet('msTiffanyHwang', '3');
$jessica = returnTweet('sicasoshi','3');
$utadahikaru = returnTweet('utadahikaru', '5');
$matsu = returnTweet('matsu_bouzu', '5');
$kyuhyun = returnTweet('GaemGyu', '5');
?>
<html>
<head>
<!-- mustache js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.8.1/mustache.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="_css/twitterAPI.css">
</head>
<body>
<script type="text/javascript">	
var taeyeonJO = <?php echo $taeyeon; ?>;
var sunnyJO = <?php echo $sunny; ?>;
var seohyunJO = <?php echo $seohyun ?>;
var yuriJO = <?php echo $yuri ?>;
var sooyoungJO = <?php echo $sooyoung ?>;
var tiffanyJO = <?php echo $tiffany ?>;
var jessicaJO = <?php echo $jessica ?>;
var utadaJO = <?php echo $utadahikaru ?>;
var matsuJO = <?php echo $matsu ?>;
var kyuhyunJO = <?php echo $kyuhyun ?>;
</script>

<script id="SNSDtpl" type="text/template">
	{{#.}}
	<div id="highlight">
	<img src="{{user.profile_image_url}}" />
	<h3>{{user.name}} <br>@{{user.screen_name}} followers: {{user.followers_count}}</h3>
	</div>
	<a href="https://twitter.com/{{user.screen_name}}/status/{{id_str}}" target="_blank">{{text}}</a>
	<img src="{{user.profile_background_image_url}}" width="70px" height="80px" />
	<span>Timestamp: {{created_at}}, Fav Count: {{favorite_count}}, Retweet Count: {{retweet_count}} </span>
	<hr>
	{{/.}}
</script>

<img src="http://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/200px-Twitter_bird_logo_2012.svg.png">
<h1 style="display: inline-block;">Fav Celebs Recent Tweets(Using Twitter API)</h1>
<div id="tweetArea">
</div>


<script type="text/javascript">
	var template = $('#SNSDtpl').html();
	function repeatTweetArea(JO, variableName) {
		variableName = Mustache.to_html(template, JO);
		$('#tweetArea').append(variableName);
	}
	var celebsArray = [matsuJO, utadaJO, taeyeonJO, sunnyJO, kyuhyunJO, seohyunJO, yuriJO, sooyoungJO, tiffanyJO, jessicaJO];
	var html1, html2, html3, html4, html5, html6, html7, html8, html9;
	var varArray = [html1, html2, html3, html4, html5, html6, html7, html8, html9];
	for (var i = 0; i < celebsArray.length; i++) {
		repeatTweetArea(celebsArray[i], varArray[i]);
	};

</script>

</body>
</html>