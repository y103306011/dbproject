<?php session_start(); ?>
<meta http-equiv="Content-Type" charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['username'] != null)
{

	$sql = "SELECT * FROM singer_table where username = '$username' ";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
	
        echo "<form style='width:980px;margin: auto;' name=\"form\" method=\"post\" action=\"singer_select_finish.php\">";
		echo "<div style='margin-left:390px;margin-top:100px;	font-size:30px;letter-spacing: normal;font-weight:900;color: #1F7CFF;'>歌手資料查詢 </div>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:80px;'>ID</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        		<input style='margin-left:290px;margin-top:80px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"ID\" value=\"$row[1]\" /> <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>姓名</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        		<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"name\" value=\"$row[2]\" />  <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>經紀人姓名</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        		<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"bname\" value=\"$row[6]\" /> <br>";
		echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>經紀人手機</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"bphone\"  value=\"$row[7]\" />  <br>";
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