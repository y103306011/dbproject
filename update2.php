<?php session_start(); ?>
<meta http-equiv="Content-Type" charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['username'] != null)
{

     	$username = $_SESSION['username'];
	$sql = "SELECT * FROM administrator_table where username = '$username' ";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
	
        echo "<form style='width:980px;margin: auto;' name=\"form\" method=\"post\" action=\"update_finish.php\">";
		echo "<div style='margin-left:390px;margin-top:100px;	font-size:30px;letter-spacing: normal;font-weight:900;color: #1F7CFF;'>資料修改 </div>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:80px;'>密碼</p><input style='margin-left:290px;margin-top:80px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "<p style='position:absolute;margin-left:220px;margin-top:15px;'>確認密碼</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
        echo "<p style='position:absolute;margin-left:240px;margin-top:15px;'>職稱</p><input style='margin-left:290px;margin-top:10px; width:380px; height:30px;border: 2px solid rgba(204, 218, 224, 1);font: normal normal normal 16px/1.4em overlock, sans-serif;' type=\"text\" name=\"nickname\" value=\"$row[4]\" />  <br>";
								
        echo "<input style='    
        border-radius: 0;
        position: absolute;
        color: #FFFFFF;
        background-color: rgba(31, 124, 255, 1);
        transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        border: solid rgba(31, 124, 255, 1) 2px;
        cursor: pointer !important;
        font-size: 15px;
        width: 150px;
        height: 40px;
        margin-left: 800px;
        margin-top: 60px;' type=\"submit\" name=\"button\" value=\"Reivse\" />";
        echo "</form>";
			
}
else
{
        echo '�z�L�v���[�ݦ�����!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
}
?>