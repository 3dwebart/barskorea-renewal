<?php
$header_path = dirname(__FILE__)."/header.php";
include_once($header_path);
$langguge = array(
	array(
		'code' => 'eng',
		'text' => 'ENG',
		'lang2Code' => 'en'
	),
	array(
		'code' => 'fra',
		'text' => 'FRA',
		'lang2Code' => 'fr'
	),
	/* *** 러시아어 보류
	array(
		'code' => 'rus',
		'text' => 'RUS'
	),
	*/
	array(
		'code' => 'esp',
		'text' => 'ESP',
		'lang2Code' => 'es'
	),
	array(
		'code' => 'prt',
		'text' => 'PRT',
		'lang2Code' => 'pt'
	)
);
$currentLang = $_COOKIE['language'];
if(empty($currentLang)) {
	$currentLang = 'eng';
}
if(empty($currentLang)) {
	$lang2Code = 'en';
} else {
	$lang2Code = $langCode['code2'];
}
include_once($site_dir.'/language/'.$currentLang.'.php');
?>
<!DOCTYPE html>
<?php if(empty($currentLang)) { ?>
<html lang="en">
<?php } else { ?>
<html lang="<?php echo($langCode['code2']); ?>">
<?php } ?>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/bootstrap-reboot.min.css">
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/bootstrap-grid.min.css">
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo($front_css_url); ?>/custom.css">
<script src="<?php echo($front_js_url); ?>/jquery-3.3.1.min.js"></script>
<script src="<?php echo($front_js_url); ?>/bootstrap.min.js"></script>
<script src="<?php echo($front_js_url); ?>/jquery.cookie.js"></script>
<script src="<?php echo($front_js_url); ?>/custom.js"></script>
</head>
<body>
<div class="top-bar">
	<div class="container">
		<ul class="flag-list">
			<?php for($i = 0; $i < count($langguge); $i++) { ?>
			<li>
				<a href="#" class="<?php echo($langguge[$i]['code']); ?><?php echo $langguge[$i]['code'] == $langCode['code'] ? ' active' : '' ?>" data-lang="<?php echo($langguge[$i]['code']); ?>"><?php echo($langguge[$i]['text']); ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?php echo($site_url); ?>">
			<img src="<?php echo($front_img_url); ?>/barskorea-logo.png" alt="logo" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barskoreaNav" aria-controls="barskoreaNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="barskoreaNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo $site_url ?>"><?php echo($langCode['home']); ?> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url ?>/aboutus.php"><?php echo($langCode['aboutUs']); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url ?>/product.php"><?php echo($langCode['products']); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url ?>/bkkorea.php"><?php echo($langCode['bkKoreaFamily']); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><?php echo($langCode['partnership']); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><?php echo($langCode['contact']); ?></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php
	//
?>