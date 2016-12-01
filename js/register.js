function validatephone(key) {      
        var phone = key.value;				
        if((phone.match(/^[0-9]+$/) == null) || phone.length != 10)
		{
			document.getElementById("phoneerror").innerHTML="Invalid Phone no.";
			document.register.phone.value="";
			document.register.phone.focus();
		}	
		else
		{
			document.getElementById("phoneerror").innerHTML="";
		}
} 
function validatepass(key) {      
		var pass = key.value;
        if(pass.length<6)
		{
			document.getElementById("passerror").innerHTML="Invalid Password";
			document.register.pass.value="";
			document.register.pass.focus();
		}	
		else
		{
			document.getElementById("passerror").innerHTML="";
		}
}
function validatemail(key) { 
		var x = key.value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
			document.getElementById("mailerror").innerHTML="Invalid Email-id";
			document.register.email.value="";
			document.register.email.focus();
		}
		else
		{
			document.getElementById("mailerror").innerHTML="";			
		}			
}