<?php
session_start();
include('conn.php');

$act=$_REQUEST['act'];
$us_id=$_REQUEST['user_id'];

if($_REQUEST['act'])
{
if($act=="act")
{
	mysql_query("update  personal_detail SET status=1 where id='$us_id'");
	header('location:manageuser.php');
}
else
{
	mysql_query("update  personal_detail SET status=0 where id='$us_id'");
	header('location:manageuser.php');

}
}
if($_REQUEST['cat'])
{
mysql_query("delete from  personal_detail where id='$us_id'");
	
	header('location:manageuser.php');
}


//-------------seeing jobs here code start---------------------------------<br>


if($_REQUEST['see'])
{
	$xy=$_REQUEST['see'];
	$chk=mysql_query("select * from jobapply where unm='$xy'");

echo "<p align=center>HERE THE DETAILS OF ALL JOBS APPLIED BY:-<h1 align=center  style=color:skyblue>".strtoupper($xy)."</h1>";
if(mysql_num_rows($chk)>0)
{
echo "<div><br><p><table border=2 align=center>";
echo "<tr><th>JOB NAME</th><th>DELETE</TH></tr>";
while(list($chk1,$t,$jnm)=mysql_fetch_array($chk))
{
	echo "<tr>";
	echo "<td>".$jnm."</td>";
	echo "<td><a href=index.php?view=see&del=$t>DELETE</a></td>";
}
echo "</table></div>";
}
else
{
	echo "<p align=center><br><br>sorry u r not yet aplly for any job</p>";
}

}

?>