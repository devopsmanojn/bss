function validateForm()
{
			
	var x=document.forms["contact"] ["name"].value;
	if(x==null || x=="")
	{
		alert("Please Enter Your name")  //Last Name Validator
		//document.contact.paddr1.focus();
		return false;
	}
	
	var x=document.forms["contact"] ["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.lenght)
	{
		alert("Please Enter A Valid Email Address");  //Email Validator
		//document.contact.email.focus();
		return false;
	}
	
	var x=document.forms["contact"] ["phone"].value;
	if(x==null || x=="")
	{
		alert("Please Enter Your Mobile number ")  //Last Name Validator
		//document.contact.pstation1.focus();
		return false;
	}
	
	var x=document.forms["contact"] ["message"].value;
	if(x==null || x=="")
	{
		alert("Please Write Your Comments")  //Last Name Validator
		//document.contact.pinno1.focus();
		return false;
	}
	
	
	
	
}
