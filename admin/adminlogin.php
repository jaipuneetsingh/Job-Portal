<?php
session_start();
include("conn.php");
include("func.php");


?>


<script language="javascript">
function home()
{
   	document.login.action="../index.php";
   	document.login.submit();
}
</script>


<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/styles.css" >
<title>Admin Panel</title>
</head>
<body>
<form action="adminlogin.php" method="POST" name="login" id="login">
<table width="100%" height="153" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
    <td>
		<?php include('_header.php'); ?>
	</td>
    </tr>
    
	<tr height="5px">
	<td bgcolor="#FFAC1B">&nbsp;</td>
	</tr>
      <tr>
        <td width="780" height="400" align="center" valign="top"> 
			
		  <div align="right">
		    <table width="80" border="0">
              <tr>
              <td>
                  <div id="divHome" align="right">
                     <input type="button" name="submit2" value="Home" class="buttonSubmit" onClick="home();" />
                  </div>
              </td>
              </tr>
            </table>
		    <br>
		    <br>
		    <br>
	      </div>
		  <table width="50%" border="0">
          <tr>
           
            <td><div align="center">&nbsp;&nbsp;&nbsp;<font color="#000099"><strong>Admin 
                Login</strong></font></div></td>
          </tr>
        </table> 
        <table width="405" height="189" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="112" rowspan="4" align="center" valign="middle" class="msgcontent"><img src="images/Administrator-icon.png" width="150" height="150"></td>
            <td height="32" colspan="2" align="left" valign="middle" class="msgcontent">
			<?php login_check(); ?></td>
          </tr>
          <tr>
            <td width="112" height="26" align="left" valign="middle" class="subcontent"> 
              User Name : </td>
            <td width="181" align="left" valign="middle">
            <input name="user" type="text" class="content" id ="user" onClick="check();" />	</td>
          </tr>
          
          <tr>
            <td height="35" align="left" valign="middle" class="subcontent">
            Password : </td>
            <td align="left" valign="middle">
            <input name="pwd" type="password" class="content"  id="pwd"/>	
            </td>
          </tr>
        
          <tr> 
            <td height="32" colspan="2" align="center" valign="middle" class="row1" ><input name="sub_login" type="submit" class="buttonSubmit" id="label4" value="Sign In" /></td>
          </tr>
        </table>
            
        </td>
      </tr>

    <tr height="25px"> 
    <td colspan="2" bgcolor="#FFAC1B">
    <br><?php include('_footer.php'); ?><br></td>
  	</tr>
</table> 
</form>
</body>
</html>
