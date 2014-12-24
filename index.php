<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("functions.php");
if(!empty($_SESSION['user_id']))
	include("stu_header.php");
else
	include("header.php");
//apply for lob
if($applied_job_id=$_REQUEST['apply_job_id'])
{
	mysql_query("insert into applied_jobs values('','$applied_job_id','".$_SESSION['user_id']."')");
	header("location:index.php");
}
//login for job seekers
			if($_REQUEST['login'])
			{
				extract($_POST);
				if(empty($email) or empty($pass))
				{
					$login_er="Please fill all fields ";	
				}
				else
				{
					$res=mysql_query("select * from personal_detail where email='$email' AND password='$pass' and status='1'" );	
					if(mysql_affected_rows()>0)
					{
						$row=mysql_fetch_row($res);
						$_SESSION['user_id']=$row[0];
						$_SESSION['name']=$row[1];
						header("location:main.php");
					}
					else
					{
						$sumit="<script>alert('Your User Deactivated'); </script>";
					}
				}
			}

?>

<br />
<?php if(!empty($feedback)) echo "<span class=error>$feedback</span>"; ?>
<div id="content">
		<div class="searchform">
			<form action="" method="post">
              <div class="key">
                <label for="keyword">Keywords	:</label>
                <input type="text" name="keyword" id="keyword"  class="field"/>
              </div>
               <div class="key">
                <label for="loc">Location : </label>
                <input type="text" name="loc" id="loc"/>
              </div>
                <div class="key">
  				  <p>
  				    <label for="cat">Job Category : </label>
  				    <select name="cat" id="cat">
                       <option value="">--Select a Category</option>
                       <?php
					   $res=mysql_query("select * from category");
					   while($row=mysql_fetch_row($res))
					   {
							echo "<option value=$row[0]>$row[1]</option>";
					   }
					   ?>
  				      
			        </select>
  				  </p>
                  </div>
                  <div class="key">
  				  <p>
  				    <label for="salary">Salary</label>
  				    <input type="text" name="salary" id="salary" />
                  </p>
                </div>
                <div class="search_sub">
                <input type="submit" name="sub" value="Submit" />
                </div>
			</form>
            <?php
			//search jobs by filling various fields
			if($_REQUEST['sub'])
			{
				extract($_POST);
				if(empty($keyword) and empty($loc) and empty($cat) and empty($salary))
				{
					$error="please fill something";	
				}
				else
				{
					echo "<hr /><br>";
					$search_query=search_query($loc,$salary,$keyword,$cat);					
					
					view_filtered_jobs($search_query);
				}

			}
			
			//view by category
			elseif($cat_id=$_REQUEST['cat_id'])
			{
				$search_query=search_query('','','',$cat_id);
				$error=view_filtered_jobs($search_query);
			}
			
			//error
			if(!empty($error))
            	echo "<span class=error>$error</span>";
			
			
			if($con=$_REQUEST['con'])
			{
				include($con.".php");
			}
			
			?>
        
        </div>
<div id=blocks>
        <div class=block>
        <h2>Premium Jobs</h2>
		<br />
        <?php
		$pre_res=mysql_query("select * from jobs where job_type='y' and status=1 limit 6");
		while($pre_row=mysql_fetch_row($pre_res))
		{
			echo "&bull; <a href=index.php?con=postjob&job_id=$pre_row[0]>$pre_row[1]</a>
			<img src=images/star.png alt=premium>
			<br>";
		}
		
		?>
        
        
        </div>
        <div class=block>
        <h2>Search jobs by category</h2>
		<br />
        <?php
		$cat_res=mysql_query("select * from category limit 5");
		while($cat=mysql_fetch_row($cat_res))
		{
			echo "&bull; <a href=index.php?cat_id=$cat[0]>$cat[1]</a><br>";
		}
		?>
        
        </div>
        <div class=block>
        <h2>LATEST JOBS</h2>
		<br />
        <p>
        <?php 
				$res=mysql_query("select id,job_title from jobs where status=1 order by id desc LIMIT 6");
				while($row=mysql_fetch_row($res))
				{
					echo "&bull; <a href=index.php?con=postjob&job_id=$row[0]>$row[1]</a><br>";
				}
				
				?>
                </p>
        </div>
<?php
if(!isset($_SESSION['user_id']))
{
?>

        <div class=block>
		<h2>JOB SEEKERS SIGNIN HERE</h2>
        <br />
		<p>
		<form action="" method="post">
				<p><input name="email" type="text" class="first input" id="email" value="Email address" /> </p>
          <p><input name="pass" type="password" class="first input" id="pass" value="Password" /><br /></p>
				<p><input type="submit" class="" value="submit" name="login" id="login" /></p>
			</form>
         </p>
         <font color="#990000"><?php echo $login_er; ?></font>
        <p>OR <a href="register.php">Register Here</a></p>
        </div>
</div>
<?php
}
?>

	</div>
<?php
include("footer.php");
if($sumit)
{
	echo $sumit;
}
?>
