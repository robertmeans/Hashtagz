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
		<p><?= ewd_copyright(2018); ?> Evergreen Brand Builders | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>	

</footer>