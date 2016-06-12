<?php
include ("mysql_connect.inc.php");
	echo '<a style="position:absolute;margin-left:985px;margin-top:-277px;text-decoration:none" href="logout.php" id="apDiv6_1">登出</a>  <br><br>';
	echo '<br><br>';
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM administrator_table where username = '$username' ";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)) {

		echo "<div style='position:absolute;margin-left: 40px;margin-top:-50px;font-size:30px;font-style: italic;font-weight:bold;;color: #3C3C3C'> 姓名:$row[3] </div>";
		echo "<div style='position:absolute;margin-left: 40px;margin-top:25px;font-size:30px;font-style: italic;font-weight:bold;;color: #3C3C3C'>職稱:$row[4] </div>";
	}
?>