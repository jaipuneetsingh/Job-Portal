<?php
ob_start();
include('conn.php');
include('meta.php');
include('stu_header.php');
session_start();
$stu_id=$_SESSION['user_id'];
$resume=$_FILES['resume'];

//update
if($_REQUEST['sub'])
{
	extract($_POST);	
	$experience1=implode('-',$experience);
	$query="update career_detail set industry='$industry', 	function='$function', 	key_skills='$key_skills', 	experience='$experience1', 	resume='$resume[name]' where stu_id='$stu_id'";

	mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		$msg="Your career Details has been updated";
		header("location:main.php?msg=$msg");
	}
	else
		echo "error".mysql_error();
}

$res=mysql_query("select * from career_detail where stu_id='$stu_id'");
$row=mysql_fetch_row($res);
$ex=explode('-',$row[4]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="infoform">
<h1>Career Details</h1>

<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>
    <label for="industry">Current / Preferred industry</label>
    <select name="industry" id="industry" class="field">
    <option value="Automotive">Automotive</option>
    <option value="Banking">Banking</option>
    <option value="chemicals">chemicals</option>
    <option value="Insurance">Insurance</option>
    <option value="IT">IT</option>
    </select>
  </p>
  <p>
    <label for="function">Function</label>
    <input type="text" name="function" id="function" class="field" value="<?php echo $row[2];  ?>" >
  </p>
  <p>
    <label for="key_skills">Key skills</label>
    <input type="text" name="key_skills" id="key_skills" class="field" value="<?php echo $row[3];  ?>" >
  </p>
  <p>
    <label for="experience[]">Total experience</label>
    <select name="experience[]" id="experience[]" class="field">
    <?php
	for($a=0;$a<=50;$a++)
	{
		if($a==$ex[0])
			echo "<option value=$a selected>$a</option>";
		else
			echo "<option value=$a>$a</option>";
	}
	
	?>
    </select> Years
    <select name="experience[]" id="experience[]">
    <?php
	for($a=0;$a<=11;$a++)
	{
		if($a==$ex[1])
			echo "<option value=$a selected>$a</option>";
		else
			echo "<option value=$a>$a</option>";
	}
	?>
    </select> Months
  </p>
  <p>
    <label for="resume">Upload Resume</label>
    <input type="file" name="resume" id="resume" class="field" />
  </p>
  <br />
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Update" />
  </p>
      <input type="hidden" name="stu_id" id="stu_id" value="<?php echo $stu_id;  ?>" />

</form>
<p>&nbsp;</p>



</div>

</body>
</html>

<?php
include('footer.php');

?>