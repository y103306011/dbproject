<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$name = $_POST['name'];
$start = $_POST['start'];
$end = $_POST['end'];
$amount = $_POST['amount'];
$bname = $_POST['bname'];
$bphone = $_POST['bphone'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($id != null ) {
	//新增資料進資料庫語法
	$sql = "update  singer_table set name='$name',start='$start',end='$end',amount='$amount',bname='$bname',bphone='$bphone' where ID = '$id'";
	if (mysql_query($sql)) {
		echo 'Update success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/singer_update.HTML>';
	} else {
		echo 'Update fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/singer_update.HTML>';
	}
} else {
	echo '請填寫ID';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/singer_update.HTML>';
}
?>