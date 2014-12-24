<?php 
include('chk_session.php');
include("conn.php");
		  
		  $userid=$_SESSION["auser_name"];
		  $user_id=$_REQUEST['user_id'];
		  $cpwd=$_REQUEST['pwd'];
		  $act=$_REQUEST['act'];
		  if($_REQUEST['Submit'])
		  {
				$query="update  personal_detail set password='$cpwd' where id='$user_id'";
				if($result=mysql_query($query))
				{
					$st="Password Changed Successfully";
				}
				else
				{
					$st="Some Problem on Database,Please try again";
				}
		   }

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/styles.css">
<title>Admin Panel</title>

<script language="JavaScript">
function validation()
{
	if(document.frm.user_id.value=="")
	{
		alert("Please select the User Name");
		document.frm.user_id.focus();
		return false;
	}
	else if(document.frm.pwd.value=="")
	{
		alert("Please enter the New password");
		document.frm.pwd.focus();
		return false;
	}
	else if(document.frm.repwd.value=="")
	{
		alert("Please enter the Confirm password");
		document.frm.cpwd.focus();
		return false;
	}
	else if(document.frm.pwd.value!= document.frm.repwd.value)
	{
		document.frm.pwd.value="";
		document.frm.repwd.value="";
		document.frm.pwd.focus();
		alert ("Password Mismatch")
		return false;
	}
	else
	return true;
}
</script>
			
					
			<script language="javascript">
function onload()
{
document.frm.pwd.focus();
}

</script>
</head>

<body>
	
 <form id="frm" name="frm" action="changepassword.php" method="post">
			
  <table width="771" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#ffffFF" >
    <tr> 
      <td colspan="2"><?php include('_header.php'); ?></td>
    </tr>
    <tr> 
      <td colspan="2"><?php include('menu_top.php'); ?></td>
    </tr>
    
    <tr> 
      <td width="169" height="300" bgcolor="#FFAB2D" align="center" valign="top"><?php  include('menu_left.php');?> </td>
      <td width="602" align="center" valign="top">
	  <br>
	  <table width="80%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099FF">
          <tr> 
            <td> <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td height="30" align="left" valign="middle" class="subheading"> 
                    &nbsp;Change Password &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Fields 
                    marked with(<span class="subcontent"><font color="#FF0000">*</font></span>) 
                    must entered </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"> <table width="64%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td height="20" colspan="2" align="center" valign="middle" class="msgcontent">
						<?php echo $st?></td>
                      </tr>
                      <tr> 
                        <td height="25" align="left" valign="middle" class="subcontent"><font color="#FF0000">*</font>User Name </td>
                        <td height="25" align="left" valign="middle">
                        <select name="user_id" class="content" id="user_id">
                        <option value="" selected="selected">Select</option>
                        <?php
						$sql="select *  from personal_detail  order by username";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result))
						{
						?>
                        <option value="<?php echo $row["id"]?>"><?php echo $row["username"]?></option>
                        <?php
						}
						?>
                        </select></td>
                      </tr>
                      <tr> 
                        <td height="25" align="left" valign="middle" class="subcontent">
                        <font color="#FF0000">*</font>New Password : </td>
                        <td align="left" valign="middle"> <input name="pwd" type="password" class="content"></td>
                      </tr>
                      <tr> 
                        <td height="25" align="left" valign="middle" class="subcontent">
                        <font color="#FF0000">*</font>Confirm Password : </td>
                        <td align="left" valign="middle"> <input name="repwd" type="password" class="content"></td>
                      </tr>
                      <tr> 
                      	<td></td>
                        <td><br>
                        <input type="submit" name="Submit" value="Submit"  class="buttonSubmit"onClick="return validation()">
                        <input type="reset" name="reset" value="Reset"  class="buttonSubmit">
                        </td>
                      </tr>
                      <tr> 
                        <td height="15" colspan="2"></td>
                        
                      </tr>
                    </table>
                    </td>
                    
                </tr>
              </table>
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
