<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$name = $_POST['name'];
$composer = $_POST['composer'];
$lyricist = $_POST['lyricist'];
$date = $_POST['date'];
$cost = $_POST['cost'];
$sid = $_POST['sid'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($id != null ) {
	//新增資料進資料庫語法
	$sql = "update  record_table set name='$name',composer='$composer',lyricist='$lyricist',date='$date',cost='$cost',sid='$sid' where ID = '$id'";
	if (mysql_query($sql)) {
		echo 'Update success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_update.HTML>';
	} else {
		echo 'Update fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_update.HTML>';
	}
} else {
	echo '請填寫ID';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_update.HTML>';
}
?>