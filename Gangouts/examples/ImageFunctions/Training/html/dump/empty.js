function isEmpty() {

    var username=document.getElementById("un").value; 
    var password=document.getElementById("pwd").value;
    var msg=document.getElementById("message");
    msg.innerHTML = "";
    alert("hello baby!!");
    try {
        if(username == "") throw "UserName is Empty";
        if(password == "") throw "Password is Empty";
    }
    
    catch(err) {
         msg.innerHTML= "Check " + err;
         
    } 
    }
