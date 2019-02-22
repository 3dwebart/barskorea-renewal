<?php
	include_once('header_ui.php');
	$pageNo = 5;
?>
<div id="headerImage" class="contact-header">
	<div class="contact-wrap d-flex flex-direction-column justify-content-center align-item-center">
		<div class="container text-center">
			<h2 class="title font-5rem m-font-2rem"><?php echo $langCode['contactUs']; ?></h2>
		</div>
	</div>
</div>

<div class="block-wrap light-bg m-pt-0">
	<div class="container m-container contact-us m-pt-5">
		<div class="row">
			<div class="col-lg-4 px-4 d-flex flex-direction-column justify-content-center">
				<h2 class="title font-3rem">
					<?php echo $langCode['BarskoreaHeadquarter']; ?>
				</h2>
				<p class="content my-1">
					<span class="d-block"><?php echo $langCode['footerAddrCon']; ?></span>
					<span class="d-block">
						<?php echo $langCode['Email']; ?> : <a href="mailto:barskorea@hanmail.net">barskorea@hanmail.net</a>
					</span>
					<span class="d-block">
						<?php echo $langCode['Tel']; ?> : <a href="tel:+82325813466">+82-32-581-3466</a>
					</span>
					<span class="d-block">
						<?php echo $langCode['Fax']; ?> :  +82-32-581-8937
					</span>
					<span class="d-block">
						<?php echo $langCode['Web']; ?> : <a href="http://www.barskorea.com/">http://www.barskorea.com/</a>
					</span>
					<span class="d-block"></span>
				</p>
			</div>
			<div class="col-lg-8 d-flex flex-direction-column justify-content-center bg-w">
				<div class="row-3 pl-4">
					<form action="" class="w-100">
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_name']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_company']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_email']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_phone']; ?>:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control col-3">
									<span class="input-group-prepend col-form-label pl-2 pr-2"> - </span>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_country']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_textarea']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_wordVerification']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
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
</div>

<div class="block-wrap light-bg contact-qr">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-3">
				<img src="<?php echo $front_img_url; ?>/contact/Kakao_qr-1.jpg" alt="Kakao Talk" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-3">
				<img src="<?php echo $front_img_url; ?>/contact/Line_QR1.jpg" alt="LINE" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-3">
				<img src="<?php echo $front_img_url; ?>/contact/wechat_qr1.jpg" alt="WeChat" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-3">
				<img src="<?php echo $front_img_url; ?>/contact/site_qr1.jpg" alt="BARSKOREA" class="img-fluid" />
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