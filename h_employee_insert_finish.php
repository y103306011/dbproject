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
	$sql = "insert into s_employee_table (ID,name,email,phone,date_hired,address,supervisor_id,hourly_rate) values ('$id', '$name', '$email',$phone,'$date',$address,$sid,$hrate)";
	if (mysql_query($sql)) {
		echo 'Insert success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_insert.HTML>';
	} else {
		echo 'Insert fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_insert.HTML>';
	}
} else {
	echo '請填寫ID';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=http://127.0.0.1/dbproject/h_employee_insert.HTML>';
}
?>