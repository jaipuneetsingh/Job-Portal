<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
$recute_premium=$_SESSION['type'];
$job_premium='n';
if(!empty($recute_premium))
$job_premium='y';
if($_REQUEST['sub'])
{
	extract($_POST);
	echo $query="insert into jobs(job_title,job_desc,comp_name,comp_adrs,location,salary,cat_id,recute_id,job_type) values('$jobnm','$jobdesc','$cnm','$cadrs','$cloc','$sal','$cat','$recute_id','$job_premium')";
	mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		header("location:recute_main.php?feedback=Job $jobnm has been posted");
		
	}
	else
	{
		echo "error".mysql_error();
	}
}
?>

<script type="text/javascript">

	function validate(form1)
	{
		if(form1.jobnm.value=='' || form1.jobnm.value.length <1)
			{
				alert("Please Enter the Job");
				form1.jobnm.focus();
				return false;
			}
			
		if(form1.cat.value=='--Select a Category--' || form1.cat.value.length <1)
			{
				alert("Please Select the Category");
				form1.cat.focus();
				return false;
			}
			
		if(form1.jobdesc.value=="" || form1.jobdesc.value.length < 1)
		{
			alert("Please Enter Job Description");
			form1.jobdesc.focus();
			return false;
		}
		
		if(form1.cnm.value=='' || form1.cnm.value.length < 1)
			{
				alert("Please Enter Company Name");
				form1.cnm.focus();
				return false;
			}
			
		if(form1.cadrs.value=='' || form1.cadrs.value.length < 1)
			{
				alert("Please Enter the Address of the Company");
				form1.cadrs.focus();
				return false;
			}
			
		if(form1.cloc.value=='' || form1.cloc.value.length < 1)
			{
				alert("Please Enter the Location of the Company");
				form1.cloc.focus();
				return false;
			}
			
		if(form1.sal.value=='' || form1.sal.value.length < 1)
			{
				alert("Please Enter Salary");
				form1.sal.focus();
				return false;
			}
	}

</script>
<div class="infoform">
<h1>Post A New Job</h1>

<form action="" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validate(this) " >
  <p>
    <label for="jobnm">Job Name</label>
    <input type="text" name="jobnm" id="jobnm" class="field" />
  </p>
  <p>
  				    <label for="cat">Job Category</label>
  				    <select name="cat" id="cat" class="field" >
                       <option name="cat">--Select a Category--</option>
                       <?php
					   $res=mysql_query("select * from category");
					   while($row=mysql_fetch_row($res))
					   {
							echo "<option value=$row[0]>$row[1]</option>";
					   }
					   ?>
  				      
			        </select>
  				  </p>
  <p>
    <label for="jobdesc">Job Description</label>
    <textarea name="jobdesc" rows="3" class="field" id="jobdesc"></textarea>
  </p>
  <p>
    <label for="cnm">Company Name</label>
    <input type="text" name="cnm" id="cnm" class="field" />
  </p>
  <p><label for="cnm">Company Address</label>
    <input type="text" name="cadrs" id="cadrs" class="field" />
  </p>
 
  <p><label for="cnm">Location</label>
    <input type="text" name="cloc" id="cloc" class="field" />
  </p>
  <p><label for="cnm">Salary</label>
    <input type="text" name="sal" id="sal" class="field" />
  </p>
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Submit" />
  </p>
</form>
</div>
<?php
include("footer.php");
?>