<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
if($_REQUEST['sub'])
{
	extract($_POST);	
	$query="select * from personal_detail where email='$unm' and password='$pass'";
	$res=mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		$row=mysql_fetch_row($res);
		$_SESSION['recute_id']=$row[0];
		$_SESSION['recute_unm']=$row[1];
		$_SESSION['type']=$row[2];
		header("location:recute_main.php");
	}
	else
	{
		$feedback="Username Or Password is Wrong";	
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
<p>
<?php if(!empty($feedback)) echo "<span class=error>$feedback</span>"; ?>
</p>
<div class="infoform">
<form action="" method="post" name="form1">
<p>
  <label for="unm">Username</label>
  <input type="text" name="unm" id="unm" class="field" />
</p>
<label for="pass">Password</label>
<input type="password" name="pass" id="pass" class="field" />
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