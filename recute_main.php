<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
$recute_type=$_SESSION['type'];
?>
<div class="searchform">
<h1>Posted Jobs</h1><br>
<?php
$aa=mysql_query("select * from jobs where recute_id=$recute_id");
$num=mysql_num_rows($aa);
echo "<table class='search_tab'>";
echo "<thead>
	<tr><th>Job Title</th><th>View Job</th><th>Edit</th><th>Delete</th>
	</tr>";
echo "</thead>";
echo "<tbody>";
while($row=mysql_fetch_row($aa))
{
	echo "<tr>
		<td>$row[1]</td>
		<td><a href='view_job.php?job_id=$row[0]&job_name=$row[1]'>View</a></td>
		<td><a href='edit_job.php?job_id=$row[0]&job_name=$row[1]'>Edit</a></td>
		<td><a href='view_app.php?job_id=$row[0]&job_name=$row[1]'>Delete</a></td>
		</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</div>
<?php
include("footer.php");
?>