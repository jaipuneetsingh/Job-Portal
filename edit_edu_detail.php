<?php
ob_start();
include('conn.php');
include('meta.php');
include('stu_header.php');
session_start();
$stu_id=$_SESSION['user_id'];

//update
if($_REQUEST['sub'])
{
	extract($_POST);	
	$fav1=implode(',',$fav_sub);
	$passout1=implode('-',$passout);
	$passout3=implode('-',$passout2);

	$query="update edu_detail set high_qual='$quali', 	type='$type', 	fav_subjects='$fav1', 	course='$course', 	branch='$branch', 	state='$state', 	institute='$institute', 	university='$uni', 	passout='$passout1', 	marks='$marks1', 	passout_10='$passout3', 	marks_10='$marks', 	school_10='$school', 	board='$board' where stu_id='$user_id'";	
	
	mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		$msg="Your Educational Details has been updated";
		header("location:main.php?msg=$msg");
	}
	else
		echo "error".mysql_error();
}

$res=mysql_query("select * from edu_detail where stu_id='$stu_id'");
$row=mysql_fetch_row($res);
$fav1=explode(',',$row[3]);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="infoform">
<h1>Educational Details</h1>
<form name="form1" method="post" action="">
  <h3>Highest Qualification Details</h3><hr /><br />
  <p>
    <label for="quali">Highest Qualification</label>
    <select name="quali" id="quali" class="field">
      <option value="">--Education Qualification--</option>
      <option value="PG/PG Diploma">PG/PG Diploma</option>
      <option value="Integrated PG">Integrated PG</option>
      <option value="Graduation">Graduation</option>
      <option value="Diploma">Diploma</option>
      <option value="Certificate Course">Certificate Course</option>
    </select>
  </p>
  <p>
  <label for="type">Type</label>

      <input type="radio" name="type" value="Full Time" id="type_0" class="field" <?php if($row[2]=='Full Time') echo "checked"; ?> >
      Full Time
   
    
      <input type="radio" name="type" value="Part Time" id="type_1" <?php if($row[2]=='Part Time') echo "checked"; ?> >
      Part Time
   
      <input type="radio" name="type" value="Correspondence" id="type_2" <?php if($row[2]=='Correspondence') echo "checked"; ?> >
    Correspondence</p>
  <p>
    <label for="fav_sub[]">Your favorite subjects</label>
    <input type="text" name="fav_sub[]" id="fav_sub[]" class="field" value="<?php echo $fav1[0];  ?>"/>
    <input type="text" name="fav_sub[]" id="fav_sub[]" value="<?php echo $fav1[1];  ?>" />
  </p>
  <br />
  <h3><strong>Graduation / Diploma Certificate Course Details</strong></h3>
  <hr /><br />
  <p>
    <label for="course">Your Course </label>
    <input type="text" name="course" id="course" class="field" value="<?php echo $row[4];  ?>" />
  </p>
  <p>
    <label for="branch">Branch of Study</label>
    <input type="text" name="branch" id="branch"class="field" value="<?php echo $row[5];  ?>" />
  </p>
  <p>
    <label for="state">State</label>
    <input type="text" name="state" id="state"class="field" value="<?php echo $row[6];  ?>" />
  </p>
  <p>
    <label for="institute">Institute</label>
    <input type="text" name="institute" id="institute"class="field" value="<?php echo $row[7];  ?>" />
  </p>
  <p>
    <label for="uni">University </label>
    <input type="text" name="uni" id="uni"class="field" value="<?php echo $row[8];  ?>" />
  </p>
  <p>
    <label for="passout">Passout</label>
    <select name="passout[]2" id="passout[]2" class="field">
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>
    <select name="passout[]" id="passout[]">
      <?php
	for($a=1998;$a<=2020;$a++)
	{
		echo "<option value=$a>$a</option>";
	}
	
	?>
    </select>
  </p>
  <p>
    <label for="marks">Aggregate Marks</label>
    <label for="marks"></label>
    <input type="text" name="marks2" id="marks2" class="field" value="<?php echo $row[10];  ?>" />
  </p>
<br />
<h3>Class 10th Details</h3>
  <hr />
  <p>&nbsp;</p>
  <p>
    <label for="passout">Passout</label>
    <select name="passout2[]" id="passout2[]" class="field">
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>
    <select name="passout2[]" id="passout2[]">
      <?php
	for($a=1998;$a<=2020;$a++)
	{
		echo "<option value=$a>$a</option>";
	}
	
	?>
    </select>
    </p>
  <p>
    <label for="marks">Aggregate Marks</label>
    <input type="text" name="marks" id="marks" class="field" value="<?php echo $row[12];  ?>" />
  </p>
  <p>
    <label for="school">School</label>
    <input type="text" name="school" id="school" class="field" value="<?php echo $row[13];  ?>" />
  </p>
  <p>
    <label for="board">Board</label>
    <input type="text" name="board" id="board" class="field" value="<?php echo $row[14];  ?>" />
  </p>
  <br />
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Update" />
  </p>
</form>
</div>
</body>
</html>


<?php
include('footer.php');

?>