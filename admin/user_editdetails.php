<?php
include("chk_session.php");
include("conn.php");
include("func.php");

$user_id=$_REQUEST["user_id"];
if($user_id=="")
{
			echo "<script language='Javascript'>";
			echo "location.href='manageuser.php'";
			echo "</script>";
}

$query=mysql_query("select * from userdetails where user_id=$user_id",$conn);
if($row=mysql_fetch_array($query))
{
$fname=$row["first_name"];
$lname=$row["last_name"];
$email=$row["email"];
$uname=$row["user_name"];
$status=$row["status"];
$utype=$row["user_type"];
$password=$row["password"];
$user_type=$row["user_type"];
}
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="includes/styles.css">
<script type="text/javascript" src="includes/user_editdetail_validations.js"></script>
<title>Admin Panel</title>


</head>
<body >
<form id="frm" name="frm" action="user_action.php" method="post" onLoad="onload()">
  <table width="771" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#ffffFF">
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
            	Edit User Details &nbsp;&nbsp; [ Fields marked with(<font color="#FF0000">*</font>)must be entered ]</td>
            	</tr>
            
            	<tr>
            	<td align="center" valign="top">
            		<table width="350" border="0" cellpadding="0" cellspacing="0">
            		
                    <tr valign="baseline">
					<td height="10" colspan="2" align="center" valign="middle" nowrap="nowrap" class="msgcontent">
                        <?php
                     		 admin_manage_user_msgs();
                        ?>
					</td>
					</tr>
                   
                    <tr valign="baseline">
                    <td width="150" height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>First Name :</td>
					<td width="200" height="25" align="left" valign="middle">
                    <input name="fname" type="text" class="content" value="<?php echo $fname?>"  maxlength="25"/>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Last Name </td>
					<td height="25" align="left" valign="middle">
                    <input name="lname" type="text" class="content" value="<?php echo $lname?>"  maxlength="25"/></td>
                    </tr>
                    
					<tr valign="baseline">
					<td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>User Name :</td>
					<td height="25" align="left" valign="middle">
                    <input name="uname" type="text" class="content" value="<?php echo $uname?>" readonly="true" />
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Email :</td>
                    <td height="25" align="left" valign="middle">
                    <input name="email" type="text"  maxlength="50" class="content" value="<?php echo $email?>" 
                    onBlur="checkEmail();"/></td>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Password</td>
                    <td height="25" align="left" valign="middle">
                    <input name="pwd" type="password" maxlength="25" class="content" id="pwd" value="<?php echo $password?>" /></td>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Re-Type Password</td>
                    <td height="25" align="left" valign="middle">
                    <input name="repwd" type="password" maxlength="25" class="content" id="repwd" value="<?php echo $password?>" />
                    </td></tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>User Type </td>
                    <td height="25" align="left" valign="middle">
                    <select name="utype" size="1" class="content" id="utype" >
                    <?php
					if($user_type=="user")
					{
						echo "<option value='user' selected='selected' >User</option>";
						echo "<option value='admin' >Admin</option>";
					}
					else if($user_type=="admin")
					{
						echo "<option value='user'>User</option>";
						echo "<option value='admin' selected='selected' >Admin</option>";
					}
					else
					{
						echo "<option value='user'>User</option>";
						echo "<option value='admin'>Admin</option>";
					}
					?>
                    </select></td></tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="middle" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Status :</td>
                    <td height="25" align="left" valign="middle"> <select name="status" size="1" class="content">
                    <?php
					if($status=="1")
					{
						echo "<option value='1' selected='selected' >Active</option>";
						echo "<option value='0' >Inactive</option>";
					}
					else
					{
						echo "<option value='1' >Active</option>";
						echo "<option value='0' selected='selected' >Deactive</option>";
					}
					?>
                    </select></td></tr>
                    
                    <tr valign="baseline">
                    <td height="30" colspan="2" align="center" valign="middle" nowrap="nowrap">
                    <input name="sub_edit_user_detail" type="submit" class="buttonSubmit" onClick="return validation();" value="Submit" />
                    
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
  <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id?>">
</form>
</body>
</html>
