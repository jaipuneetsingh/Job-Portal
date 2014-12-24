<?php
	include("conn.php");
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/JavaScript" src="jquery.js"></script>
<script type="text/javascript">

// Popup window code
function open_div() {
	document.getElementById("open").style.display='block';
	
}
function close_div() {
	document.getElementById("open").style.display='none';
	
}
</script>
</head>

<body>

<div class="meta">
		<div class="metalinks">
			<a href="index.php"><img src="images/meta1.gif" title="Home" alt="Home" width="15" height="14" /></a>
			<a onclick="javascript:open_div();"><img src="images/meta2.gif" alt="Search" title="Search" style="cursor:pointer; border:#CCCCCC" width="17" height="14" /></a><a href="#"><img src="images/meta4.gif" alt="" title="Messages" width="15" height="14" /></a>
			
	<div id="open" style="border-radius:6px 6px 6px;background-color:#4B4A4E;float:none;height:70px;width:254px;position:absolute;z-index:1;margin:8px 0 0 -42px; display:none; border:0px solid #000">
	<a href="javascript:close_div();">

<img src="images/fancy_close.png" style="float:left; margin:-5px;" /></a>
<br> <br>

	<form name="form1"action="http://www.google.com/search" method="get" >
		<input type="hidden" name="sitesearch" value="www.google.co.in" />
	<input type="text" name="search" placeholder="Enter Keyword for Search" style="width:170px;" onfocus="if(this.value == '';) { this.value = ''; }" onblur="if(this.value=='';) { this.value=''; }" id="txt" />
<input type="image" name="submit"  src="images/meta2.gif" style="font-size: 12px; height: 22px; margin-bottom:-7px; width: 24px;"  /></br>
<input type="submit" value="Search" name="submit" style="background:#F00;color:white; margin-top:8px; border-radius:6px 6px 6px;box-shadow:3px 3px 3px #CCCCCC;" onclick="ValidateEmail(document.form1.Email)" /></form>



</div>
			
  </div>
		
        <?php 
		$_SESSION['user_id'];
		if(empty($_SESSION['user_id']))
		{
			if(empty($_SESSION['recute_id']))
				echo "<p>Recruiters: <a href=recute_login.php>Log in</a></p>";
			else
				echo "<p><b>".$_SESSION['recute_unm']."</b>  <a href=index.php?con=recute_logout>LogOut</a></p>";
		}
		?>																																															
</div>