<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
$job_id=$_REQUEST['job_id'];
?>
<?php
$res1=mysql_query("select * from jobs where id='$job_id'");
$row=mysql_fetch_row($res1);
$cat=mysql_query("select job_cat from category where id=$row[7]");
$row1=mysql_fetch_row($cat);

?>
<div class="infoform">
    <div class="main">
        <h2><?php echo $job_name; ?></h2><h4 align="right"></h4><hr /><br />
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
        <div class="left">Category</div>
        <div class="right"><?php echo $row1[0]; ?>&nbsp;</div>
</div>
</div>
<?php
include("footer.php");
?>