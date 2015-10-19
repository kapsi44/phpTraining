function toy()
{
alert("hello");
}

function valid(element)
{
var x=document.getElementById(element).value;
if(x=="");
{
alert("please enter name");
return false;
}
return true;
}
