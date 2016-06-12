<?php session_start(); ?>
<meta http-equiv="Content-Type" charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['username'] != null)
{

	$sql = "SELECT * FROM h_employee_table where username = '$username' ";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
	
        echo "<form style='width:980px;margin: auto;' name=\"form\" method=\"post\" action=\"h_employee_select_finish.php\">";
	echo "<div style='margin-left:390px;margin-top:100px;	font-size:30px;letter-spacing: normal;font-weight:900;color: #1F7CFF;'>員工資料查詢 </div>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:80px;'>ID</p>
        		<input style='margin-left:290px;margin-top:80px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"ID\" value=\"$row[1]\" /> <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>姓名</p>
        		<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"name\" value=\"$row[2]\" />  <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>手機</p>
        		<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"phone\" value=\"$row[4]\" /> <br>";
	echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>時薪</p>
				<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"hourrate\"  value=\"$row[8]\" />  <br>";
        echo "<input style='border-radius: 0;position: absolute;color: #FFFFFF;background-color: rgba(31, 124, 255, 1);transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        border: solid rgba(31, 124, 255, 1) 2px;cursor: pointer !important;font-size: 15px;width: 150px;height: 40px;margin-left: 750px;
        margin-top: 30px;' type=\"submit\" name=\"button\" value=\"Search\" />";
        echo "</form>";
			
}
else
{
        echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>