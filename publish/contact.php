<?php
	include_once('header_ui.php');
	//include_once($include_dir."/simple-php-captcha.php");
	$captcha = array();

	include($include_dir."/simple-php-captcha.php");
	$captcha = simple_php_captcha();
	$_SESSION['captcha'] = $captcha;

	/*
	$_SESSION['captcha'] = simple_php_captcha( array(
	    'min_length' => 5,
	    'max_length' => 5,
	    //'backgrounds' => array(image.png', ...),
	    //'fonts' => array('font.ttf', ...),
	    'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
	    'min_font_size' => 28,
	    'max_font_size' => 28,
	    'color' => '#666',
	    'angle_min' => 0,
	    'angle_max' => 10,
	    'shadow' => true,
	    'shadow_color' => '#fff',
	    'shadow_offset_x' => -1,
	    'shadow_offset_y' => 1
	));
	*/
	$pageNo = 5;
?>
<div id="headerImage" class="contact-header">
	<div class="contact-wrap d-flex flex-direction-column justify-content-center align-item-center">
		<div class="container text-center">
			<h2 class="title font-5rem m-font-2rem"><?php echo $langCode['contactUs']; ?></h2>
		</div>
	</div>
</div>
<?php print_r($captcha); ?>
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
					<form method="" action="" class="w-100" id="contactUsForm">
						<div class="row form-group">
							<label for="name" class="col-lg-3 col-form-label"><?php echo $langCode['f_name']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" name="name" class="form-control" id="name">
							</div>
						</div>
						<div class="row form-group">
							<label for="company" class="col-lg-3 col-form-label"><?php echo $langCode['f_company']; ?>:</label>
							<div class="col-lg-9">
								<input type="text" name="company" class="form-control" id="company">
							</div>
						</div>
						<div class="row form-group">
							<label for="email" class="col-lg-3 col-form-label"><?php echo $langCode['f_email']; ?>:</label>
							<div class="col-lg-9">
								<input type="email" name="email" class="form-control" id="email">
							</div>
						</div>
						<div class="row form-group">
							<label for="phone1" class="col-lg-3 col-form-label"><?php echo $langCode['f_phone']; ?>:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="tel" name="phone1" class="form-control col-3" id="phone1">
									<span class="input-group-prepend col-form-label pl-2 pr-2"> - </span>
									<input type="tel" name="phone2" class="form-control">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label for="country" class="col-lg-3 col-form-label"><?php echo $langCode['f_country']; ?>:</label>
							<div class="col-lg-9">
								<select name="country" class="form-control bfh-countries" data-country="US" id="country"></select>
							</div>
						</div>
						<div class="row form-group">
							<label for="message" class="col-lg-3 col-form-label"><?php echo $langCode['f_textarea']; ?>:</label>
							<div class="col-lg-9">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<label for="" class="col-lg-3 col-form-label"><?php echo $langCode['f_wordVerification']; ?>:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<div class="input-group-append">
										<span class="input-group-text p-0">
											<?php
												echo '<img src="'. $captcha['image_src'] . '" alt="CAPTCHA code" class="captcha-image" />';
											?>
										</span>
									</div>
									<input type="text" name="captcha" class="form-control captcha-code">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="input-group">
								<div class="btn-group">
									<button type="submit" class="btn btn-danger submit-btn"><?php echo $langCode['f_submit']; ?></button>
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
	var captchaCode = '<?php echo $captcha["code"]; ?>';
	jQuery(document).on('click', '.submit-btn', function() {
		var vaptchaVal = jQuery('input[name="captcha"]').val();
		if(captchaCode == vaptchaVal) {
			jQuery('#contactUsForm').attr('method', 'post');
			jQuery('#contactUsForm').attr('action', 'contact_ok.php');
			jQuery('#contactUsForm').submit();
		} else if(vaptchaVal == '' || vaptchaVal === undefined) {
			alert('자동 등록방지 코드를 입력해 주세요.');
			jQuery('captcha-code').focus();
			return false;
		} else {
			alert('자동 등록방지 코드를 다시 입력해 주세요.');
			jQuery('captcha-code').focus();
			return false;
		}
	});
})(jQuery);
</script>
<?php include_once('footer_ui.php'); ?>