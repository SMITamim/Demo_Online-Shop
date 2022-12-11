function validatename()
{
    var fname=document.getElementById("fname").values
    if(fname.length<3)
    {
        document.getElementById("nameerror").innerHTML="name must be more than 3 chars";
        return false;

    }
    else
    {
        document.getElementById("nameerror").innerHTML="name is ok";
        return true;

    }
}