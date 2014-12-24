<?php
ob_start();
session_start();
include("conn.php");
include("meta.php");
include("recute_header.php");
$recute_id=$_SESSION['recute_id'];
$recute_unm=$_SESSION['recute_unm'];
?>
<div class="infoform">
<h1>Applications for <?php echo $job_name; ?></h1><br>
<?php
$job_id=$_REQUEST['job_id'];

$job_name=$_REQUEST['job_name'];

echo "job_id".$job_id;
echo "<br>";
echo "job name".$job_name;

if(isset($_POST[submit]))
{

	$delete="DELETE FROM `jobs` WHERE id='$job_id' and job_title='$job_name'";
	$del=mysql_query($delete);
	
	?>
	<script type="text/javascript">
		
		alert ("Delete Successfully");
		
	
	</script>
	<?php
	
	header('Location:recute_main.php');
}

?>

<form method="post" >

<input type="submit" name="submit" value="Delete"  />
</form>

</div>
</div>
<?php
include("footer.php");
?>