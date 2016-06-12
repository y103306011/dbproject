<?php session_start(); ?>
<?php
error_reporting(0);
if ($_SESSION['username'] == null){
	echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 	
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="homeStyle.css">
		<script>
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
						<a id="apDiv1_1" href="record_select.php">Record</a>
					</li>					
				</ul>
				<ul id="apDiv2" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv2_1" href="retailer_select.php">Retailer</a>
					
				</ul>
				<ul id="apDiv3" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">					
					<li>
					<a id="apDiv3_1" href="singer_select.php">Singer</a>	
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
				<p style='font-size:40px;font-style: italic;font-weight:bold ;color: #46A3FF;'>
				&nbsp&nbsp Welcome!					
				</p>				
				<?php
				include ("member.php");
				?>
				<input type="button" onclick="location.href='update.php'" value="Edit" id="btn_Edit" >
		</div>
	</div>
	</body>
</html>
