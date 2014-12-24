<?php
session_start();
if ($_SESSION["auser_name"]=="")
{
		print "<script language='Javascript'>";
		print "location.href='adminlogin.php?cat=exp'";
		print "</script>";
}
?>