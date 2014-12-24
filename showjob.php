<?php
ob_start();
include("conn.php");
include("meta.php");
include("stu_header.php");
session_start();
$stu_id=$_SESSION['user_id'];

$res=mysql_query("select * from jobs where id='$job_id' and status='1'");
$row=mysql_fetch_row($res);
?>
<div class="infoform">
    <div class="main">
        <h2>Job Detail</h2><h4 align="right"></h4><hr /><br />
		<div class="left">Job Name</div>
        <div class="right"><?php echo $row[1]; ?>&nbsp;</div>
        <div class="left">Job Description</div>
        <div class="right"><?php echo $row[2]; ?>&nbsp;</div>
        <div class="left">Company Name</div>
        <div class="right"><?php echo $row[3]; ?>&nbsp;</div>
        <div class="left">Company Address</div>
        <div class="right"><?php echo $row[4]; ?>&nbsp;</div>
        <div class="left">Location</div>
        <div class="right"><?php echo $row[5]; ?>&nbsp;</div>
        <div class="left">Salary</div>
        <div class="right"><?php echo $row[6]; ?>&nbsp;</div>
	</div>
</div>
<?php
include("footer.php");
?>