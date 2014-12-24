<?php
ob_start();
include('conn.php');
include('meta.php');
include('header.php');
$stu_id=$_REQUEST['stu_id'];
extract($_POST);
if($_REQUEST['sub'])
{
	$fav_sub1=implode(',',$fav_sub);
	$passout1=implode('-',$passout);
	$passout3=implode('-',$passout2);
	mysql_query("insert into edu_detail  values('$stu_id','$quali','$type','$fav_sub1','$course','$branch','$state','$institute','$uni','$passout1','$marks1','$passout3','$marks','$school','$board')");	
	if(mysql_affected_rows()>0)
	{
		
		header("location:career_detail.php?stu_id=$stu_id");
	}
	
}
?>
<script type="text/javascript">

function validate(form)
{
	if(form.quali.value =='--Education Qualification--' || form.quali.value.length < 1)
		{
			alert('Please Enter your Qualification');
			form.quali.focus();
			return false;
		}
		
		if(form.type.value =='' || form.type.value.length < 1)
		{
			alert('Please Choose Type');
			form.type.focus();
			return false;
		}
		
		if(form.course.value =='' || form.course.value.length < 1)
		{
			alert('Please Enter your Course');
			form.course.focus();
			return false;
		}
		
				
		if(form.branch.value =='' || form.branch.value.length < 1)
		{
			alert('Please Enter your Branch !!!');
			form.branch.focus();
			return false;
		}
		
		if(form.state.value =='' || form.state.value.length < 1)
		{
			alert('Please Enter Your State !!!');
			form.state.focus();
			return false;
		}
		
		
		
		if(form.institute.value =='' || form.institute.value.length < 1)
		{
			alert('Please Enter the name of the Institute !!!');
			form.institute.focus();
			return false;
		}		
		
		if(form.uni.value =='' || form.uni.value.length < 1)
		{
			alert('Please Enter the Name of the University !!!');
			form.uni.focus();
			return false;
		}
		if(form.marks2.value =='' || form.marks2.value.length < 1)
		{
			alert('Please Enter your Marks !!!');
			form.marks2.focus();
			return false;
		}
		if(form.marks.value =='' || form.marks.value.length < 1)
		{
			alert('Please Enter your Marks !!!');
			form.marks.focus();
			return false;
		}
		if(form.school.value =='' || form.school.value.length < 1)
		{
			alert('Please Enter the Name of Your School !!!');
			form.school.focus();
			return false;
		}
		if(form.board.value =='' || form.board.value.length < 1)
		{
			alert('Please Enter the Board !!!');
			form.board.focus();
			return false;
		}
		
		}
</script>
<div class="infoform">
<h1>STEP 2 - Educational Details</h1>
<form action='' method="post" onSubmit="return validate(this)" >

  <h3>Highest Qualification Details</h3><hr /><br />
  <p>
    <label for="quali">Highest Qualification</label>
    <select name="quali" id="quali" class="field">
      <option name="quali">--Education Qualification--</option>
      <option value="PG/PG Diploma">PG/PG Diploma</option>
      <option value="Integrated PG">Integrated PG</option>
      <option value="Graduation">Graduation</option>
      <option value="Diploma">Diploma</option>
      <option value="Certificate Course">Certificate Course</option>
    </select>
  </p>
  <p>
  <label for="type">Type</label>

      <input type="radio" name="type" value="Full Time" id="type_0" class="field">
      Full Time
   
    
      <input type="radio" name="type" value="Part Time" id="type_1">
      Part Time
   
      <input type="radio" name="type" value="Correspondence" id="type_2">
    Correspondence</p>
  <p>
    <label for="fav_sub[]">Your favorite subjects</label>
    <input type="text" name="fav_sub[]" id="fav_sub[]" class="field"/>
    <input type="text" name="fav_sub[]" id="fav_sub[]" />
  </p>
  <br />
  <h3><strong>Graduation / Diploma Certificate Course Details</strong></h3>
  <hr /><br />
  <p>
    <label for="course">Your Course </label>
    <input type="text" name="course" id="course" class="field" />
  </p>
  <p>
    <label for="branch">Branch of Study</label>
    <input type="text" name="branch" id="branch"class="field" />
  </p>
  <p>
    <label for="state">State</label>
    <input type="text" name="state" id="state"class="field" />
  </p>
  <p>
    <label for="institute">Institute</label>
    <input type="text" name="institute" id="institute"class="field" />
  </p>
  <p>
    <label for="uni">University </label>
    <input type="text" name="uni" id="uni"class="field" />
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
    <input type="text" name="marks2" id="marks2" class="field" />
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
    <input type="text" name="marks" id="marks" class="field" />
  </p>
  <p>
    <label for="school">School</label>
    <input type="text" name="school" id="school" class="field" />
  </p>
  <p>
    <label for="board">Board</label>
    <input type="text" name="board" id="board" class="field" />
  </p>
  <br />
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Submit" />
    <input type="hidden" name="stu_id" id="stu_id" value="<?php echo $stu_id;  ?>" />
  </p>
</form>
</div>
<?php
include('footer.php');

?>