<table width="100%" height="24" border="0" cellpadding="0" cellspacing="0" class="topmenu">
	<tr bgcolor="#FFAC1B">
        <td width="10%" bgcolor="#FFAC1B" class="subheading" >&nbsp;Welcome&nbsp;&nbsp; </td> 
		<td width="5%" align="center" bgcolor="#FFAB2D">
        <a href="create_userdetails.php"></a><font color="#FFFFFF"><strong>
		<?php echo ucfirst($_SESSION["auser_name"]); ?></strong></font></td>
          
    <td width="55%" height="24" align="center" bgcolor="#FFAB2D"></td>

    <td width="20%" align="center" bgcolor="FFAB2D" ><a href="changepassword.php?col=chngpas">Change Password</a></td>

    <td width="10%" align="center" bgcolor="FFAB2D" ><a href="adminlogin.php?cat=logout">Logout</a></td>
   
  </tr> 
</table>
