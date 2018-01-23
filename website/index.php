<!doctype html>
<html lang="en">
<?php require('_includes/head.php'); ?>
<body>
<?php // include_once("_includes/analyticstracking.php") ?>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php require('_includes/navigation.php'); ?>
<?php require('_includes/banner.php'); ?>
<?php require('_includes/about.php'); ?>
<?php require('_includes/brands.php'); ?>
<?php require('_includes/news.php'); ?>
<?php require('_includes/contact.php'); ?>
<?php require('_includes/footer.php'); ?>

<script src="js/aos.js"></script>
<script>
	AOS.init({
	  
	});
</script>
<script src="js/scripts.js?<?= time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>