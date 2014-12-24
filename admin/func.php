<?php 

////////////////////////////////    LOGIN CHECK       //////////////////////////////////////
////////////////////////////////       START          //////////////////////////////////////


function login_check()
{
	$cat=$_REQUEST["cat"];

	if($_REQUEST['sub_login'])
	{
		$user_name=$_REQUEST["user"];
		$password=$_REQUEST["pwd"];
		if($user_name=="" or $password=="")
		{
			echo "Please fill all the required information";
		}
		else
		{
			$query=mysql_query("select * from personal_detail where username='$user_name' and password='$password' and status=1");
			if(mysql_num_rows($query)>0)
			{
			 	$_SESSION["auser_name"]=$user_name;
				print "<script language='Javascript'>";
				print "location.href='welcome.php?col=wlcm'";
				print "</script>";
			 }
			 else
			 {
				echo "User Name/Password are Invalid";
			 }
		}
	}
	if($cat=="logout")
	{
		$_SESSION["auser_name"]="";
		echo "You have been logged out";
		session_destroy();
	}
	if($cat=="exp")
	{
		echo "Session Expire Please Login";
	}

}


////////////////////////////////    LOGIN CHECK       //////////////////////////////////////
////////////////////////////////       END            //////////////////////////////////////




////////////////////////////////     MANAGE JOB 	  //////////////////////////////////////
////////////////////////////////       START          //////////////////////////////////////



function admin_manage_jobs_show()
{
	$result=mysql_query("select * from jobs");
	$cnt=0;
	while($row=mysql_fetch_array($result))
	{
		
		$cnt=$cnt+1;
		if($cnt%2==0)
		$bg="#CCCCCC";
		else
		$bg="#DDEBEE";
		
	echo "<tr><td class='content' bgcolor=".$bg.">".$row['job_title']."</td>";
	echo "<td class='content' bgcolor=".$bg.">".$row['location']."</td>";
	echo "<td class='content' bgcolor=".$bg.">".$row['comp_name']."</td>";
	//echo "<td class='content' bgcolor=".$bg.">".$row['url']."</td>";
	//echo "<td class='content' bgcolor=".$bg."><a class='color' href=mailto:".$row['email'].">".$row['email']."</a></td>";
	echo "<td class='content' bgcolor=".$bg.">";
	if($row['status']=="1")
	echo "<a class='color' href='managejobs.php?col=mngjob&act=deact&job_id=".$row['id']."'>Published</a></td>";
	else
	echo "<a class='color' href='managejobs.php?col=mngjob&act=act&job_id=".$row['id']."'>Unublished</a></td>";
	//echo "<td class='content' bgcolor=".$bg.">".$row['created_at']."</td>";

	echo "<td align='center' bgcolor=".$bg."><a href=job_editdetails.php?col=mngjob&job_id=".$row['id'].">
		  <img src=images/edit1.png width=20 height=20></td>";
	echo "<td align='center' bgcolor=".$bg."><a href=managejobs.php?col=mngjob&act=del&job_id=".$row['id'].">
		  <img src=images/close-icon.png width=20 height=20></td></tr>";
	}
}

function admin_manage_job_action()
{
	$act=$_REQUEST['act'];
	$job_id=$_REQUEST["job_id"];
	if($act=="act")
	{
		$query="update jobs set status=1 where id='".$job_id."'";
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=act'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=er'";
			print "</script>";
		}
	}
	if($act=="deact")
	{
		$query="update jobs set status=0 where id='".$job_id."'";
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=deact'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=er'";
			print "</script>";
		}
	}
	if($act=="del")
	{
		$query="delete from jobs where id=".$job_id;
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=del'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='managejobs.php?col=mngjob&st=er'";
			print "</script>";
		}
	}
	
}

function admin_manage_jobs_msgs()
{
	$st=$_GET["st"];
	if($st=="ins")
	echo "<br />Inserted Successfully<br /><br />";
	if($st=="upt")
	echo "<br />Updated Successfully<br /><br />";
	if($st=="del")
	echo "<br />Deleted Successfully<br /><br />";
	if($st=="act")
	echo "<br />Published Successfully<br /><br />";
	if($st=="deact")
	echo "<br />Unpublished Successfully<br /><br />";
    if ($st=="ex")
    echo "<br />The username that you entered already exists. Please enter a new username<br /><br />";
    if ($st=="em")
    echo "<br />The email address that you entered already exists.<br />Please enter a different email<br/><br />";
	if ($st=="er")
    echo "<br />An error occurred in the Database, please contact the Administrator<br /><br />";

}



////////////////////////////////     MANAGE JOB 	  //////////////////////////////////////
////////////////////////////////        END           //////////////////////////////////////




////////////////////////////////     MANAGE USER 	  //////////////////////////////////////
////////////////////////////////       START          //////////////////////////////////////



function admin_manage_user_msgs()
{
	$st=$_GET["st"];
	if($st=="ins")
	echo "<br />Inserted Successfully<br /><br />";
	if($st=="upt")
	echo "<br />Updated Successfully<br /><br />";
	if($st=="del")
	echo "<br />Deleted Successfully<br /><br />";
	if($st=="act")
	echo "<br />Activate Successfully<br /><br />";
	if($st=="deact")
	echo "<br />Deactivate Successfully<br /><br />";
    if ($st=="ex")
    echo "<br />The username that you entered already exists. Please enter a new username<br /><br />";
    if ($st=="em")
    echo "<br />The email address that you entered already exists.<br />Please enter a different email<br/><br />";
	if ($st=="er")
    echo "<br />An error occurred in the Database, please contact the Administrator<br /><br />";

}

function admin_manage_user_show()
{
	$query=mysql_query("select * from  personal_detail order by id desc");
	$cnt=0;
	if(mysql_num_rows($query)==0)
	{	?><tr>
     	<td height="20" colspan="5" class="msgcontent" align="center">No 
        Records Found</td></tr>
		<?php
	}
	else
	{
	while($row1=mysql_fetch_array($query))
	{
		
		$cnt=$cnt+1;
		if($cnt%2==0)
		$bg="#CCCCCC";
		else
		$bg="#DDEBEE";
		?>
        
        <tr bgcolor="<?php echo $bg?>">
		<td height="23" align="left" valign="middle" class="content">&nbsp;
        <?php echo ucfirst($row1['name']); ?></td>
                        
        <td height="23" align="left" class="content">
		<?php echo "<a href=ss.php?see=".$row1['username']." target=_blank>".ucfirst($row1['username'])."</a>";?></td>
                        
        <td align="center" valign="middle" class="content">
		<?php 
		if($row1['status']=="1")
		echo "Activate";
		else
		echo "Deactivate";	?></td>
                        
        <!--<td height="23" align="left" valign="middle" class="content">&nbsp;&nbsp;
		<?php //echo ucfirst($row1['user_type'])?></td>-->
                       
        <td  align="left" valign="middle" class="content">
		<?php 
		if($row1["id"]!="11") 
		{ ?>
			<!--<a href="user_editdetails.php?col=mnguser&user_id=<?php echo $row1["id"]?>" >Edit</a>||-->
            <a href="ss.php?cat=del&user_id=<?php echo $row1["id"]?>" onClick="return getconfirm('Do you want to delete the user?');">Delete</a> ||
            <?php
            if($row1["status"]=="0")
			{
				echo "<a href='ss.php?act=act&user_id=".$row1["id"]."'> Activate </a>";
			}
			else
			{
				echo "<a href='ss.php?act=deact&user_id=".$row1["id"]."'> Deactivate </a>";
			}
		} ?></td></tr>
	<?php
	}
	}
}

function admin_manage_user_activate()
{
	$act=$_REQUEST['act'];
	$user_id=$_REQUEST["user_id"];
	if($act=="del")
	{
		$query="delete from  personal_detail where id='".$user_id."'";
		if(mysql_query($query,$conn))
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=del'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=er'";
			print "</script>";
		}
	}

	if($act=="act")
	{
		$query="update userdetails set status=1 where user_id='$user_id'";
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=act'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=er'";
			print "</script>";
		}
	}
	if($act=="deact")
	{
		$query="update userdetails set status=0 where user_id='$user_id";
		
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=deact'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manageuser.php?st=er'";
			print "</script>";
		}
	}
}

////////////////////////////////     MANAGE USER 	  //////////////////////////////////////
////////////////////////////////         END          //////////////////////////////////////




////////////////////////////////////////  ADD JOB   /////////////////////////////////////////
//////////////////////////////////         START        //////////////////////////////////////


function categories()
{
	$job_id=$_REQUEST["job_id"];
	
	$query=mysql_query("SELECT id, job_cat FROM category	
							WHERE id NOT IN (SELECT cat_id	FROM job2cat WHERE job_id = '".$job_id."' )");
	$sql_query=mysql_query("SELECT id, job_cat FROM category	
							WHERE id IN (SELECT cat_id	FROM job2cat WHERE job_id = '".$job_id."' )");
	
	
	while($cat=mysql_fetch_array($sql_query))
	{
		echo "<input align='left' name='cat_".$cat['id']."' type='checkbox' value=".$cat['id']." checked='checked'>
				<span class='content'>".$cat['job_cat']."</span><br>";
			
	}
	while($cat=mysql_fetch_array($query))
	{
		echo "<input align='left' name='cat_".$cat['id']."' type='checkbox' value=".$cat['id'].">
				<span class='content'>".$cat['job_cat']."</span><br>";
	}
		
	
	
	
	
	
	
	
	
	
	
   
}


//MANAGE RECUTERS

function admin_manage_user_show1()
{
	$query=mysql_query("select * from  recute_login order by id desc");
	$cnt=0;
	if(mysql_num_rows($query)==0)
	{	?><tr>
     	<td height="20" colspan="5" class="msgcontent" align="center">No 
        Records Found</td></tr>
		<?php
	}
	else
	{
	while($row1=mysql_fetch_array($query))
	{
		
		$cnt=$cnt+1;
		if($cnt%2==0)
		$bg="#CCCCCC";
		else
		$bg="#DDEBEE";
		?>
        
        <tr bgcolor="<?php echo $bg?>">
		<td height="23" align="left" valign="middle" class="content">&nbsp;
        <?php echo ucfirst($row1['username']); ?></td>
                        
        <td height="23" align="left" class="content">
		<?php echo "<a href=ss1.php?see=".$row1['username']." target=_blank>".ucfirst($row1['username'])."</a>";?></td>
                        
        <td align="center" valign="middle" class="content">
		<?php 
		if($row1['status']=="1")
		echo "Activate";
		else
		echo "Deactivate";	?></td>
                        
        <!--<td height="23" align="left" valign="middle" class="content">&nbsp;&nbsp;
		<?php //echo ucfirst($row1['user_type'])?></td>-->
                       
        <td  align="left" valign="middle" class="content">
		<?php 
		if($row1["id"]!="11") 
		{ ?>
			<!--<a href="user_editdetails.php?col=mnguser&user_id=<?php echo $row1["id"]?>" >Edit</a>||-->
            <a href="ss1.php?cat=del&user_id=<?php echo $row1["id"]?>" onClick="return getconfirm('Do you want to delete the user?');">Delete</a> ||
            <?php
            if($row1["status"]=="0")
			{
				echo "<a href='ss1.php?act=act&user_id=".$row1["id"]."'> Activate </a>";
			}
			else
			{
				echo "<a href='ss1.php?act=deact&user_id=".$row1["id"]."'> Deactivate </a>";
			}
		} ?></td></tr>
	<?php
	}
	}
}

function admin_manage_user_activate1()
{
	$act=$_REQUEST['act'];
	$user_id=$_REQUEST["user_id"];
	if($act=="del")
	{
		$query="delete from  recute_login where id='".$user_id."'";
		if(mysql_query($query,$conn))
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=del'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=er'";
			print "</script>";
		}
	}

	if($act=="act")
	{
		$query="update recute_login set status=1 where id='$user_id'";
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=act'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=er'";
			print "</script>";
		}
	}
	if($act=="deact")
	{
		$query="update recute_login set status=0 where id='$user_id";
		
		if(mysql_query($query))
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=deact'";
			print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='manage_recuter.php?st=er'";
			print "</script>";
		}
	}
}


?>