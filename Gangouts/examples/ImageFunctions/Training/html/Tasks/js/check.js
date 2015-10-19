function isEmpty(id) {
   var text = document.getElementById(id).value;
   var re= /^(\S)/;    
   if(!re.test(text))
   {
   return false;
   }
   return true;
  
}

function displayError(id,flag) {
	if(flag === true ) {
		document.getElementById(id).style.background ='#e35152';
        document.getElementById(id + 'Error').style.display = "block";
		return false;
	}
	else
		document.getElementById(id).style.background = '#ccffcc';
        document.getElementById(id + 'Error').style.display = "none";
	    return true;
}

function checkName(id) {
	var re = /[A-Za-z -']$/;
	if(re.test(document.getElementById(id).value)) {
      	return true;	
	}
		return false;
}

function checkMobileNumber(id) {
	var re=/([0-9]{10}$)/;
	if(re.test(document.getElementById(id).value)) {
		return true;
	}
	   alert("bad");
	   return false;
}

function checkEqual(id) {
	var text=document.getElementById(id).value;
	var retext=document.getElementById('re'+ id).value;
	if(text == retext) {
		return true;
	}
		return false;
}


 function validateRadio(x) {
      if(document.getElementById(x).checked) {
        return true;
      }else {
        return false;
      }
    }
    

	function validateCheckbox(x) {
      if(document.getElementById(x).checked) {
        return true;
      }
      return false;
    }   

	function validateSelect(x){
      if(document.getElementById(x).selectedIndex !== 0) {
        return true;
        }else {
        return false; 
      }
    }
	
