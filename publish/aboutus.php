<?php include_once('header_ui.php'); ?>
<div class="block-wrap light-bg">
	<div class="container">
		<img src="<?php echo($front_img_url) ?>/slider_8-3.jpg" alt="">
	</div>
</div>
<div class="block-wrap dark-bg">
	<div class="container">
		<h2 class="bar-title">Our Achievements</h2>
		<div class="row p-0">
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem">20</p>
				<h3 class="title text-center"><?php echo $langCode['Patents']; ?></h3>
			</div>
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem">40</p>
				<h3 class="title text-center"><?php echo $langCode['ExportCountries']; ?></h3>
			</div>
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem">60</p>
				<h3 class="title text-center"><?php echo $langCode['OpenedStores']; ?></h3>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<img src="<?php echo($front_img_url) ?>/boss.jpg" alt="boss">
			</div>
			<div class="col-lg-6">
				<h2 class="title"><?php echo $langCode['GreetingFromCEO']; ?></h2>
				<p class="content"><?php echo $langCode['GreetingFromCEOCon']; ?></p>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<h2 class="title"><?php echo $langCode['CompanyHistory']; ?></h2>
		<div class="row-5 align-item-center py-4">
			<div class="col-lg-6 text-right">
				<h3>08,1997</h3>
				<?php echo $langCode['CompanyHistory1997_08']; ?>
				<h3>09.1999</h3>
				<?php echo $langCode['CompanyHistory1999_09']; ?>
				<h3>04.2000</h3>
				<?php echo $langCode['CompanyHistory2000_04']; ?>
				<h3>02.2004</h3>
				<?php echo $langCode['CompanyHistory2004_02']; ?>
				<h3>11.2006</h3>
				<?php echo $langCode['CompanyHistory2006_11']; ?>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url ?>/barskorea_history1.png" alt="barskorea since 1997" class="img-fluid" />
			</div>
		</div>
		<div class="row-5 align-item-center py-4">
			<div class="col-lg-6 text-right">
				<iframe id="history_movie" width="100%" src="https://www.youtube.com/embed/aolUJoAJ0ks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-6">
				<h3>05,2007</h3>
				<?php echo $langCode['CompanyHistory2007_05']; ?>
				<h3>04.2009</h3>
				<?php echo $langCode['CompanyHistory2009_04']; ?>
				<h3>04.2010</h3>
				<?php echo $langCode['CompanyHistory2010_04']; ?>
				<h3>02.2011</h3>
				<?php echo $langCode['CompanyHistory2011_02']; ?>
				<h3>11.2011</h3>
				<?php echo $langCode['CompanyHistory2011_11']; ?>
			</div>
		</div>
		<div class="row-5 align-item-center py-4">
			<div class="col-lg-6 text-right">
				<h3>03,2013</h3>
				<?php echo $langCode['CompanyHistory2013_03']; ?>
				<h3>08.2014</h3>
				<?php echo $langCode['CompanyHistory2014_08']; ?>
				<h3>10.2014</h3>
				<?php echo $langCode['CompanyHistory2014_10']; ?>
				<h3>06.2015</h3>
				<?php echo $langCode['CompanyHistory2015_06']; ?>
				<h3>08.2016</h3>
				<?php echo $langCode['CompanyHistory2016_08']; ?>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url ?>/barskorea_history3.jpg" alt="barskorea since 1997" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<script>
(function($) {
	function historyMovie() {
		var movieW = jQuery('#history_movie').width();
		var movieH = movieW / 16 * 9;
		jQuery('#history_movie').css({
			height: movieH + 'px';
		});

	}
	jQuery(document).ready(function() {
		historyMovie();
	});
	jQuery(window).resize(function() {
		historyMovie();
	});
})(jQuery);
</script>
<?php include_once('footer_ui.php'); ?>