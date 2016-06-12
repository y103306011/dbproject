<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$nickname = $_POST['nickname'];


if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
 	$username = $_SESSION['username'];

    
        $sql = "update administrator_table set password='$pw',title='$nickname' where username = '$username' ";
        if(mysql_query($sql))
        {
                echo 'success!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
        }
        else
        {
                echo 'wrong!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
        }
}
else
{
        echo 'wtf!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>