<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
$query="select * from jobs where recute_id='$recute_id'";
$res=mysql_query($query);
?>
<div class="searchform">
<h1>Posted Jobs</h1><br>
<?php
echo "<table>";
echo "<thead>
	<tr><th>Job Title</th><th>Company Name</th><th>Company Address</th><th>Location</th><th>Salary</th><th>Applications</th>
	</tr>";
echo "</thead>";
echo "<tbody>";
while($row=mysql_fetch_row($res))
{
	$aa=mysql_query("select * from applied_jobs where job_id=$row[0]");
	$num=mysql_num_rows($aa);
	echo "<tr>
		<td><a>$row[1]</a></td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td title='Check who applied'><a href='view_app.php?job_id=$row[0]&job_name=$row[1]'>$num Applied</a></td>
		</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</div>
<?php
include("footer.php");
?>