<?php

include("chk_session.php");
include("conn.php");

$job_id=$_REQUEST["job_id"];

$title=$_REQUEST["title"];
$description=$_REQUEST["description"];
$email=$_REQUEST["email"];
$location=$_REQUEST["location"];
$company=$_REQUEST["company"];
$url=$_REQUEST["url"];
$to_apply=$_REQUEST["to_apply"];
$status=$_REQUEST["status"];
$dt=date(Y."-".m."-".d." ".h.":".m.":".s);


$sql_jobid=mysql_query("select id from category");



if($_REQUEST['sub_addjob_detail'])
{
	{
		$query="INSERT INTO jobs(job_title,job_desc,comp_name,comp_adrs,location,salary,cat_id,recute_id,job_type,status)
		values('$title','$description','$company','$url','$location','10000','1','0','1','1')";
		if($ss=mysql_query($query))
		{
			$job_id=mysql_insert_id();
			while(list($id)=mysql_fetch_array($sql_jobid))
			{
				$cat_.$id = $_REQUEST["cat_".$id];
				if($cat_.$id!="" )
				{
					mysql_query("INSERT INTO job2cat(cat_id, job_id) value(".$cat_.$id.",".$job_id.")");
				}
			}
			
		    print "<script language='Javascript'>";
		    print "location.href='managejobs.php?col=mngjob&st=ins'";
		    print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='addjob.php?col=addjob&st=er'";
			print "</script>";
		}
	}
}



if($_REQUEST['sub_edit_job_detail'])
{
		$query="UPDATE jobs SET title='".$title."', description='".$description."', location='".$location."', company='".$company."',url='".$url."',to_apply='".$to_apply."',email='".$email."',status='".$status."' WHERE id='".$job_id."'";
		if($ss=mysql_query($query))
		{
			
			mysql_query("delete from jobs2categories where job_id=".$job_id."");
			while(list($id)=mysql_fetch_array($sql_jobid))
			{
				$cat_.$id = $_REQUEST["cat_".$id];
				if($cat_.$id!="" )
				{
					mysql_query("INSERT INTO jobs2categories(category_id, job_id) value(".$cat_.$id.",".$job_id.")");
				}
			}
			
			
    		print "<script language='Javascript'>";
	    	print "location.href='managejobs.php?col=mngjob&st=upt'";
		    print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='job_editdetails.php?col=mngjob&job_id=".$user_id."&st=er'";
			print "</script>";
		}

}
?>