<?php
ob_start();
session_start();
?>
<br />
<div id="recute_header">
		<a href="index.php" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<?php
            if(isset($_SESSION['recute_id']))
			{
				echo "<li><a href=recute_main.php>Posted Jobs</a></li>";
				echo "<li><a href=postnewjob.php>Post a job</a></li>";
				echo "<li><a href=view_recute_jobs.php>Check Applications</a></li>";
				echo "<li>Hello ".ucwords($_SESSION['recute_unm'])."</li>";
				echo "<li class=last><a href=index.php?con=recute_logout>Logout</a></li>";

			}
			?>
		</ul>
</div>