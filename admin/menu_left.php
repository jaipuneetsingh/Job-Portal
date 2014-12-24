<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover 
{
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
}
-->
</style>

<body  alink="#0099CC" vlink="#000000" >
<table width="100%" border="1" cellpadding="0" cellspacing="0" class="topmenu" >

  <tr> 
    <?php
		if($_REQUEST["col"]=="wlcm")
		$bg1="#0099FF";
		else 
		$bg1="#FFAB2D";
	?>
    <td height="46" align="center" bgcolor="<?php echo $bg1?>" > <a href="welcome.php?col=wlcm"><strong>Home</strong></a></td>
  </tr>
  
  <tr> 
    <?php
		if($_REQUEST["col"]=="adduser")
		$bg1="#0099FF";
		else 
		$bg1="#FFAB2D";
	?>
    <td height="46" align="center" bgcolor="<?php echo $bg1?>" > <a href="create_user.php?col=adduser"  ><strong>Add 
      New User</strong> </a> </td>
  </tr>
  <tr> 
    <?php
		if($_REQUEST["col"]=="mnguser")
		$bg1="#0099FF";
		else
		$bg1="#FFAB2D";
	?>
    <td height="46"align="center" bgcolor="<?php echo $bg1?>"><a href="manageuser.php?col=mnguser"><strong>Manage 
      User </strong></a></td>
  </tr>
  <tr> 
    <?php
		if($_REQUEST["col"]=="mngjob")
		$bg1="#0099FF";
		else
		$bg1="#FFAB2D";
	?>
    <td height="57"  hight="46" align="center" bgcolor="<?php echo $bg1?>" ><a href="managejobs.php?col=mngjob"><strong>Manage 
      Jobs </strong></a></td>
  </tr>
  <tr> 
    <td  height="46"  align="center" bgcolor="#FFAB2D"><a href="manage_recuter.php" ><strong>Manage Recuters</strong></a></td>
  </tr>
 
  <tr> 
    <?php
		if($_REQUEST["col"]=="addjob")
		$bg1="#0099FF";
		else
		$bg1="#FFAB2D";
	?>
    <td height="51"  hight="46" align="center" bgcolor="<?php echo $bg1?>" ><a href="addjob.php?col=addjob"><strong>Add 
      Jobs </strong></a></td>
  </tr>
 
  <tr> 
    <td  height="46"  align="center" bgcolor="#FFAB2D"><a href="adminlogin.php?cat=logout" ><strong>Logout</strong></a></td>
  </tr>
</table>
</body>
