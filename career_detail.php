<?php
ob_start();
include('conn.php');
include('meta.php');
include('header.php');
$stu_id=$_REQUEST['stu_id'];
$resume=$_FILES['resume'];
//print_r($resume);
if($_REQUEST['sub'])
{
	extract($_POST);
	$experience1=implode('-',$experience);
	mysql_query("insert into career_detail values('$stu_id','$industry','$function','$key_skills','$experience1','$stu_id.docx')");
	if(mysql_affected_rows()>0)
	{
		move_uploaded_file($resume['tmp_name'],"userresume/".$stu_id.".docx");
		header("location:index.php?feedback=You are signed up. Now login to view your profile");
		
	}
		
}


?>
<script type="text/javascript">
function validate(form)
{
	if(form.industry.value =='--Current/Preferred industry--' || form.industry.value.length < 1)
		{
			alert('Please Enter the Name of your Industry');
			form.industry.focus();
			return false
		}
		
		if(form.function.value =='' || form.function.value.length < 1)
		{
			alert('Please Enter your Function');
			form.function.focus();
			return false
		}
		
		
			
			if(form.key_skills.value =='' || form.key_skills.value.length < 1)
		{
			alert('Please Enter your Key Skills !!!');
			form.key_skills.focus();
			return false;
		}
		
				
		}
</script>
<div class="infoform">
<h1>STEP 3 - Career Details</h1>
<form action='' method="post" onSubmit="return validate(this)" enctype="multipart/form-data" >

  <p>
    <label for="industry">Current / Preferred industry</label>
    <select name="industry" id="industry" class="field">
	<option name="industry">--Current/Preferred industry--</option>
    <option value="Automotive">Automotive</option>
    <option value="Banking">Banking</option>
    <option value="chemicals">chemicals</option>
    <option value="Insurance">Insurance</option>
    <option value="IT">IT</option>
    </select>
  </p>
  <p>
    <label for="function">Function</label>
    <input type="text" name="function" id="function" class="field">
  </p>
  <p>
    <label for="key_skills">Key skills</label>
    <input type="text" name="key_skills" id="key_skills" class="field">
  </p>
  <p>
    <label for="experience[]">Total experience</label>
    <select name="experience[]" id="experience[]" class="field">
    <?php
	for($a=0;$a<=50;$a++)
	{
		echo "<option value=$a>$a</option>";
	}
	
	?>
    </select> Years
    <select name="experience[]" id="experience[]">
    <?php
	for($a=0;$a<=11;$a++)
	{
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
    <input type="submit" name="sub" id="sub" value="Submit" />
  </p>
      <input type="hidden" name="stu_id" id="stu_id" value="<?php echo $stu_id;  ?>" />

</form>
<p>&nbsp;</p>



</div>


<?php
include('footer.php');

?>