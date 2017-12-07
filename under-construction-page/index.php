<!doctype html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
                
  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483

  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Hashtagz - Product Licensing &amp; Branding</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Courgette|Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcS8gagJkuoY6gB3utE1iyZnWk4JG5Suw&callback=initMap"></script>
	<script src="js/google-map.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<?php // include_once("_includes/analyticstracking.php") ?>

<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<section id="intro">
	<div class="uc">
		<img src="_images/under-construction.png">
		<div class="uc-dark">
			<h2>Hashtagz</h2>
			<p>&nbsp;</p>
			<h3>Branding &amp; Liscensing</h3>
			<p>&nbsp;</p>
		</div>
	</div>
</section><!-- #intro -->

<footer class="cf">

	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>	
	<div class="copyright cf">
		<p><?= ewd_copyright(2017); ?> Hashtagz<!-- | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a>--></p>
	</div>	

</footer>


<script src="js/scripts.js?<?= time(); ?>"></script>
<script src="js/flexslider.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>