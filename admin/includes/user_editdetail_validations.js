function validation()
{
	if(document.frm.uname.value=="")
	{
		alert("Please enter the User Name");
		document.frm.uname.focus();
		return false;
	}
	if(document.frm.fname.value=="")
	{
		alert("Please enter the First Name");
		document.frm.fname.focus();
		return false;
	}
	else if(document.frm.lname.value=="")
	{
		alert("Please enter the Last Name");
		document.frm.lname.focus();
		return false;
	}
	else if(document.frm.pwd.value=="")
	{
		alert("Please enter the Password");
		document.frm.pwd.focus();
		return false;
	}
	else if(document.frm.repwd.value=="")
	{
		alert("Please enter the Re-type Password");
		document.frm.repwd.focus();
		return false;
	}
	else if(document.frm.repwd.value!=document.frm.pwd.value)
	{
		alert("Password Mismatch");
		document.frm.repwd.value="";
		document.frm.pwd.value="";
		document.frm.repwd.focus();
		return false;
	}
	else if(document.frm.email.value=="")
	{
		alert("Please enter Email");
		document.frm.email.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function checkEmail()
{
	var email=document.getElementById(id);
	var str=new String(email.value);
	if (str=="")
	{
		return false;
	}
	if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(str))
	{
		return true;
    }
	
    alert("Invalid E-mail Address");
   	email.value="";
   	return false;
}


function onload()
{
	document.frm.fname.focus();
}


function getconfirm(val)
{
	if(confirm(val))
	{
		return true;
	}
	else
	return false;
}


function goback()
{
	if(confirm("Are you sure want to Go Back to Manage User ?"))
	{
		location.href="manageuser.php?col=mnguser";
	}
	else
	return false;
}