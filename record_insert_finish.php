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
	$sql = "insert into record_table (ID,name,composer,lyricist,date,cost,sid) values ('$id', '$name', '$composer','$lyricist','$date','$cost','$sid')";
	if (mysql_query($sql)) {
		echo 'Insert success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_insert.HTML>';
	} else {
		echo 'Insert fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_insert.HTML>';
	}
} else {
	echo '請填寫ID';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/record_insert.HTML>';
}
?>