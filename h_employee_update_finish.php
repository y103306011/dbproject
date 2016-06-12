<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$address = $_POST['address'];
$sid = $_POST['sid'];
$hrate = $_POST['hrate'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($id != null ) {
	//新增資料進資料庫語法
	$sql = "update  h_employee_table set name='$name',email='$email',phone='$phone',date_hired='$date',address='$address',supervisor_id='$sid',hourly_rate='$hrate' where ID = '$id'";
	if (mysql_query($sql)) {
		echo 'Update success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_update.HTML>';
	} else {
		echo 'Update fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_update.HTML>';
	}
} else {
	echo '請填寫ID';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_update.HTML>';
}
?>