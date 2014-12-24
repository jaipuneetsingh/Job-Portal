<?php 

include("chk_session.php");
include("conn.php");
include("func.php");

if($_REQUEST['del'])
{
	admin_manage_user_delete();
}
if($_REQUEST['act'])
{
	admin_manage_user_activate();
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/styles.css">
<title>Admin Panel</title>
</head>

<body>
<form id="frm" name="frm" action="user_action.php" method="post">
	
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#ffffFF">
  <tr> 
    <td colspan="2"><?php include('_header.php');?></td>
  </tr>
  
  <tr> 
    <td colspan="2"><?php include('menu_top.php');?></td>
  </tr>
  
  <tr> 
		<td width="169" bgcolor="#FFAC1B" valign="top"><?php  include('menu_left.php');?></td></td>
		<td width="602" height="137" align="center" valign="top">
      	<br>
        <table width="95%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099FF">
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="16" align="left" valign="middle" class="subheading">&nbsp; Manage User Details </td>
                </tr>
                <tr>
                  <td height="15" align="center" valign="top" class="msgcontent">
                  <?php
                        admin_manage_user_msgs();
				  ?>
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top"><table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="21%" height="22" align="left" valign="middle" class="grdheading">&nbsp;&nbsp;Name</td>
                        <td width="18%" align="left" valign="middle" class="grdheading">User 
                        Name </td>
                        <td width="13%" align="center" valign="middle" class="grdheading" >Status</td>
                        <!--<td width="12%" align="left" valign="middle" class="grdheading" >&nbsp;&nbsp;Type</td>-->
                        <td width="36%" align="left" valign="middle" class="grdheading">Action</td>
                      </tr>
        
					<?php
						admin_manage_user_show();
					?>
                      <tr>
                        <td height="10" colspan="5"></td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr height="25px"> 
      <td colspan="2" bgcolor="#FFAC1B"><br><?php include('_footer.php'); ?><br></td>
    </tr>
  </table>
</form>
	</body>
</html>
