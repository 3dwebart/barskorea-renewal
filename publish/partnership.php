<?php
	include_once('header_ui.php');
	$pageNo = 4;
?>
<div id="headerImage" class="partnership-header">
	<div class="partnership-wrap">
		<div class="row m-0">
			<div class="col-lg-6 px-5 partnership-header-wrap d-flex flex-direction-column justify-content-center">
				<h2 class="title font-5rem m-font-2rem"><?php echo $langCode['YourPartnerAroundTheWorld']; ?></h2>
				<p class="content font-2rem d-none d-sm-none d-md-block d-lg-block d-xl-block">
					<?php echo $langCode['YourPartnerAroundTheWorldCon']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/partnership/Flag-map_of_South_Korea_de-facto.png" alt="BK Korea Powders" class="img-fluid" />
			</div>
			<div class="col-lg-6 d-flex flex-direction-column justify-content-center">
				<h2 class="title"><?php echo $langCode['BarskoreaHeadquarter']; ?></h2>
				<p class="content">
					<?php echo $langCode['footerAddrCon']; ?>
					<span class="d-block">
						<?php echo $langCode['Email']; ?> : <a href="mailto:barskorea@hanmail.net">barskorea@hanmail.net</a>
					</span>
					<span class="d-block">
						<?php echo $langCode['Tel']; ?> : <a href="tel:+82325813466">+82-32-581-3466</a>
					</span>
					<span class="d-block">
						<?php echo $langCode['Fax']; ?> : +82-32-581-8937
					</span>
					<span class="d-block">
						<?php echo $langCode['Web']; ?> : <a href="http://www.barskorea.com/">http://www.barskorea.com/</a>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="block-wrap light-bg">
	<div class="container m-container px-5">
		<div class="row text-center">
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/Australia.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaAustralia']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaAustraliaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/Malaysia.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaMalaysia']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaMalaysiaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/dubai_new.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaDubai']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaDubaiCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/thailand.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaThailand']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaThailandCity']; ?></p>
				</div>
			</div>
			<!--
			<div class="col-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/poland.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaPoland']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaPolandCity']; ?></p>
				</div>
			</div>
			-->
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/philippines.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaPhilippines']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaPhilippinesCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/cambodia.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaCambodia']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaCambodiaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/canada.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaCanada']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaCanadaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/china.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaChina']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaChinaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/hawaii.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaHawaii']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaHawaiiCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/iran.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaIran']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaIranCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/myanmar.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaMyanmar']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaMyanmarCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/saudi.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaSaudiArabia']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaSaudiArabiaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/turkey.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaTurkey']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaTurkeyCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/oman.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaOman']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaOmanCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/ireland.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaIreland']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaIrelandCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/israel.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo $langCode['BarskoreaIsrael']; ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaIsraelCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/england.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo strtoupper($langCode['BarskoreaEngland']); ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaEnglandCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/america.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo strtoupper($langCode['BarskoreaAmerica']); ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaAmericaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/sri_ranka.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo strtoupper($langCode['BarskoreaSriRanka']); ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaSriRankaCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/parkistan.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo strtoupper($langCode['BarskoreaPakistan']); ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaPakistanCity']; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-6 py-3">
				<div class="border-box">
					<img src="<?php echo $front_img_url; ?>/partnership/vietnam.png" alt="" class="img-fluid" />
					<h2 class="title subject title subject pt-3 pb-0"><?php echo strtoupper($langCode['BarskoreaVietnam']); ?></h2>
					<p class="content"><?php echo $langCode['BarskoreaVietnamCity']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
(function($) {
	function headerImageResize() {
		var _imageWidth = _imageHeight = 0;
		var _stageHeight = jQuery(window).height();
		var _stageWidth = jQuery(window).width();
		var IMAGE_WIDTH = 1960;
		var IMAGE_HEIGHT = 960;

		//높이제어(세로기준으로 가로를 맞춤)
		if(_stageHeight < _imageHeight || _stageHeight > _imageHeight) { //플랫폼이 이미지의세로보다 작거나 크면
			//_imageHeight = _stageHeight; //이미지의 세로를 플랫폼으로 맞추고
			//_imageWidth = _stageHeight * IMAGE_WIDTH/IMAGE_HEIGHT; //세로에따른 비율계산

			_imageWidth = _stageWidth; //이미지의 가로를 플랫폼으로 맞추고
			_imageHeight = _stageWidth * IMAGE_HEIGHT/IMAGE_WIDTH; //가로에따른 비율계산
		}

		//가로제어(가로기준으로 세로를 맞춤)
		if(_stageWidth > _imageWidth){ //플랫폼이 이미지의가로보다 크면
			_imageWidth = _stageWidth; //이미지의 가로를 플랫폼으로 맞추고
			_imageHeight = _stageWidth * IMAGE_HEIGHT/IMAGE_WIDTH; //가로에따른 비율계산
		}
		jQuery('#headerImage').width(_imageWidth);
		jQuery('#headerImage').height(_imageHeight);
		console.log(_imageHeight);
	}
	jQuery(document).ready(function() {
		headerImageResize();
	});
	jQuery(window).resize(function() {
		headerImageResize();
	});
})(jQuery);
</script>
<?php include_once('footer_ui.php'); ?>