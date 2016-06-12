<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$realname = $_POST['realname'];
$job = $_POST['job'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($id != null && $pw != null && $pw2 != null && $pw == $pw2) {
	//新增資料進資料庫語法
	$sql = "insert into administrator_table (username,password,Name,title) values ('$id', '$pw', '$realname','$job')";
	if (mysql_query($sql)) {
		echo 'Register success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
	} else {
		echo 'Register fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
	}
} else {
	echo '您無權限觀看此頁面!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>