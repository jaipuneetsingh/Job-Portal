<?php
include('conn.php');
include('chk_session.php');
include('func.php');

if($_REQUEST['act'])
{
	admin_manage_job_action();
}
?>

<html>
<head>
<title>Manage Jobs</title>
<link rel="stylesheet" type="text/css" href="includes/styles.css">

</head>
<body bgcolor="#ffffFF">
<form action="showupdate_action.php" method="post" name="frm" id="frm">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr> 
    <td colspan="2"><?php include('_header.php');?></td>
  </tr>
  
  <tr> 
    <td colspan="2"><?php include('menu_top.php');?></td>
  </tr>
  
  <tr> 
		<td width="169" bgcolor="#FFAC1B" valign="top"><?php  include('menu_left.php');?></td>
	    <td align="center" valign="top" bgcolor="#FFFFFF" bordercolor="#00FF00">
		
        <table width="100%" height="104"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#0099FF" bgcolor="#FFFFFF">
        
        <tr>
			<td class="subheading">&nbsp;&nbsp;&nbsp;&nbsp;Manage Shows Details</td>
		</tr>
        <tr>
            <td height="15" align="center" valign="top" class="msgcontent">
            <?php admin_manage_jobs_msgs();?>
            </td>
        </tr>
        <tr>
         	<td>
          		<table width="97%" border="2" cellpadding="2" cellspacing="0" align=center>
            	<tr>
					<td width="25%" height="16" align="center" class="grdheading">Job Title</td>
					<td width="13%" align="center"  class="grdheading">Location</td>
					<td width="16%" align="center" class="grdheading">Company Names</td>
        	    <!--	<td width="15%" align="center" class="grdheading">Website</td>
        	    	<td width="15%" align="center" class="grdheading">Email</td>-->
        	    	<td width="15%" align="center" class="grdheading">Status</td>
					<!--<td width="20%" align="center" class="grdheading">Date of Creation</td>-->
                    <td align="center" class="grdheading">Edit</td>
                    <td align="center" class="grdheading">Delete</td>
            	</tr>
  				<?php admin_manage_jobs_show();	?>

				</table>
                <br>
         	</td>
		</tr>
      	</table>
      </td>
  </tr>
  
  <tr height="25px"> 
    <td colspan="2" bgcolor="#FFAC1B"><br><?php include('_footer.php'); ?><br></td>
  </tr>
  </table>
</form>
</body>
</html>