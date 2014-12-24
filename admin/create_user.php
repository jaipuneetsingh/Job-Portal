<?php 
include('chk_session.php');

include('func.php');
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="includes/styles.css">
<script type="text/javascript" src="includes/user_editdetail_validations.js"></script>
<title>Admin Panel</title>


</head>
<body>
<form id="frm" name="frm" action="user_action.php" method="post"  class="onload">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#ffffFF">
    <tr>
      <td colspan="2"><?php include('_header.php');?></td>
    </tr>
    <tr>
      <td colspan="2"><?php include('menu_top.php');?></td>
    </tr>

	<tr bgcolor="#FFAC1B" >
      <td width="169" align="center" valign="top"><?php include('menu_left.php');?></td>
      <td width="602" align="center" valign="top">
	  
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
          <tr>
            <td>
            	<table width="100%" border="0" cellpadding="0" cellspacing="0">
            	
                <tr>
            	<td height="30" align="center" valign="middle" class="subheading">
            &nbsp;Create User Details &nbsp;&nbsp;[ Fields marked with(<font color="#FF0000">*</font>)must be entered ]</td>
         		</tr>
                
                <tr>
                <td align="center"> 
					<table width="350" border="0" cellpadding="0" cellspacing="0">
                    
                    <tr valign="baseline">
					<td height="10" colspan="2" align="center" nowrap="nowrap" valign="middle"  class="msgcontent">
                        <?php
                     		 admin_manage_user_msgs();
                        ?>
					</td>
					</tr>
                   
                    <tr valign="baseline">
                    <td width="150" height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>First Name :</td>
					<td width="200" height="25" align="left" valign="middle">
                    <input name="fname" type="text" class="content" value="" maxlength="25"/>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap"  class="subcontent">
                    <font color="#FF0000">*</font>Last Name </td>
					<td height="25" align="left" valign="middle">
                    <input name="lname" type="text" class="content" value="" maxlength="25"/></td>
                    </tr>
                    
					<tr valign="baseline">
					<td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>User Name :</td>
					<td height="25" align="left" valign="middle">
                    <input name="uname" type="text" class="content" value="" maxlength="25"/>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Email :</td>
                    <td height="25" align="left" valign="middle">
                    <input name="email" id="email" type="text" class="content" maxlength="50" value="" onBlur="checkEmail(this.id);"/>
                    </td></tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Password</td>
                    <td height="25" align="left" valign="middle">
                    <input name="pwd" type="password" class="content" id="pwd" value=""  maxlength="25"/></td>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" class="subcontent"  nowrap="nowrap">
                    <font color="#FF0000">*</font>Re-Type Password</td>
                    <td height="25" align="left" valign="middle">
                    <input name="repwd" type="password" class="content" id="repwd" value=""  maxlength="25"/>
                    </td></tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>User Type </td>
                    <td height="25" align="left" valign="middle">
                    <select name="utype" size="1" class="content" id="utype" >
                    <option value='user' selected='selected' >User</option>";
					<option value='admin' >Admin</option>";
					</select></td></tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top"  class="subcontent">
                    <font color="#FF0000">*</font>Status :</td>
                    <td height="25" align="left" valign="middle">
                    <select name="status" size="1" class="content">
                    <option value='1' selected='selected' >Active</option>";
					<option value='0' >Inactive</option>";
					</select></td></tr>
                    
                    <tr valign="baseline">
                    <td height="30" colspan="2" align="center" valign="middle" >
                    <input name="sub_add_newuser" type="submit" class="buttonSubmit" onClick="return validation();" value="Submit" />
                    
                    <input type="reset" name="Reset" value="Reset" class="buttonSubmit" onClick="return getconfirm('Do you Want to Reset the Record?');" >

                    <input type="button" name="back" value="Back" class="buttonSubmit" onClick="return goback();" >
                     </td></tr>
                    
                    <tr valign="baseline">
                    <td height="5" colspan="2" align="center" valign="middle" nowrap="nowrap"></td></tr>
                    </table>
				</td></tr>
                
                </table>
			</td></tr>
            </table>
		</td></tr>
        <tr height="25px">
        <td colspan="2" bgcolor="#FFAC1B"><br><?php include('_footer.php'); ?><br></td>
	</tr>
  </table>
      

</form>
</body>
</html>
