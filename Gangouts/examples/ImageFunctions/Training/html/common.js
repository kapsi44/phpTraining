//check for empty textbox 

function isEmpty(val) {
    var textfield=document.getElementById(val).value;
        if(val == "") {
            //alert("Please fill the Required Boxes");
            document.getElementById(val).style.background ='#e35152';
            return false;
            }
            document.getElementById(textfield).style.background ='#ccffcc';
			return true;
 }


//check for Length

function checkLength(val) {
    var len=document.getElementById(val).value;
    if(len.length<6) {
    
        //alert("Password length should be more than six");
        document.getElementById(val).style.background ='#D500F9';
        return false;
        }
		document.getElementById(len).style.background ='#ccffcc';
		return true;
 }
 
//*Check for number

function checkType(val) {
    var textfield=document.getElementById(val).value;
    if(isNaN(textfield)) {
    return true;
    }
	alert("Field should Contains ALphabets");
	return false;
}

//check for Radio
function validateRadio(x) {
      if(document.getElementById(x).checked){
        return true;
      }else{
        return false;
      }
    }
    
//check for Checkboxes
function validateCheckbox(x) {
      if(document.getElementById(x).checked){
        return true;
      }
      return false;
	}
	
	


function checkPassword(val) {
  
  if (isEmpty(val)) {
     return true;
  }
  if (checkLength(val)) {   
     return true;
  }   
} 


