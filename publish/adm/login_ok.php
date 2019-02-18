<?php
$header_path = dirname(__FILE__)."/../header.php";
include_once($header_path);

$mb_id = post('mb_id');
$mb_pw = post('mb_pw');
$sql = "SELECT user_id FROM members WHERE user_id = '%s'";
$res = $db -> query($sql, array($mb_id));

if($db -> num_rows() > 0) {
	//
} else {
	redirect(FALSE, '아이디가 틀립니다,');
}

$sql = "SELECT user_pw FROM members WHERE user_pw = password('%s')";
$res = $db -> query($sql, array($mb_pw));

if($db -> num_rows() > 0) {
	//
} else {
	redirect(FALSE, '아이디가 틀립니다,');
}
$sql = "SELECT user_id, user_nic FROM members WHERE user_id = '%s'";
$res = $db -> query($sql, array($mb_id));
$row = $db -> fetch_array();

$_SESSION['user_id']  = $row['user_id'];
$_SESSION['user_nic'] = $row['user_nic'];

redirect(FALSE, '로그인 되었습니다.');

?>