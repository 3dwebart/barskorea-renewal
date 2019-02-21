<div id="footer" class="features-wrap block-wrap dark-bg pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 pl-5 pr-5">
				<h2 class="title color-orange"><?php echo($langCode['footerAddrTit']); ?></h2>
				<p class="content">
					<?php echo($langCode['BarskoreaHeadquarter']) ?><br />
					<?php echo($langCode['footerAddrCon']); ?><br />
					<?php echo($langCode['Email']); ?>. <a href="mailto:barskorea@hanmail.net">barskorea@hanmail.net</a><br />
					<?php echo($langCode['Tel']); ?>. <a href="tel:+82-32-581-3466">+82-32-581-3466</a><br />
					<?php echo($langCode['Fax']); ?>. +82-32-581-8937<br />
					<?php echo($langCode['Web']); ?>. <a href="http://www.barskorea.com/">http://www.barskorea.com/</a>
				</p>
			</div>
			<div class="col-lg-4 pl-5 pr-5">
				<h2 class="title color-orange"><?php echo($langCode['footerContactUs']); ?></h2>
				<p class="content">
					<?php echo($langCode['footerContactUsCon']); ?>
				</p>
			</div>
			<div class="col-lg-4 pl-5 pr-5">
				<a href="https://www.instagram.com/barskorea.official/" class="btn btn-info" target="_blank">
					<i class="fa fa-instagram"></i>
					<?php echo($langCode['FollowOnInstagram']); ?>
				</a>
			</div>
		</div>
			
	</div>
</div>
<div class="copyright">
	<div class="container">
		Copyright&copy;1997 BARSKOREA All Rights reserved.
	</div>
</div>
<a href="#" class="quick-top">
	<i class="fa fa-caret-up" aria-hidden="true"></i>
</a>
<script>
(function($) {
	jQuery(document).ready(function() {
		var pageNo = '<?php echo $pageNo; ?>';
		jQuery('.navbar-nav li').eq(pageNo).siblings().removeClass('active');
		jQuery('.navbar-nav li').eq(pageNo).addClass('active');
		console.log('pageNo = ' + pageNo);
		console.log('active html = ' + jQuery('.navbar-nav li').eq(pageNo).html());
	});
})(jQuery);
</script>
</body>
</html>