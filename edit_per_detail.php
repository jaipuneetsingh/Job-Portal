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
	$dob1=implode('-',$dob);
	$query="update personal_detail set name='$nm', 	username='$unm', 	email='$email', dob='$dob1', 	gender='$gen', 	address='$adrs', 	pincode='$pcode', 	mobile='$mob', 	current_city='$city' where id='$user_id'";
	mysql_query($query);
	if(mysql_affected_rows()>0)
	{
		$msg="Your Personal Details has been updated";
		header("location:main.php?msg=$msg");
	}
	else
		echo "error".mysql_error();
}

$res=mysql_query("select * from personal_detail where id='$stu_id'");
$row=mysql_fetch_row($res);
$dob=explode('-',$row[5]);

?>
<div class="infoform">
<h1>Personal Details</h1>
<form name="form1" method="post" action="">
  <p>
    <label for="nm">* Name</label>
    <input type="text" name="nm" id="nm" value="<?php echo $row[1];  ?>"  class="field"/>
  </p>
  <p>
    <label for="unm">* User Name</label>
    <input type="text" name="unm" id="unm" value="<?php echo $row[2];  ?>"  class="field"/>
  </p>
  <p>
    <label for="email">* Enter email</label>
    <input type="text" name="email" id="email" value="<?php echo $row[3];  ?>" class="field" />
  </p>
  <p>
    <label for="dob">* Date Of Birth</label>
    <select name="dob[]" id="dob[]" class="field">
    <?php
		for($a=1;$a<=31;$a++)
		{
			if($a==$dob[0])
				echo "<option value=$a selected>$a</option>";
			else
				echo "<option value=$a>$a</option>";
		}
	?>
    </select>
    <select name="dob[]" id="dob[]">
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
    <select name="dob[]" id="dob[]">
    <?php
		for($a=1970;$a<=2000;$a++)
		{
			if($a==$dob[2])	
				echo "<option value=$a selected>$a</option>";
			else
				echo "<option value=$a>$a</option>";
		}
	?>
    </select>
  </p>
  <p>
    <label for="gen">* Gender</label>
    <input type="text" name="gen" id="gen" value="<?php echo $row[6];  ?>"  class="field"/>
  </p>
  <p>
    <label for="adrs">* Address</label>
    <textarea name="adrs" cols="20" rows="4" class="field" id="adrs"><?php echo $row[7];  ?>"</textarea>
  </p>
  <p>
    <label for="pcode">* Pin Code</label>
    <input type="text" name="pcode" id="pcode"  class="field" value="<?php echo $row[8];  ?>" />
  </p>
  <p>
    <label for="mob">* Moblie Number</label>
    <input type="text" name="mob" id="mob"  class="field" value="<?php echo $row[9];  ?>" />
  </p>
  <p>
    <label for="city">* Current Residing City</label>
    <select name="city" id="city"   class="field">
    <option value="chandigarh" >chandigarh</option>
    <option value="mohali">mohali</option>
    <option value="amritsar">amritsar</option>
    </select>
  </p>
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Update" />
  </p>
</form>
</div>

<?php
include('footer.php');

?>