<?php 
include('chk_session.php');
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="includes/styles.css">
		<title>Admin Panel</title>
	    
		<style type="text/css">
		<!--
		.style1
		{
			color: #0000FF;
			font-weight: bold;
		}
		-->
		</style>
	</head>
	
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr> 
    <td colspan="2"><?php include('_header.php');?></td>
  </tr>
  
  <tr> 
    <td colspan="2"><?php include('menu_top.php');?></td>
  </tr>
  
  <tr> 
		<td width="169" bgcolor="#FFAC1B" valign="top"><?php  include('menu_left.php');?></td>
		<td width="602" height="137" align="center" valign="middle">
      	<span class="style1">Welcome to Admin Panel </span></td>
  </tr>
  
  <tr height="25px"> 
    <td colspan="2" bgcolor="#FFAC1B"><br><?php include('_footer.php'); ?><br></td>
  </tr>
  
</table>

</body>
</html>
