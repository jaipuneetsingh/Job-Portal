function validation()
{
	if(document.frm.company.value=="")
	{
		alert("Please enter the Company Name");
		document.frm.company.focus();
		return false;
	}
	if(document.frm.email.value=="")
	{
		alert("Please enter the Email-ID");
		document.frm.email.focus();
		return false;
	}
	else if(document.frm.url.value=="")
	{
		alert("Please enter the URL");
		document.frm.url.focus();
		return false;
	}
	else if(document.frm.title.value=="")
	{
		alert("Please enter the Job Title");
		document.frm.title.focus();
		return false;
	}
	else if(document.frm.location.value=="")
	{
		alert("Please enter the Location of Job");
		document.frm.location.focus();
		return false;
	}
	
	else if(document.frm.description.value=="")
	{
		alert("Please enter Description about Job");
		document.frm.description.focus();
		return false;
	}
	else if(document.frm.to_apply.value=="")
	{
		alert("Please enter details about How To Apply for Job");
		document.frm.to_apply.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function checkEmail()
{
	var email=document.frm.email;
	var str=new String(email.value);
	if ((str==null)||(str==""))
	{
		return false;
	}
	if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(str))
	{
		return true;
    }
    alert("Invalid E-mail Address");
   	email.value="";
   	return (false)

}


function onload()
{
	document.frm.company.focus();
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
	if(confirm("Are you sure want to Go Back to Manage Jobs ?"))
	{
		location.href="managejobs.php?col=mngjob";
	}
	else
	return false;
}