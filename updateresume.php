<?php
ob_start();
include("conn.php");
include("meta.php");
include("stu_header.php");
session_start();
$stu_id=$_SESSION['user_id'];
if($_REQUEST['sub'])
{
	$resume=$_FILES['resume'];
	$query="update career_detail set resume='$stu_id.docx'";
	mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		move_uploaded_file($resume['tmp_name'],"userresume/".$stu_id.".docx");
		header("location:main.php?msg=Resume has been uploaded");	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="infoform">
<form action="" method="post" enctype="multipart/form-data" name="form1">
<p>
    <label for="resume">Upload Resume</label>
    <input type="file" name="resume" id="resume" class="field" />
</p>
<br />
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Submit" />
  </p>
</form>
</div>
</body>
</html>
<?php
include("footer.php");
?>