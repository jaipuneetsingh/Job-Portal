<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
$job_name=$_REQUEST['job_name'];
$job_id=$_REQUEST['job_id'];
if($_REQUEST['sub'])
{
	extract($_POST);	
	mysql_query("update jobs set  job_title='$jobnm',job_desc='$jobdesc',comp_name='$cnm',comp_adrs='$cadrs',location='$cloc',salary='$sal',cat_id='$cat' where id='$job_id'") or die('error'.mysql_error());
	$msg="Job updated";
	header('Location:recute_main.php');
}
$res1=mysql_query("select * from jobs where id='$job_id'");
$row=mysql_fetch_row($res1);

?>
<p>
<?php if(!empty($msg)) echo "<span class=error>$msg</span>"; ?>

</p>
<div class="infoform">
<h1>Edit Job:  <?php echo $job_name;   ?></h1>

<form action="" method="post"  name="form1">

  <p>
  <input type="hidden" name="job_id" value="<?php echo $job_id; ?>" />
    <label for="jobnm">Job Name</label>
    <input type="text" name="jobnm" id="jobnm"  value="<?php echo $row[1]; ?>" class="field" />
  </p>
  <p>
  				    <label for="cat">Job Category</label>
  				    <select name="cat" id="cat" class="field">
                       <option value="">--Select a Category</option>
                       <?php
					   $res=mysql_query("select * from category");
					   while($row2=mysql_fetch_row($res))
					   {
						   if($row2[0]==$row[7])
							echo "<option value=$row2[0] selected>$row2[1]</option>";
							else
							echo "<option value=$row2[0]>$row2[1]</option>";
					   }
					   ?>
  				      
			        </select>
  				  </p>
  <p>
    <label for="jobdesc">Job Description</label>
    <textarea name="jobdesc" rows="3" class="field" id="jobdesc"><?php echo $row[2]; ?></textarea>
  </p>
  <p>
    <label for="cnm">Company Name</label>
    <input type="text" name="cnm" id="cnm" value="<?php echo $row[3]; ?>" class="field" />
  </p>
  <p><label for="cnm">Company Address</label>
    <input type="text" name="cadrs" id="cadrs" class="field" value="<?php echo $row[4]; ?>"/>
  </p>
 
  <p><label for="cnm">Location</label>
    <input type="text" name="cloc" id="cloc" class="field" value="<?php echo $row[5]; ?>" />
  </p>
  <p><label for="cnm">Salary</label>
    <input type="text" name="sal" id="sal" class="field" value="<?php echo $row[6]; ?>"/>
  </p>
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Update" />
  </p>
</form>
</div>


<?php
include("footer.php");
?>