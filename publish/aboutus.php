<?php
	include_once('header_ui.php');
	$pageNo = 1;
?>
<div class="block-wrap light-bg pb-3">
	<!-- <img src="<?php echo($front_img_url) ?>/200dk.jpg" alt="top image" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block" style="width: 100%;" /> -->
	<div class="container">
		<img src="<?php echo($front_img_url) ?>/slider_8-3.jpg" alt="snow ice machine, bingsu machine / The most reliable and very first flavored snow ice machine" class="img-fluid" />
		<!--<img src="<?php echo($front_img_url) ?>/200dk-m.jpg" alt="top image" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-none" />-->
	</div>
</div>
<div class="block-wrap dark-bg" id="OurAchievements">
	<div class="container">
		<h2 class="bar-title"><?php echo $langCode['OurAchievements']; ?></h2>
		<div class="row p-0">
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem count">20</p>
				<h3 class="title text-center"><?php echo $langCode['Patents']; ?></h3>
			</div>
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem count">45</p>
				<h3 class="title text-center"><?php echo $langCode['ExportCountries']; ?></h3>
			</div>
			<div class="col-lg-4 p-3">
				<p class="content text-center font-7rem count">90</p>
				<h3 class="title text-center"><?php echo $langCode['OpenedStores']; ?></h3>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<img src="<?php echo($front_img_url) ?>/boss.jpg" alt="bingsu machine company ceo" class="img-fluid">
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
		<h2 class="title mp-15"><?php echo $langCode['CompanyHistory']; ?></h2>
		<div class="row align-item-center py-4">
			<div class="col-lg-6 text-right  m-text-left order-2 order-lg-1">
				<h3 class="month-year mb-0">08,1997</h3>
				<?php echo $langCode['CompanyHistory1997_08']; ?>
				<h3 class="month-year mb-0 mt-4">09.1999</h3>
				<?php echo $langCode['CompanyHistory1999_09']; ?>
				<h3 class="month-year mb-0 mt-4">04.2000</h3>
				<?php echo $langCode['CompanyHistory2000_04']; ?>
				<h3 class="month-year mb-0 mt-4">02.2004</h3>
				<?php echo $langCode['CompanyHistory2004_02']; ?>
				<h3 class="month-year mb-0 mt-4">11.2006</h3>
				<?php echo $langCode['CompanyHistory2006_11']; ?>
			</div>
			<div class="col-lg-6 order-1 order-lg-2">
				<img src="<?php echo $front_img_url ?>/barskorea_history1.png" alt="barskorea since 1997" class="img-fluid" />
			</div>
		</div>
		<div class="row align-item-center py-4">
			<div class="col-lg-6 text-right">
				<iframe id="history_movie" width="100%" src="https://www.youtube.com/embed/aolUJoAJ0ks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-6">
				<h3 class="month-year mb-0 mt-5 mt-lg-0">05,2007</h3>
				<?php echo $langCode['CompanyHistory2007_05']; ?>
				<h3 class="month-year mb-0 mt-4">04.2009</h3>
				<?php echo $langCode['CompanyHistory2009_04']; ?>
				<h3 class="month-year mb-0 mt-4">04.2010</h3>
				<?php echo $langCode['CompanyHistory2010_04']; ?>
				<h3 class="month-year mb-0 mt-4">02.2011</h3>
				<?php echo $langCode['CompanyHistory2011_02']; ?>
				<h3 class="month-year mb-0 mt-4">11.2011</h3>
				<?php echo $langCode['CompanyHistory2011_11']; ?>
			</div>
		</div>
		<div class="row align-item-center py-4">
			<div class="col-lg-6 text-right m-text-left order-2 order-lg-1">
				<h3 class="month-year mb-0 mt-5 mt-lg-0">03,2013</h3>
				<?php echo $langCode['CompanyHistory2013_03']; ?>
				<h3 class="month-year mb-0 mt-4">08.2014</h3>
				<?php echo $langCode['CompanyHistory2014_08']; ?>
				<h3 class="month-year mb-0 mt-4">10.2014</h3>
				<?php echo $langCode['CompanyHistory2014_10']; ?>
				<h3 class="month-year mb-0 mt-4">06.2015</h3>
				<?php echo $langCode['CompanyHistory2015_06']; ?>
				<h3 class="month-yea mb-0 mt-4">08.2016</h3>
				<?php echo $langCode['CompanyHistory2016_08']; ?>
				<?php if($currentLang == 'eng') { ?>
				<h3 class="month-year mb-0 mt-4">07.2017</h3>
				Achieved NSF certification of all models
				<h3 class="month-year mb-0 mt-4">08.2017</h3>
				<?php echo $langCode['CompanyHistory2017_08']; ?>
				<h3 class="month-year mb-0 mt-4">12.2017</h3>
				 Introduced SUF-400NW-2MK
				<h3 class="month-year mb-0 mt-4">07.2018</h3>
				<?php echo $langCode['CompanyHistory2018_07']; ?>
				<h3 class="month-year mb-0 mt-4">01.2019</h3>
				Introduced SUF-200NW-DK<br />
				Obtain certification of CE<br />
				Obtain certification of TUV
				<h3 class="month-year mb-0 mt-4">03.2019</h3>
				<?php echo $langCode['CompanyHistory2019_03']; ?>
				<?php } ?>
			</div>
			<div class="col-lg-6 order-1 oeder-lg-2">
				<img src="<?php echo $front_img_url ?>/barskorea_history3.jpg" alt="BARSKOREA bingsu machine, snow ice machine" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<script>
function historyMovie() {
	var movieW = jQuery('#history_movie').width();
	var movieH = movieW / 16 * 9;
	jQuery('#history_movie').css({
		height: movieH + 'px'
	});
}
(function($) {
	jQuery(document).ready(function() {
		historyMovie();
	});
	jQuery(window).resize(function() {
		historyMovie();
	});
	/* BIGIN :: Number count animation */
	var scrollPos = jQuery(document).scrollTop();
	var counterPos = jQuery('#OurAchievements').offset().top;
	function counter(scPos) {
		//if(scPos > counterPos) {
			jQuery('.count').each(function () {
			    jQuery(this).prop('Counter',0).animate({
			        Counter: jQuery(this).text()
			    }, {
			        duration: 5000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now));
			        }
			    });
			});
		//}
	}
	counter(scrollPos);
	/*
	jQuery(window).scroll(function() {
		scrollPos = jQuery(document).scrollTop();
		counter(scrollPos);
		console.log('Moving scroll position :: ' + scrollPos + '\ncpunter position' + counterPos);
	});
	*/
	/* END :: Number count animation */
})(jQuery);
</script>
<?php include_once('footer_ui.php'); ?>