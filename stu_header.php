<?php
ob_start();
session_start();
?>
<div id="stu_header">
		<a href="index.html" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="index.php">Search Jobs</a></li>
			<li><a href="updateresume.php">Upload/Update Resume</a></li>
			<li><a href="main.php">My Profile</a></li>
			<li><a href="applied_jobs.php">Applied_jobs</a></li>
            <?php
			if(isset($_SESSION['user_id']))
			{
				echo "<li>Hello ".ucwords($_SESSION['name'])."</li>";
				echo "<li class=last><a href=index.php?con=logout>Logout</a></li>";
			}
			?>
		</ul>
		
</div>