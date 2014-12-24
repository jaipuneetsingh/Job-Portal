<?php

include("chk_session.php");
include("conn.php");

$user_id=$_REQUEST["user_id"];

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$uname=$_REQUEST["uname"];
$password=$_REQUEST["pwd"];
$email=$_REQUEST["email"];
$status=$_REQUEST["status"];
$user_type=$_REQUEST["utype"];

if($_REQUEST['sub_add_newuser'])
{
	$sql_query=mysql_query("select count(*) as cnt from userdetails where user_name='".$uname."'");
    $sql_query1=mysql_query("select count(*) as cnt from userdetails where email='".$email."'");

	$user_num=mysql_fetch_array($sql_query);
    $email_num=mysql_fetch_array($sql_query1);
    
	if($user_num['cnt']>0 || $email_num['cnt']>0)
	{
        if($user_num['cnt']>0)
        {
		    print "<script language='Javascript'>";
            print "location.href='create_user.php?col=newuser&st=ex'";
		    print "</script>";
        }
        if($email_num['cnt']>0)
        {
		    print "<script language='Javascript'>";
            print "location.href='create_user.php?col=newuser&st=em'";
		    print "</script>";
        }
	}
	else
	{
		$sql_query="insert into userdetails(first_name,last_name,user_name,password,email,status,user_type)
		values('".$fname."','".$lname."','".$uname."','".$password."','".$email."','".$status."','".$user_type."')";
		if(mysql_query($sql_query))
		{
		    print "<script language='Javascript'>";
		    print "location.href='manageuser.php?col=mnguser&st=ins'";
		    print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='create_user.php?col=newuser&st=er'";
			print "</script>";
		}
	}
}



if($_REQUEST['sub_edit_user_detail'])
{
	$sql_query= mysql_query("select count(*) as max from userdetails where user_name='".$uname."' and user_id!=".$user_id."");
    $sql_query1= mysql_query("select count(*) as max from userdetails where email='".$email."' and user_id!=".$user_id."");
	
	$user_num=mysql_fetch_array($sql_query);
    $email_num=mysql_fetch_array($sql_query1);
	if($user_num['max']>0 || $email_num['max']>0)
	{
        if($user_num['max']>0)
        {
		    print "<script language='Javascript'>";
		    print "location.href='user_editdetails.php?user_id=".$user_id."&col=mnguser&st=ex'";
		    print "</script>";
        }
        if($email_num['max']>0)
        {
		    print "<script language='Javascript'>";
		    print "location.href='user_editdetails.php?user_id=".$user_id."&col=mnguser&st=em'";
		    print "</script>";
        }
	}
	else
	{
		$sql_query="update userdetails set first_Name='".$fname."',last_Name='".$lname."',email='".$email."',status='".$status."', password='".$password."', user_type='".$user_type."' where user_id='".$user_id."'";
		if(mysql_query($sql_query))
		{
    		print "<script language='Javascript'>";
	    	print "location.href='manageuser.php?col=mnguser&st=upt'";
		    print "</script>";
		}
		else
		{
			print "<script language='Javascript'>";
			print "location.href='user_editdetails.php?user_id=".$user_id."&col=mnguser&st=er'";
			print "</script>";
		}
	}
}


?>