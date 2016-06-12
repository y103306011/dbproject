<?php session_start(); ?>
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
						<a id="apDiv1_1" href="h_employee_update.html">Update</a>
					</li>					
				</ul>
				<ul id="apDiv2" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv2_1" href="h_employee_insert.html">Insert</a>
					
				</ul>
				<ul id="apDiv3" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">					
					<li>
					<a id="apDiv3_1" href="h_employee_select.php">Select</a>	
					</li>

				</ul>
				<ul id="apDiv4" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv4_1" href="">Employee</a>						
					</li>
					<li>				
					<a class="bar" href="h_employee_select.php">Hourly</a>				
					</li>		
					<li>				
					<a class="bar" href="s_employee_select.php">Salaried</a>					
					</li>
				</ul>
				<ul id="apDiv5">
					<li>
					<a id="apDiv5_1" href="home.php">Home</a>
					</li>					
				</ul>
			</div>
<?php

				include ("h_employee_select2.php");
				
?>
			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '<a style="position:absolute;margin-left:930px;margin-top:-887px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
		</div>

	</body>
</html>
