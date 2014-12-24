<?php
ob_start();
include("conn.php");
include("meta.php");
include("stu_header.php");
session_start();
$stu_id=$_SESSION['user_id'];

$query="SELECT * FROM `jobs`,applied_jobs WHERE jobs.id=applied_jobs.job_id and applied_jobs.stu_id='$stu_id'";
$res=mysql_query($query);
echo "<table>";
echo "<thead>
	<tr><th>Job Title</th><th>Company Name</th><th>Company Address</th><th>Location</th><th>Salary</th>
	</tr>";
echo "</thead>";
echo "<tbody>";
while($row=mysql_fetch_row($res))
{
	echo "<tr>
		<td><a href=showjob.php?job_id=$row[0]>$row[1]</a></td>
		
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		</tr>";
}
echo "</tbody>";
echo "</table>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

<?php
include("footer.php");

?>