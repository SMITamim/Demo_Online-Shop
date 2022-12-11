function valid()
{
    var uname=document.getElementById("uname").value;
    if(uname.length<3)
    {
        document.getElementById("nameerror").innerHTML="Name must be more that 3 character";
        return false;
    }
    else
    {
        document.getElementById("nameerror").innerHTML="Good to go";
        return true;
    }
}

function snameError()
{
    var uname=document.getElementById("sname").value;
    if(sname.length<3)
    {
        document.getElementById("nameerror").innerHTML="Seller Name can't be emty";
        return false;
    }
}

function stError()
{
    var uname=document.getElementById("sname").value;
    if(sname.length<3)
    {
        document.getElementById("nameerror").innerHTML="Seller type can't be emty";
        return false;
    }
}

function isValid(){
			
    var valid = true;
    var username=document.forms["adding"]["uname"].value;
    var password=document.forms["adding"]["pass"].value;
    
    
    if(uname==="")
    {
        valid = false;
        document.getElementById('unameErr').innerHTML=" Field cannot be empty";
        
    }

    if(pass==="")
    {
        valid = false;
        document.getElementById('passErr').innerHTML=" Field cannot be empty";
        
    }

    
    return valid;
}
