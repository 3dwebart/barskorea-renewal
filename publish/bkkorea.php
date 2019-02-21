<?php
	include_once('header_ui.php');
	$pageNo = 3;
?>
<div id="headerImage" class="bkkorea-header">
	<div class="header-wrap">
		<div class="text text-center">
			<img src="<?php echo $front_img_url; ?>/bkkorea/bek_logo-768x253.png" alt="bk-korea logo" class="img-fluid" />
			<h2><?php echo $langCode['YourOneStopSolution']; ?></h2>
			<span><?php echo $langCode['YourOneStopSolutionCon']; ?></span>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/image2.jpg" alt="BK Korea Powders" class="img-fluid" />
			</div>
			<div class="col-lg-6 d-flex flex-direction-column justify-content-center align-item-center">
				<h2 class="title"><?php echo $langCode['AboutBKKorea']; ?></h2>
				<p class="content"><?php echo $langCode['AboutBKKoreaCon']; ?></p>
			</div>
		</div>
	</div>
</div>

<div class="block-wrap dark-bg">
	<div class="container text-center">
		<h2 class="bar-title"><?php echo $langCode['OurServices']; ?></h2>
		<p class="content"><?php echo $langCode['OurServicesCon']; ?></p>
	</div>
</div>

<div class="block-wrap light-bg">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 d-flex flex-direction-column space-between align-item-center">
				<div class="font-7rem">
					<i class="fa fa-camera"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['PhotoAndDesign']; ?></h2>
				<p class="content font-d75rem">
					<?php echo $langCode['PhotoAndDesignCon']; ?>
				</p>
				<div class="row-8">
					<div class="col-lg-3 col-6">
						<a href="#pad" data-id="1" data-toggle="modal" data-target="#padModal" class="modal-btn"><img src="<?php echo $front_img_url; ?>/bkkorea/design-7-560x560.jpg" alt="photo studio" class="img-fluid" /></a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#pad" data-id="2" data-toggle="modal" data-target="#padModal" class="modal-btn"><img src="<?php echo $front_img_url; ?>/bkkorea/design-9-560x560.jpg" alt="photo studio" class="img-fluid" /></a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#pad" data-id="3" data-toggle="modal" data-target="#padModal" class="modal-btn"><img src="<?php echo $front_img_url; ?>/bkkorea/design-1-560x560.jpg" alt="photo studio" class="img-fluid" /></a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#pad" data-id="4" data-toggle="modal" data-target="#padModal" class="modal-btn"><img src="<?php echo $front_img_url; ?>/bkkorea/design-8-560x560.jpg" alt="photo studio" class="img-fluid" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/photo-768x576.jpg" alt="photo studio" class="img-fluid" />
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/interior-768x576.jpg" alt="photo studio" class="img-fluid" />
			</div>
			<div class="col-lg-6 d-flex flex-direction-column justify-content-center align-item-center">
				<div class="font-7rem">
					<i class="fa fa-building"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['InteriorDesign']; ?></h2>
				<p class="content font-d75rem">
					<?php echo $langCode['InteriorDesignCon']; ?>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="block-wrap light-bg">
	<div class="container text-center">
		<h2 class="title"><?php echo $langCode['OurProjects']; ?></h2>
		<div class="row text-center">
			<div class="col-lg-3 col-6">
				<img src="<?php echo $front_img_url ?>/bkkorea/bek-australia-300x300.jpg" alt="Our Projects" class="img-fluid">
				<h2 class="title subject pb-0 pt-2"><?php echo $langCode['SulmidaCanada']; ?></h2>
				<p class="content"><?php echo $langCode['SulmidaCanadaCon']; ?></p>
			</div>
			<div class="col-lg-3 col-6">
				<img src="<?php echo $front_img_url ?>/bkkorea/bek-cambodia-300x300.jpg" alt="Our Projects" class="img-fluid">
				<h2 class="title subject pb-0 pt-2"><?php echo $langCode['BeKKoreaCambodia']; ?></h2>
				<p class="content"><?php echo $langCode['BeKKoreaCambodiaCon']; ?></p>
			</div>
			<div class="col-lg-3 col-6">
				<img src="<?php echo $front_img_url ?>/bkkorea/sulmida-canada-300x300.jpg" alt="Our Projects" class="img-fluid">
				<h2 class="title subject pb-0 pt-2"><?php echo $langCode['BeKKoreaAustralia']; ?></h2>
				<p class="content"><?php echo $langCode['BeKKoreaAustraliaCon']; ?></p>
			</div>
			<div class="col-lg-3 col-6">
				<img src="<?php echo $front_img_url ?>/bkkorea/seolbang-philippines-300x300.jpg" alt="Our Projects" class="img-fluid">
				<h2 class="title subject pb-0 pt-2"><?php echo $langCode['SeolBangPhilippines']; ?></h2>
				<p class="content"><?php echo $langCode['SeolBangPhilippinesCon']; ?></p>
			</div>
		</div>
	</div>
</div>

<div class="block-wrap light-bg">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 d-flex flex-direction-column justify-content-center align-item-center">
				<div class="font-7rem">
					<i class="fa fa-coffee"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['MenuDevelopment']; ?></h2>
				<p class="content font-d75rem">
					<?php echo $langCode['MenuDevelopmentCon']; ?>
				</p>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/menu-768x576.jpg" alt="photo studio" class="img-fluid" />
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-3 col-6">
				<a href="#md" data-id="1" data-toggle="modal" data-target="#mdModal" class="modal-btn">
					<img src="<?php echo $front_img_url ?>/bkkorea/bek-gallery-13.jpg" alt="" class="img-fluid" />
				</a>
			</div>
			<div class="col-lg-3 col-6">
				<a href="#md" data-id="2" data-toggle="modal" data-target="#mdModal" class="modal-btn">
					<img src="<?php echo $front_img_url ?>/bkkorea/bek-gallery-1.jpg" alt="" class="img-fluid" />
				</a>
			</div>
			<div class="col-lg-3 col-6">
				<a href="#md" data-id="3" data-toggle="modal" data-target="#mdModal" class="modal-btn">
					<img src="<?php echo $front_img_url ?>/bkkorea/bek-gallery-6.jpg" alt="" class="img-fluid" />
				</a>
			</div>
			<div class="col-lg-3 col-6">
				<a href="#md" data-id="4" data-toggle="modal" data-target="#mdModal" class="modal-btn">
					<img src="<?php echo $front_img_url ?>/bkkorea/bek-gallery-3.jpg" alt="" class="img-fluid" />
				</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/Training-768x576.jpg" alt="photo studio" class="img-fluid" />
			</div>
			<div class="col-lg-6 d-flex flex-direction-column space-between align-item-center">
				<div class="font-7rem">
					<i class="fa fa-bullhorn"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['Training']; ?></h2>
				<p class="content font-d75rem">
					<?php echo $langCode['TrainingCon']; ?>
				</p>
				<div class="row-8">
					<div class="col-lg-3 col-6">
						<a href="#training" data-id="1" data-toggle="modal" data-target="#trainingModal" class="modal-btn">
							<img src="<?php echo $front_img_url; ?>/bkkorea/training-2.jpg" alt="Trading image" class="img-fluid" />
						</a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#training" data-id="2" data-toggle="modal" data-target="#trainingModal" class="modal-btn">
							<img src="<?php echo $front_img_url; ?>/bkkorea/training-3.jpg" alt="Trading image" class="img-fluid" />
						</a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#training" data-id="3" data-toggle="modal" data-target="#trainingModal" class="modal-btn">
							<img src="<?php echo $front_img_url; ?>/bkkorea/training-5.jpg" alt="Trading image" class="img-fluid" />
						</a>
					</div>
					<div class="col-lg-3 col-6">
						<a href="#training" data-id="4" data-toggle="modal" data-target="#trainingModal" class="modal-btn">
							<img src="<?php echo $front_img_url; ?>/bkkorea/training-7.jpg" alt="Trading image" class="img-fluid" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap dark-bg">
	<div class="container text-center">
		<h2 class="bar-title"><?php echo $langCode['OurBrands']; ?></h2>
		<p class="content"><?php echo $langCode['OurBrandsCon']; ?></p>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container text-center">
		<div class="row-10">
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/icon_bek-600x600.jpg" alt="Dessert cafe bek" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Premium Dessert Café</h2>
				<p class="content">
					BK KOREA introduces freshest snow ice originated from KOREA. Providing newest texture of snow ice with healthy ingredients, customers enjoy well-being menus and brand atmosphere.
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/icon_bingbox-600x600_rev1.jpg" alt="moden ice bingbox" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Modern Shaved Ice</h2>
				<p class="content">
					Bingbox represents an innovative take on modern Korean shaved ice (bingsu), revolutionizing it by infusing flavors into the snow itself, offering a unique ice base of mango, matcha, chocolate, and other distinctive tastes
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/icon_sulmida_600x600.jpg" alt="sulmida" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Contemporary Café</h2>
				<p class="content">
					The ‘SULMIDA’ focused on being most innovative retailer in the world offering cleavable and nutritious selections of fresh menus and other dessert selection.
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/icon_meokbang-600x600.jpg" alt="Korean BBQ Restaurant 먹방불고기" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Korean BBQ Restaurant</h2>
				<p class="content">
					‘MEOKBANG’ Korean BBQ Restaurant creates an experience to take you and your friends on a culinary journey to Hong Kong.
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/icon_becoffee-600x600.jpg" alt="becoffee" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Roastery Café</h2>
				<p class="content">
					In BECOFFEE we roast our own coffee only from the freshest coffee beans from all over the world. We love our coffee and we are proud of serving it.
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/sobing-759x1024.png" alt="bingsu" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Delightful Snowy Desserts</h2>
				<p class="content">
					So Bing introduces to Israel the popular Korean dessert Bingsu, based on flavored snow accompanied by sauces, fresh fruit and various extras.
				</p>
			</div>
			<div class="col-lg-3">
				<div class="logo-box">
					<img src="<?php echo $front_img_url; ?>/bkkorea/logo/KakaoTalk_20181105_132250892-2-768x659.png" alt="bingsu" class="img-fluid" />
				</div>
				<h2 class="title subject pb-0 pt-2">Korean Bingsu and Café</h2>
				<p class="content">
					Straight from Korea all the way to Jordan, the journey of Be.J Café began in October 25th 2018 with irresistibly fun to eat and creative desserts.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- BIGIN :: vimeo -->
<div class="block-wrap light-bg">
	<div class="container text-center">
		<?php if($langCode['code'] == 'eng') { ?>
		<h2 class="title"><?php echo $langCode['WeFocusOnTheQuality']; ?></h2>
		<?php } ?>
		<a href="https://vimeo.com/253214687" data-vimeo data-vimeo-loop data-vimeo-autoplay data-vimeo-maxwidth="640" class="vimeo">
		    <img src="http://posterfra.me/https://vimeo.com/253214687" alt="Barskorea Super Snow Machines" class="img-fluid" />
		</a>
	</div>
</div>
<script src="<?php echo($front_js_url) ?>/vimeoplayer.js"></script>
<!-- END :: vimeo -->
<div class="block-wrap dark-bg">
	<div class="container text-center">
		<div class="row text-center">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bkkorea/bek_image-1.jpg" alt="bek image" class="img-fluid" />
			</div>
			<div class="col-lg-6 d-flex flex-direction-column justify-content-center align-item-center">
				<h2 class="bar-title color-orange"><?php echo $langCode['VisitBKKoreaWebsite']; ?></h2>
				<p class="content"><?php echo $langCode['VisitBKKoreaWebsiteCon']; ?></p>
				<div class="">
					<a href="" class="btn btn-mint">
						<?php echo $langCode['clickMe']; ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-3 py-1 m-0">
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="1" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/bing-slider-10.jpg" alt="slide 1" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="2" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/bing-slider-11.jpg" alt="slide 2" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="3" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/3-560560-1.jpg" alt="slide 3" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="4" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/bek-gallery-19-1.jpg" alt="slide 4" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="5" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/grid10.jpg" alt="slide 5" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="6" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/grid12.jpg" alt="slide 6" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="7" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/image-3.jpg" alt="slide 7" class="img-fluid" />
		</a>
	</div>
	<div class="col-lg-3-half">
		<a href="#VisitBKKorea" data-id="8" data-toggle="modal" data-target="#VisitBKKoreaModal" class="modal-btn">
			<img src="<?php echo $front_img_url; ?>/bkkorea/slide/menu-1-big.jpg" alt="slide 8" class="img-fluid" />
		</a>
	</div>
</div>
<?php include_once "./bkkorea_modal.php"; ?>
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