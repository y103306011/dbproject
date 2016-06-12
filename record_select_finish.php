<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$ID = $_POST['ID'];
$name = $_POST['name'];
$composer = $_POST['composer'];
$lyricist = $_POST['lyricist'];

if($ID != null )
{
        $sql = "select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.ID='$ID'";
        $data=mysql_query("select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.ID='$ID'");
        if(mysql_query($sql)==false)
        {
                echo "<script>alert('ERROR!');window.location='record_select.php';</script>";
                 
        }
}
else
{
        if($name != null )
        {
        $sql = "select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.name='$name'";
        $data=mysql_query("select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.name='$name'");
                if(mysql_query($sql)==false)
                {
                echo "<script>alert('ERROR!');window.location='record_select.php';</script>";
                 
                }
        }
        else
        {
                if($composer != null )
                {
                $sql = "select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.composer='$composer'";
                $data=mysql_query("select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.composer='$composer'");
                        if(mysql_query($sql)==false)
                        {
                        echo "<script>alert('ERROR!');window.location='record_select.php';</script>";
                         
                        }
                }
                else
                {
                       if($lyricist != null )
                        {
                        $sql = "select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.lyricist='$lyricist'";
                        $data=mysql_query("select * from record_table,singer_table where record_table.sid = singer_table.ID and record_table.lyricist='$lyricist'");
                                if(mysql_query($sql)==false)
                                {
                                echo "<script>alert('ERROR!');window.location='record_select.php';</script>";
                                 
                                }
                        }
                        else
                        {
                        echo "<script>alert('請輸入搜尋項目!');window.location='record_select.php';</script>";
                        }                       
                }
        }
}
?>

<html>
        <head>
                <meta charset="utf-8">
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                <link rel="stylesheet" type="text/css" href="HomeStyle.css">
                <script>
                        $(function(){                   
                        <?php 
                                error_reporting(0);
                                if($_SESSION['username'] != null){
                                        echo '$("#btn_register").css("display","none");';
                                        echo '$("#btn_login").css("display","none");';
                                }                               
                        ?>
                        });
                        
                        function Event(n, e) {
                                if (e == "true") {
                                        document.getElementById(n.id).style.overflow = "visible";
                                } else {
                                        document.getElementById(n.id).style.overflow = "hidden";
                                }
                        }
                </script>
        </head>

        <body>
        <div id="frame"> 
                <div id="wrapper">

                        <div id="title">
                                <img id="name" style="width:290px;height:200px;margin-left:5px;" src="banner_logo.png">
            <ul id="apDiv1"  onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
                    <li>
                        <a id="apDiv1_1" href="record_update.html">Update</a>
                    </li>                   
                </ul>
                <ul id="apDiv2" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
                    <li>
                    <a id="apDiv2_1" href="record_insert.html">Insert</a>
                    
                </ul>
                <ul id="apDiv3" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">                 
                    <li>
                    <a id="apDiv3_1" href="record_select.php">Select</a>    
                    </li>

                </ul>
                <ul id="apDiv4" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
                    <li>
                    <a id="apDiv4_1" href="">Record</a>                     
                </ul>
                <ul id="apDiv5">
                    <li>
                    <a id="apDiv5_1" href="home.php">Home</a>
                    </li>                   
                </ul>
                        </div>
        <br>
        <br>
        <table width="1000" border="1">
                <tr style="background-color:#C4E1FF;">
                <td >編號</td>
                <td >ID</td>
                <td >姓名</td>
                <td >作曲者</td>
                <td >作詞人</td>
                <td >日期</td>
                <td >成本</td>
                <td>歌手ID</td>
                <td >歌手姓名</td>
                <td >合約開始</td>
                <td >合約結束</td>
                <td >合約數目</td>
                <td >經紀人名稱</td>
                <td>經紀人電話</td>                
                </tr>
                <?php
                for($i=1;$i<=mysql_num_rows($data);$i++){
                $rs=mysql_fetch_row($data);
                ?>
                <tr>
                <td><?php echo $rs[0]?></td>
                <td><?php echo $rs[1]?></td>
                <td><?php echo $rs[2]?></td>
                <td><?php echo $rs[3]?></td>
                <td><?php echo $rs[4]?></td>
                <td><?php echo $rs[5]?></td>
                <td><?php echo $rs[6]?></td>
                <td><?php echo $rs[7]?></td>
                <td><?php echo $rs[10]?></td>
                <td><?php echo $rs[11]?></td>
                <td><?php echo $rs[12]?></td>
                <td><?php echo $rs[13]?></td>
                <td><?php echo $rs[14]?></td>
                <td><?php echo $rs[15]?></td>
                </tr>
  
                <?php
                }
                ?>
                </table>
                </div>

        </body>
</html>
