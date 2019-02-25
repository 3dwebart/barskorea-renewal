<?php
	include_once('header_ui.php');
	include_once($include_dir."/simple-php-captcha.php");
	$_SESSION['captcha'] = simple_php_captcha();
	$pageNo = 0;
?>
<link rel="stylesheet" href="<?php echo $front_css_url.'/swiper.min.css' ?>">
<script src="<?php echo $front_js_url.'/swiper.min.js' ?>"></script>
<div class="">
	<div class="main-slide-wrap">
		<div class="main-slide">
			<!-- BIGIN :: Slide -->
			<!-- Slider main container -->
			<div class="swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <div class="swiper-slide">
			        	<img src="<?php echo $front_img_url; ?>/main1.png" alt="" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block" />
			        	<img src="<?php echo $front_img_url; ?>/m-main-1.png" alt="" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-md" />
			        </div>
			        <div class="swiper-slide">
			        	<img src="<?php echo $front_img_url; ?>/main2.png" alt="" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block" />
			        	<img src="<?php echo $front_img_url; ?>/m-main-2.png" alt="" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-md" />
			        </div>
			        <div class="swiper-slide">
			        	<img src="<?php echo $front_img_url; ?>/main1.png" alt="" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block" />
			        	<img src="<?php echo $front_img_url; ?>/m-main-3.png" alt="" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-md" />
			        </div>
			    </div>
			    <!-- If we need pagination -->
			    <div class="swiper-pagination"></div>

			    <!-- If we need navigation buttons -->
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>

			    <!-- If we need scrollbar -->
			    <div class="swiper-scrollbar"></div>
			</div>
			<!-- END :: Slide -->
		</div>
	</div>
</div>
<script>
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
<div class="block-wrap dark-bg bg-att1">
	<div class="container">
		<div class="row p-0">
			<div class="col-lg-4 p-3">
				<h3 class="title"><?php echo $langCode['ourworkTitle1']; ?></h3>
				<p class="content"><?php echo $langCode['ourworkContent1']; ?></p>
			</div>
			<div class="col-lg-4 p-3">
				<h3 class="title"><?php echo $langCode['ourworkTitle2']; ?></h3>
				<p class="content"><?php echo $langCode['ourworkContent2']; ?></p>
			</div>
			<div class="col-lg-4 p-3">
				<h3 class="title"><?php echo $langCode['ourworkTitle3']; ?></h3>
				<p class="content"><?php echo $langCode['ourworkContent3']; ?></p>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<h2 class="bar-title"><?php echo $langCode['company']; ?></h2>
		<p class="content"><?php echo $langCode['companyCon']; ?></p>
		<div class="row p-0 pt-5 mt-5">
			<div class="col-lg-4 text-center">
				<img src="<?php echo($front_img_url); ?>/resized5-300x300.jpg" alt="" class="img-fluid rounded-circle">
				<h3 class="title mt-3 mb-3 text-center"><?php echo $langCode['comProductTitle1']; ?></h3>
				<p class="content minH-160"><?php echo $langCode['comProductContent1']; ?></p>
				<a href="#machine" class="btn btn-warning m-mb-5"><?php echo $langCode['clickMe']; ?></a>
			</div>
			<div class="col-lg-4 text-center">
				<img src="<?php echo($front_img_url); ?>/kitchen-300x300.jpg" alt="" class="img-fluid rounded-circle">
				<h3 class="title mt-3 mb-3 text-center"><?php echo $langCode['comProductTitle2']; ?></h3>
				<p class="content minH-160"><?php echo $langCode['comProductContent2']; ?></p>
				<a href="#machine" class="btn btn-warning m-mb-5"><?php echo $langCode['clickMe']; ?></a>
			</div>
			<div class="col-lg-4 text-center">
				<img src="<?php echo($front_img_url); ?>/bek-gallery-17-300x300.jpg" alt="" class="img-fluid rounded-circle">
				<h3 class="title mt-3 mb-3 text-center"><?php echo $langCode['comProductTitle3']; ?></h3>
				<p class="content minH-160"><?php echo $langCode['comProductContent3']; ?></p>
				<a href="#machine" class="btn btn-warning m-mb-5"><?php echo $langCode['clickMe']; ?></a>
			</div>
		</div>
	</div>
</div>
<div class="block-wrap dark-bg">
	<div class="container">
		<h2 class="bar-title"><?php echo $langCode['BarskoreaSuperSnowMachines']; ?></h2>
		<p class="content"><?php echo $langCode['BarskoreaSuperSnowMachinesCon']; ?></p>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row machine-ex p-0">
			<div class="col-lg-6 d-flex flex-direction-column space-between">
				<div>
					<h2 class="bar-title text-center"><?php echo($langCode['SUF400NWMK']); ?></h2>
					<div class="content pl-5 pr-5 mb-5"><?php echo($langCode['SUF400NWMKCon']); ?></div>
					<div class="row">
						<div class="col-lg-6">
							<h2><?php echo($langCode['Measurements']); ?></h2>
							<span>543 X 680 X 1400mm</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['CoolingType']); ?></h2>
							<span><?php echo($langCode['Air']); ?>/<?php echo($langCode['Water']); ?></span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Weight']); ?></h2>
							<span>130kgs</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Production']); ?></h2>
							<span>350kgs/<?php echo($langCode['day']); ?> (<?php echo($langCode['milk']); ?>)</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Power']); ?></h2>
							<span>220-240V, 50-60Hz</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['roductionHour']); ?></h2>
							<span>14.6kgs/<?php echo($langCode['hr']); ?> (<?php echo($langCode['milk']); ?>)</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['IceType']); ?></h2>
							<span><?php echo($langCode['Snow']); ?>/<?php echo($langCode['FlavoredShavedIce']); ?></span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Container']); ?></h2>
							<span>20kg(100bw/200g)</span>
						</div>
					</div>
				</div>
				<div class="row-5">
					<div class="col-lg-2 col-md-4 col-sm-4 col-2 mt-2 mb-2 text-xs-center"><img src="<?php echo($front_img_url) ?>/mark/ce-150x150.png" alt="CE" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/kc-150x150.png" alt="KC" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/nsf-150x150.png" alt="NSF" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/pse-150x150.png" alt="PSE" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/tuv-150x150.png" alt="TUV" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/ul-150x150.png" alt="UL" class="img-fluid"></div>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url ?>/400MK-960x720.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<div class="block-wrap light-bg">
	<div class="container">
		<div class="row machine-ex p-0">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url ?>/200CK-960x720_smaller.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 d-flex flex-direction-column space-between">
				<div class="">
					<h2 class="bar-title text-center"><?php echo($langCode['SUF200NWCK']); ?></h2>
					<div class="content pl-5 pr-5 mb-5"><?php echo($langCode['SUF200NWCKCon']); ?></div>
					<div class="row">
						<div class="col-lg-6">
							<h2><?php echo($langCode['Measurements']); ?></h2>
							<span>392 X 595 X 826mm</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['CoolingType']); ?></h2>
							<span><?php echo($langCode['Air']); ?>/<?php echo($langCode['Water']); ?></span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Weight']); ?></h2>
							<span>65kgs</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Production']); ?></h2>
							<span>200kgs/<?php echo($langCode['day']); ?> (<?php echo($langCode['milk']); ?>)</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Power']); ?></h2>
							<span>110-240V, 50-60Hz</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['roductionHour']); ?></h2>
							<span>8kgs/<?php echo($langCode['hr']); ?> (<?php echo($langCode['milk']); ?>)</span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['IceType']); ?></h2>
							<span><?php echo($langCode['Snow']); ?>/<?php echo($langCode['FlavoredShavedIce']); ?></span>
						</div>
						<div class="col-lg-6">
							<h2><?php echo($langCode['Container']); ?></h2>
							<span>6kg(41bw/200g)</span>
						</div>
					</div>
				</div>
				<div class="row-5">
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/ce-150x150.png" alt="CE" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/kc-150x150.png" alt="KC" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/nsf-150x150.png" alt="NSF" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/pse-150x150.png" alt="PSE" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/tuv-150x150.png" alt="TUV" class="img-fluid"></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2 mb-2"><img src="<?php echo($front_img_url) ?>/mark/ul-150x150.png" alt="UL" class="img-fluid"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="features-wrap block-wrap light-bg">
	<div class="container text-center">
		<h2 class="bar-title"><?php echo $langCode['Features']; ?></h2>
		<div class="row text-center">
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-trophy" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle1']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent1']; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-cogs" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle2']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent2']; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-leaf" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle3']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent3']; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-wrench" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle4']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent4']; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle5']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent5']; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="features-icon">
					<i class="fa fa-refresh" aria-hidden="true"></i>
				</div>
				<h2 class="title color-orange"><?php echo $langCode['FeaturesTitle6']; ?></h2>
				<p class="pt-1 pb-1"><?php echo $langCode['FeaturesContent6']; ?></p>
			</div>
		</div>
		<div class="row-10 mt-5">
			<div class="col-lg-3">
				<img src="<?php echo($front_img_url) ?>/machine1.jpg" alt="" class="img-fluid rounded-1rem">
			</div>
			<div class="col-lg-3">
				<h2 class="title"><?php echo $langCode['HighProduction']; ?></h2>
				<p class="content"><?php echo $langCode['HighProductionCon']; ?></p>
			</div>
			<div class="col-lg-3">
				<img src="<?php echo($front_img_url) ?>/machine2.jpg" alt="" class="img-fluid rounded-1rem">
			</div>
			<div class="col-lg-3">
				<h2 class="title"><?php echo $langCode['EasyCleaningSystem']; ?></h2>
				<p class="content"><?php echo $langCode['EasyCleaningSystemCon']; ?></p>
			</div>
		</div>
		<div class="row-10">
			<div class="col-lg-3 order-lg-1 order-2">
				<h2 class="title"><?php echo $langCode['CoolingFunction']; ?></h2>
				<p class="content"><?php echo $langCode['CoolingFunctionCon']; ?></p>
			</div>
			<div class="col-lg-3 order-lg-2 order-1">
				<img src="<?php echo($front_img_url) ?>/machine3.jpg" alt="" class="img-fluid rounded-1rem">
			</div>
			<div class="col-lg-3 order-lg-3 order-4">
				<h2 class="title"><?php echo $langCode['EasyFunctionSystem']; ?></h2>
				<p class="content"><?php echo $langCode['EasyFunctionSystemCon']; ?></p>
			</div>
			<div class="col-lg-3 order-lg-4 order-3">
				<img src="<?php echo($front_img_url) ?>/machine4.jpg" alt="" class="img-fluid rounded-1rem">
			</div>
		</div>
	</div>
</div>
<div class="features-wrap block-wrap dark-bg">
	<div class="container text-center">
		<h2 class="bar-title"><?php echo $langCode['CheckOutOurSuperSnowMachines']; ?></h2>
		<p class="content"><?php echo $langCode['CheckOutOurSuperSnowMachinesCon']; ?></p>
		<a href="https://vimeo.com/242702098" data-vimeo data-vimeo-loop data-vimeo-autoplay data-vimeo-maxwidth="640" class="vimeo">
		    <img src="http://posterfra.me/https://vimeo.com/242702098" alt="Barskorea Super Snow Machines" />
		</a>
	</div>
</div>
<div class="features-wrap block-wrap orange-bg">
	<div class="container text-center">
		<h2 class="bar-title"><?php echo $langCode['YourBrandingPartner​']; ?></h2>
		<p class="content"><?php echo $langCode['YourBrandingPartner​Con']; ?></p>
		<a href="https://vimeo.com/287376612" data-vimeo data-vimeo-loop data-vimeo-autoplay data-vimeo-maxwidth="640" class="vimeo">
		    <img src="http://posterfra.me/https://vimeo.com/287376612" alt="Barskorea Super Snow Machines" />
		</a>
	</div>
</div>
<div class="features-wrap block-wrap orange-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-direction-column space-between">
				<div>
					<h2 class="bar-title text-center"><?php echo $langCode['JoinBKKoreaFamily']; ?></h2>
					<p class="content"><?php echo $langCode['JoinBKKoreaFamilyCon']; ?></p>
				</div>
				<div class="button text-center">
					<a href="#" class="btn btn-light"><?php echo $langCode['clickMe']; ?></a>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo($front_img_url); ?>/bek_image.jpg" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<?php
$galleryName = "gallery";
$galleryTable = "bo_table_".$galleryName;
$galleryFile = $galleryTable.'_files';
$idArr = array();
$dataIdArr = array();
$sql = "SELECT id FROM %s";
$res = $db -> query($sql, array($galleryTable));
for ($i=0; $row = $db -> fetch_assoc(); $i++) { 
	$idArr[$i] = $row['id'];
}
$sql = "SELECT id, document_id, dir, file_name, origin_name FROM %s LIMIT 0, 8";
$res = $db -> query($sql, array($galleryFile));
?>
<div class="features-wrap block-wrap orange-bg">
	<div class="container">
		<h2 class="bar-title text-center"><?php echo $langCode['OurMenu']; ?></h2>
		<p class="content"><?php echo $langCode['OurMenuCon']; ?></p>
		<div class="gallery nav nav-pills nav-stacked">
			<div class="row-5">
				<?php
					while ($row = $db -> fetch_assoc()) {
						for($i = 0; $i < count($idArr); $i++) {
							if ($row['document_id'] == $idArr[$i]) {
								$file = $site_url.$row['dir'].$row['file_name'];
								$dataIdArr[] = $row['id'];
				?>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="#lightbox" data-id="<?php echo($row['id']); ?>" data-toggle="modal" data-target="#galleryModal">
						<img src="<?php echo($file); ?>" alt="<?php echo($row['origin_name']); ?>" class="img-fluid" />
					</a>
				</div>
				<?php
							}
						}
					}
				?>
			</div>
		</div>
	</div>
</div>
<!-- The Modal -->
<div class="modal" id="galleryModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title"><?php echo $langCode['OurMenu']; ?></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<?php
			$sql = "SELECT id, document_id, dir, file_name, origin_name FROM %s LIMIT 0, 8";
			$res = $db -> query($sql, array($galleryFile));
			?>

			<!-- Modal body -->
			<div class="modal-body">
				<div id="demo" class="carousel slide" data-ride="carousel">
					 <!-- Indicators -->
					<ul class="carousel-indicators">
						<?php
							for($i = 0; $i < count($dataIdArr); $i++) {
    							echo '<li data-target="#demo" data-slide-to="'.$i.'" data-id="'.$dataIdArr[$i].'"></li>';
							}
						?>
					</ul>
					<div class="carousel-inner">
					<?php
						while ($row = $db -> fetch_assoc()) {
							for($i = 0; $i < count($idArr); $i++) {
								if ($row['document_id'] == $idArr[$i]) {
									$file = $site_url.$row['dir'].$row['file_name'];
					?>
						<div class="carousel-item" data-id="<?php echo($dataIdArr[$i]); ?>">
							<img src="<?php echo($file); ?>" alt="<?php echo($row['origin_name']); ?>" class="img-fluid m-w-100" />
						</div>
					<?php
								}
							}
						}
					?>
					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-mint" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<!-- 임시 스크립트 { -->
<script>
	jQuery('a[href="#lightbox"]').on('click', function() {
		var id = jQuery(this).data('id');
		var targetID = jQuery(this).data('target');
		jQuery(targetID).on('shown.bs.modal', function () {
			jQuery('.carousel-indicators li').each(function() {
				if(jQuery(this).data('id') == id) {
					jQuery(this).siblings().removeClass('active');
					jQuery(this).addClass('active');
				}
			});
			jQuery('.carousel-inner .carousel-item').each(function() {
				if(jQuery(this).data('id') == id) {
					jQuery(this).siblings().removeClass('active');
					jQuery(this).addClass('active');
				}
			});
		});
		//return false;
	});
</script>
<!-- } 임시 스크립트 -->
<div class="features-wrap block-wrap orange-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url ?>/map.png" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-6">
				<h2 class="bar-title text-center"><?php echo $langCode['Features']; ?></h2>
				<form action="">
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_name']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_company']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_email']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_phone']; ?>:</label>
						<div class="col-lg-9">
							<div class="input-group">
								<input type="text" class="form-control m-form-control col-3">
								<span class="input-group-prepend col-form-label pl-2 pr-2"> - </span>
								<input type="text" class="form-control m-form-control">
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_country']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_textarea']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_wordVerification']; ?>:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control m-form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="input-group">
							<div class="btn-group">
								<button type="submit" class="btn btn-danger"><?php echo $langCode['f_submit']; ?></button>
								<button type="submit" class="btn btn-warning"><?php echo $langCode['f_reset']; ?></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- BIGIN :: Youtube Gallery -->
<script type='text/javascript' src='<?php echo($front_plugins_url); ?>/unitegallery/js/unitegallery.min.js'></script>	
<link rel='stylesheet' href='<?php echo($front_plugins_url); ?>/unitegallery/css/unite-gallery.css' type='text/css' />
<script type='text/javascript' src='<?php echo($front_plugins_url); ?>/unitegallery/themes/compact/ug-theme-compact.js'></script>
<?php
$sql = "SELECT 
		a.subject, 
		a.content, 
		(
			SELECT concat(f.dir, f.file_name) 
			FROM bo_table_youtube_files f 
			WHERE f.document_id = a.id
		) AS file 
		FROM bo_table_youtube a";
$res = $db -> query($sql);
if($db -> num_rows() == 0) {
?>
<div class="features-wrap block-wrap light-bg yuptube-gallery">
	<div class="container">
		<div id="gallery" style="display:none;">
			자료를 준비중 입니다.
		</div>
	</div>
</div>
<?php
} else {
?>
<div class="features-wrap block-wrap light-bg yuptube-gallery">
	<div class="container">
		<div id="gallery" style="display:none;">
			<?php
				while ($row = $db -> fetch_assoc()) {
			?>
			<img alt="Youtube Video"
				 data-type="youtube"
				 <?php if(!empty($row['file'])) { ?>
				 src="<?php echo $front_img_url ?>/youtube-bingbox.png"
				 <?php } ?>
				 data-videoid="<?php echo($row['subject']); ?>"
				 data-description="<?php echo($row['content']); ?>" />
			<?php
				}
			?>
		</div>
		<script type="text/javascript">
			function yuotubeGalleryH() {
				var g = jQuery("#gallery");
				w = g.width();
				h = w / 16 * 9;
				g.css({
					'min-height':h + 'px'
				});
			}
			jQuery(document).ready(function(){
				jQuery("#gallery").unitegallery({
					gallery_width: 100 + '%',
					thumb_width:160,
					thumb_height:90
				});
				yuotubeGalleryH();
				jQuery(window).resize(function() {
					yuotubeGalleryH();
				});
			});
		</script>
	</div>
</div>
<?php } ?>
<!-- END :: Youtube Gallery -->
<script src="<?php echo($front_js_url) ?>/vimeoplayer.js"></script>
</body>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- BIGIN :: 2012 Introduce korea sulbing contact  -->
<div class="features-wrap block-wrap light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img src="<?php echo($front_img_url) ?>/logo/sulbing2.jpg" alt="Sulbing" class="img-fluid">
			</div>
			<div class="col-lg-7">
				<h1 class="title">
					<?php echo($langCode['Sulbing']); ?>
				</h1>
				<p class="content">
					<?php echo($langCode['SulbingCon']); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- END :: 2012 Introduce korea sulbing contact  -->
<!-- BIGIN :: Partnership logos  -->
<div class="features-wrap block-wrap light-bg pb-5">
	<div class="container">
		<div class="row-5">
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/cafethesnow-1.jpg" alt="cafe he show" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/chowking-1.jpg" alt="chowking" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/ediya-1.jpg" alt="EDIYA COFFEE" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/hollys-1.jpg" alt="hollys" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/maancoffee-1.jpg" alt="maancoffee" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/magicsnow-1.jpg" alt="magicsnow" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/naza-1.jpg" alt="naza" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/pb-1.jpg" alt="paris baguette" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/rottibun-1.jpg" alt="rottibun" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/seolhwa-1.jpg" alt="seolhwa" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/sulmida.jpg" alt="sulmida" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/sulnbeans-1.jpg" alt="sulnbeans" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/theseol-1.jpg" alt="the seol" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/touslesjours-1.jpg" alt="tous les jours" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/unnamed-1.jpg" alt="옥루몽" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/victor-1.jpg" alt="victor" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/vivaldi-1.jpg" alt="vivaldi park" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/widcafe-1.jpg" alt="widcafe" class="img-fluid" />
			</div>
			<div class="col-lg-3-half col-md-4 col-sm-4 col-6">
				<img src="<?php echo($front_img_url); ?>/logo/zoo-1.jpg" alt="zoo coffee" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<!-- END :: Partnership logos  -->
<?php include_once('footer_ui.php'); ?>