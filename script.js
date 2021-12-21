var popUp;

 
function SetControlValue(controlID, newDate, isPostBack)
{
    popUp.close();
    document.forms[0].elements[controlID].value=newDate;
    __doPostBack(controlID,'');
}

function OpenPopupPage (pageUrl, controlID, isPostBack)
{
    popUp=window.open(pageUrl+'?controlID='+controlID+'&isPostBack='+ isPostBack,'popupcal', 'width=250,height=300,left=200,top=250'); 
}
function DeleteMsg()
{
    if(confirm('Are you sure you want to delete?')== true)
        {
            return true;            
        }
        return false;
}

function checkNumeric(objName,minval, maxval,comma,period,hyphen)
{
	var numberfield = objName;
	if (chkNumeric(objName,minval,maxval,comma,period,hyphen) == false)
	{
		numberfield.select();
		numberfield.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function chkNumeric(objName,minval,maxval,comma,period,hyphen)
{
    // only allow 0-9 be entered, plus any values passed
    // (can be in any order, and don't have to be comma, period, or hyphen)
    // if all numbers allow commas, periods, hyphens or whatever,
    // just hard code it here and take out the passed parameters
    var checkOK = "0123456789" + comma + period + hyphen;
    var checkStr = objName;
    var allValid = true;
    var decPoints = 0;
    var allNum = "";

    for (i = 0;  i < checkStr.value.length;  i++)
    {
    ch = checkStr.value.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
    if (ch == checkOK.charAt(j))
    break;
        if (j == checkOK.length)
        {
            allValid = false;
            break;
        }
        if (ch != ",")
        allNum += ch;
    }
    if (!allValid)
    {	
        alertsay = "Please enter only numeric values in the field."
        objName.value='';
        //alertsay = alertsay + checkOK + "\" in the field."
        alert(alertsay);
        return (false);
    }

        // set the minimum and maximum
        var chkVal = allNum;
        var prsVal = parseInt(allNum);
        if (chkVal != "" && !(prsVal >= minval && prsVal <= maxval))
        {
        alertsay = "Please enter a value greater than or "
        alertsay = alertsay + "equal to \"" + minval + "\" and less than or "
        alertsay = alertsay + "equal to \"" + maxval + "\" in the \"" + checkStr.name + "\" field."
        alert(alertsay);
        return (false);
        }
}

   function CreatePopUp(URL)
    {
       day=new Date();
       id=day.getTime();           
                
       window.open(URL,null,'left=100, top=100, height=500, width=800, status=no, resizable= 0, scrollbars= 1, toolbar= no,location=1, menubar= no');
       return false;                    
    }
    
   





		                         
