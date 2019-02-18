<?php
	include_once('../header_ui.php');
	include_once('bbs_config.php');

	// 글 번호 파라미터 처리
	$id = get('id');

	if (!$id) {
		redirect(FALSE, '글 번호가 없습니다.');
	}
?>
<style>
	.btn + .btn {
		margin-left: 0;
	}

	h3 {
		padding-top: 10px;
		padding-bottom: 10px;
	}
</style>
<div class="clearfix"></div>
<?php include_once $bbs_skin."/delete.php"; ?>

<?php include_once('../footer_ui.php'); ?>
