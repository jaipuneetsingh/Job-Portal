<hr>
<?php
$job_id=$_REQUEST['job_id'];
$res=mysql_query("select * from jobs where id='$job_id'");
$row=mysql_fetch_row($res);

if($_REQUEST['post'])
{
	$file=$_FILES['resume'];
	
	extract($_POST);
	if(empty($nm) or empty($email) or empty($msg))
		$er="Please fill All Fields";
	else
	{
		if($ques=="hot")
		{
			mysql_query("insert into applied_jobs_guest values('','$job_id','$nm','$email','$msg')");	
			//print_r($file);
			move_uploaded_file($file['tmp_name'],"resume/$nm.doc");		
			$feedback="You have applied for job $row[1]";
			header("location:index.php?feedback=$feedback");
		}
		else
		{
			$er="Answer is wrong";	
		}
	}
}


//echo $job_id;
echo "<h1>$row[1]</h1>$row[3]<br><hr><br>";
echo "<h2>Job Description</h2><br>";
echo "<p>".nl2br($row[2])."</p>";

if(isset($_SESSION['user_id']))
{
	echo "<a href=index.php?apply_job_id=$row[0]>Apply For This Job</a>";
	
}
else
{
	echo "<br><h2>Apply for this Job</h2>";
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="438" border="1" align="center">
    <tr>
      <td width="140" scope="col">Name</td>
      <td width="142" scope="col"><input type="text" name="nm" id="nm"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>Message</td>
      <td><textarea name="msg" rows="5" id="msg"></textarea></td>
    </tr>
    <tr>
    	<td>Upload Resume</td>
      <td><input type="file" name="resume" id="resume" ></td>
    </tr>
    <tr>
      <td>Is fire &quot;hot&quot; or cold</td>
      <td colspan="2"><input type="text" name="ques" id="ques"></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" name="post" id="post" value="Submit"></td>
    </tr>
  </table>
  <p><?php if(!empty($er))
            	echo "<br><span class=error>$er</span>"; ?></p>
</form>
<?php
}
?>