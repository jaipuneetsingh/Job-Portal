<?php
ob_start();
include('conn.php');
include('meta.php');?>
<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Our Career</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="register.php" class="last">Register</a></li>
           
		</ul>
		<img src="images/bigpicture.jpg" alt="" width="892" height="303" />
        
</div>
<?php
if($_REQUEST['sub'])
{
	extract($_POST);
	$dob1=implode('-',$dob);

	mysql_query("insert into personal_detail values('','$nm','$unm','$email','$pass','$dob1','$gen','$adrs','$pcode','$mob','$city','1')");
	if(mysql_affected_rows()>0)
	{
		$stu_id=mysql_insert_id();
		header("location:edu_detail.php?stu_id=$stu_id");
	}
}


?>

<html>

<script>

function validate(form)
{
	if(form.nm.value =='' || form.nm.value.length < 1)
		{
			alert('Please Enter your Name');
			form.nm.focus();
			return false
		}
		
		if(form.unm.value =='' || form.unm.value.length < 1)
		{
			alert('Please Enter your User Name');
			form.unm.focus();
			return false
		}
		
		if(form.email.value =='' || form.email.value.length < 1)
		{
			alert('Please Enter your Email Address');
			form.email.focus();
			return false
		}
		
		if ((form.email.value.indexOf('@') <= 0) || ((form.email.value.charAt(form.email.value.length-4) != '.') && (form.email.value.charAt(form.email.value.length-3) != '.'))) 
			{
			alert("You have entered an invalid email address. Please try again.");
			form.email.select();
			return false;
			}
			
			if(form.pass.value =='' || form.pass.value.length < 1)
		{
			alert('Please Enter your Password !!!');
			form.pass.focus();
			return false;
		}
		
		if(form.pass.value!==form.rpass.value)
		{
			alert('Password Dosent match !!!');
			form.rpass.focus();
			return false;
		}
		
		
		
		if(form.gen.value =='' || form.gen.value.length < 1)
		{
			alert('Please Enter Gender !!!');
			form.gen.focus();
			return false;
		}		
		
		if(form.adrs.value =='' || form.adrs.value.length < 1)
		{
			alert('Please Enter your Address !!!');
			form.adrs.focus();
			return false;
		}
		if(form.pcode.value =='' || form.pcode.value.length < 1)
		{
			alert('Please Enter your Pin Code !!!');
			form.pcode.focus();
			return false;
		}
		if(form.mob.value =='' || form.mob.value.length < 1)
		{
			alert('Please Enter your Mobile Number !!!');
			form.mob.focus();
			return false;
		}
		if(form.mob.value =='' || form.mob.value.length < 1)
		{
			alert('Please Enter your Mobile Number !!!');
			form.mob.focus();
			return false;
		}
		if(form.city.value =='--city--' || form.city.value.length < 1)
		{
			alert('Please Enter your City !!!');
			form.city.focus();
			return false;
		}
		
		}
</script>


<div class="infoform">
<h1>STEP 1 - Personal Details</h1>
<form action='' method="post" onSubmit="return validate(this)" >

  <p>
    <label for="nm">* Name</label>
    <input type="text" name="nm" id="nm"  class="field"/>
  </p>
  <p>
    <label for="unm">* User Name</label>
    <input type="text" name="unm" id="unm"  class="field"/>
  </p>
  <p>
    <label for="email">* Enter email</label>
    <input type="text" name="email" id="email" class="field" title="asdfgh" />
  </p>
  <p>
    <label for="pass">* Password</label>
    <input type="password" name="pass" id="pass"  class="field"/>
  </p>
  <p>
    <label for="rpass">* Re-type Password</label>
    <input type="password" name="rpass" id="rpass" class="field" />
  </p>
  <p>
    <label for="dob">* Date Of Birth</label>
    <select name="dob[]" id="dob[]" class="field">
    <?php
		for($a=1;$a<=31;$a++)
			echo "<option value=$a>$a</option>";
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
		for($a=1970;$a<=2013;$a++)
			echo "<option value=$a>$a</option>";
	?>
    </select>
  </p>
  <p>
    <label for="gen">* Gender</label>
    <input type="text" name="gen" id="gen"  class="field"/>
  </p>
  <p>
    <label for="adrs">* Address</label>
    <textarea name="adrs" cols="20" rows="4" class="field" id="adrs"></textarea>
  </p>
  <p>
    <label for="pcode">* Pin Code</label>
    <input type="text" name="pcode" id="pcode"  class="field" />
  </p>
  <p>
    <label for="mob">* Moblie Number</label>
    <input type="text" name="mob" id="mob"  class="field" />
  </p>
  <p>
    <label for="city">* Current Residing City</label>
    <select name="city" id="city"   class="field">
	<option name="city">--city--</option>
    <option value="chandigarh">chandigarh</option>
    <option value="mohali">mohali</option>
    <option value="amritsar">amritsar</option>
    </select>
  </p>
  <p align="center">
    <input type="submit" name="sub" id="sub" value="Submit"   />
  </p>
</form>
</html>
</div>
<?php
include('footer.php');
?>