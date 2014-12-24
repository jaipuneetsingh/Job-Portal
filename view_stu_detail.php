<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
?>
<?php
//to fetch personal_detail 
$res=mysql_query("select * from personal_detail where id='$stu_id'");
$row=mysql_fetch_row($res);

//to fetch Educational_detail 
$res1=mysql_query("select * from edu_detail where stu_id='$stu_id'");
$row1=mysql_fetch_row($res1);

//to fetch Career_detail 
$res2=mysql_query("select * from career_detail where stu_id='$stu_id'");
$row2=mysql_fetch_row($res2);
?>
<div class="infoform">
    <div class="main">
        <h2>Personal Detail</h2><h4 align="right"></h4><hr /><br />
        <p><h3><?php echo ucwords($row[1]); ?></h3></p>
        <div class="left">Email</div>
        <div class="right"><?php echo $row[3]; ?>&nbsp;</div>
        <div class="left">Date Of Birth</div>
   		<div class="right"><?php echo $row[5]; ?>&nbsp;</div>
        <div class="left">Gender</div>
   		<div class="right"><?php echo $row[6]; ?>&nbsp;</div>
        <div class="left">Address</div>
   		<div class="right"><?php echo $row[7]; ?>&nbsp;</div>
        <div class="left">Pincode</div>
   		<div class="right"><?php echo $row[8]; ?>&nbsp;</div>
        <div class="left">Mobile No.</div>
   		<div class="right"><?php echo $row[9]; ?>&nbsp;</div>
        <div class="left">Current City</div>
   		<div class="right"><?php echo $row[10]; ?>&nbsp;</div>
        <div class="left">&nbsp;</div>
        <div class="right">&nbsp;</div>
        <h2>Educational Detail</h2><h4 align="right"></h4><hr /><br />
		<div class="left">Highest Qualification</div>
        <div class="right"><?php echo $row1[1]; ?>&nbsp;</div>
        <div class="left">Type</div>
        <div class="right"><?php echo $row1[2]; ?>&nbsp;</div>
        <div class="left">Favorite Subjects</div>
        <div class="right"><?php echo $row1[3]; ?>&nbsp;</div>
        <div class="left">Course</div>
        <div class="right"><?php echo $row1[4]; ?>&nbsp;</div>
        <div class="left">Branch</div>
        <div class="right"><?php echo $row1[5]; ?>&nbsp;</div>
        <div class="left">State</div>
        <div class="right"><?php echo $row1[6]; ?>&nbsp;</div>
        <div class="left">Institute</div>
        <div class="right"><?php echo $row1[7]; ?>&nbsp;</div>
        <div class="left">University</div>
        <div class="right"><?php echo $row1[8]; ?>&nbsp;</div>
        <div class="left">Passout</div>
        <div class="right"><?php echo $row1[9]; ?>&nbsp;</div>
        <div class="left">10th Marks</div>
        <div class="right"><?php echo $row1[10]; ?>&nbsp;</div>
        <div class="left">10th Passout</div>
        <div class="right"><?php echo $row1[11]; ?>&nbsp;</div>
        <div class="left">10th School</div>
        <div class="right"><?php echo $row1[12]; ?>&nbsp;</div>
        <div class="left">Board</div>
        <div class="right"><?php echo $row1[13]; ?>&nbsp;</div>
        <div class="left">&nbsp;</div>
        <div class="right">&nbsp;</div>
        <h2>Career Detail</h2><h4 align="right"></h4><hr /><br />
        <div class="left">Current / Prefered Industry</div>
        <div class="right"><?php echo $row2[1]; ?>&nbsp;</div>
        <div class="left">Function</div>
        <div class="right"><?php echo $row2[2]; ?>&nbsp;</div>
        <div class="left">Key Skills</div>
        <div class="right"><?php echo $row2[3]; ?>&nbsp;</div>
        <div class="left">Experience</div>
        <div class="right"><?php $ex= explode('-',$row2[4]); echo "$ex[0] Years , $ex[1] Months"; ?>&nbsp;</div>
    </div>
</div>
<?php
include("footer.php");
?>