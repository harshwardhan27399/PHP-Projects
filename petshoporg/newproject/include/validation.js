function valChar(event)
{
	//alert("infunction");
	if(!((event.keyCode >= 65) && (event.keyCode <= 90) || (event.keyCode >= 97) && (event.keyCode <= 122) || (event.keyCode == 8) || (event.keyCode == 32)))
	{
		event.preventDefault();
		alert("Please Enter Character only");
		return false;
		//$('#txtUserNm').focus();
		
	}
	else
	{
		return true;
	}
	
}
//For Number only
function valNum(event)
{
	if((event.keyCode >= 48) && (event.keyCode <= 57))
	{
		return true;
	}
	else
	{
		alert("Please Enter Number only");
		event.preventDefault();
	}
	
}
//For Floating Number
function valFloatNum(event)
{
	
	if(((event.keyCode >= 48) && (event.keyCode <= 57))|| (event.keyCode==46))
	{
		
		return true;
	}
	else
	{
		alert("Please Enter Numbers only");
		event.preventDefault();
		return false;
	}
	
}
//For AadharNum Validation
function valAadhar(ctr)
{
	var val=ctr.value;
	if(val!="")
	{
		if(val.length!=12)
		{
			alert("Please Check your Aadhar number, it should be 12 digits");
		}
	}
	else
	{
		return true;
	}
}

//For MobileNum Validation
function valMobile(ctr)
{
	val=ctr.value;
	if(val.length==10)
	{
		var first=val[0];
		alert(first);
		if(first!=9)
		{
			if(first!=8)
			{
				if(first!=7)
				{
					alert("please heck your Mobile number it must be start with 9/8/7");
				}
				else
				{
					return true;
				}
			}
			else
			{
				return true;
			}
			
		}
		else
		{
			return true;
		}
		//alert(first);
	}
	else
	{
		alert("Please Check your mobile number It should be 10 digits");
	}
}

                                 //For Email Validation
function valEmail(ctr)
{
		//var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		var email_regex=/^[a-zA-Z0-9]{1,10}@[a-zA-Z]{1,10}.(com|org|in|cc)$/;
	if(email_regex.test(ctr.value))
	{
		//alert('if');
		return true;
	}
	else
	{
		alert('Please enter valid email address');
		
	}
}