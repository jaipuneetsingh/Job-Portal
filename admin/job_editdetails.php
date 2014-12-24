<?php
include("chk_session.php");
include("conn.php");
include("func.php");

$job_id=$_REQUEST["job_id"];
if($job_id=="")
{
			echo "<script language='Javascript'>";
			echo "location.href='manageuser.php'";
			echo "</script>";
}

$query=mysql_query("select * from jobs where id='$job_id'");
//$query1=mysql_query("select * from categories ");
if($row=mysql_fetch_array($query))
{
$title=$row["job_title"];
$description=$row["job_desc"]."\n".$row['comp_adrs'];
$email=$row["email"];
$location=$row["location"];
$company=$row["comp_name"];
//$url=$row["url"];
$to_apply=$row["to_apply"];
$status=$row["status"];
}
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="includes/styles.css">
<script type="text/javascript" src="includes/job_editdetail_validations.js"></script>
<title>Admin Panel</title>


</head>
<body >
<form id="frm" name="frm" action="job_action.php" method="GET" onLoad="onload()">
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
            	Edit Job Details &nbsp;&nbsp; [ Fields marked with(<font color="#FF0000">*</font>)must be entered ]</td>
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
                    <td width="150" height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Company Name :</td>
					<td width="200" height="25" align="left" valign="middle">
                    <input name="company" type="text" class="content" size="25" value="<?php echo $company; ?>"/>
                    </tr>
                  <!--  
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Email : </td>
					<td height="25" align="left" valign="middle">
                    <input name="email" type="text" class="content" value="<?php echo $email; ?>" size="25" 
                    onBlur="checkEmail();" /></td>
                    </tr>
                    -->
					<tr valign="baseline">
					<!--<td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Url :</td>
					<td height="25" align="left" valign="middle">
                    <input name="url" type="text" class="content" size="25" value="<?php echo $url; ?>" />
                    </tr>
                    -->
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Job title :</td>
                    <td height="25" align="left" valign="middle">
                    <input name="title" type="text" class="content" size="25" value="<?php echo $title; ?>" /></td>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Location :</td>
                    <td height="25" align="left" valign="middle">
                    <input name="location" type="text" class="content" value="<?php echo $location; ?>" size="25" /></td>
                    </tr>
                    
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Description :</td>
                    <td height="25" align="left" valign="middle">
                    <textarea name="description" class="content" cols="35" rows="5" ><?php echo $description; ?></textarea>
                    </td></tr>
                    
                    <!--<tr>
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>How to apply :</td>
                    <td height="25" align="left" valign="middle">
                    <textarea name="to_apply" class="content" cols="35" rows="3"><?php echo $to_apply; ?></textarea>
                    </td></tr>-->
                    
                    
                    <tr>
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent"><br>
                    <font color="#FF0000">*</font>categories :<br></td>
                    <td height="25" align="left" valign="middle"><br>
					<?php
						categories();
					?><br>
                    </td></tr>
                    
                                     
                    <tr valign="baseline">
                    <td height="25" align="left" valign="top" nowrap="nowrap" class="subcontent">
                    <font color="#FF0000">*</font>Status :</td>
                    <td height="25" align="left" valign="middle"> 
                    <select name="status" size="1" class="content">
                    <?php
					if($status=="1")
					{
						echo "<option value='1' selected='selected' >Published</option>";
						echo "<option value='0' >Unpublished</option>";
					}
					else
					{
						echo "<option value='1' >Published</option>";
						echo "<option value='0' selected='selected' >Unpublished</option>";
					}
					?>
                    </select></td></tr>
                    
                    <tr valign="baseline">
                    <td height="30" colspan="2" align="center" valign="middle" nowrap="nowrap">
                    <input name="sub_edit_job_detail" type="submit" class="buttonSubmit" onClick="return validation();" value="Submit" />
                    
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
  <input type="hidden" id="job_id" name="job_id" value="<?php echo $job_id?>">
</form>

</body>
</html>
