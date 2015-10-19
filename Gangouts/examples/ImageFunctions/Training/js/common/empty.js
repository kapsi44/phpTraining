function isEmpty(inputVal) {
    var message1, x;
    message1 = document.getElementById("msg1");
    message1.innerHTML = "";
    x = document.getElementById("un").value;
    try { 
        if(inputVal == "") throw "is empty!!";
        if(inputVal == (/^[a-z0-9]/i)) throw "should be in alphaNumeric characters!!";
        }
    catch(err) {
        message1.innerHTML = "*Input " + err;
        
    }
function isAlphaNumeric() {
}

var message2, y;
    message2 = document.getElementById("msg2");
    message2.innerHTML = "";
    y = document.getElementById("email").value;
    try { 
        if(validateEmail(y)) throw "is empty!!";
        if(y.length <6) throw "should have minimum 6 chars!!"
        }
    catch(err) {
        message2.innerHTML = "*Password " + err;
        return false;
    }

}
fuction isEmpty(val)
{
var x = document.getElementById(val).value;


}


function isNumber(element)
{

var num = document.getElementById(element).value;
alert(num);

}

function validate()
{
var mob=document.getElementById("num").val;


rms.aspiresys.com/temployee 

function aero()
{
alert("hell");
}

