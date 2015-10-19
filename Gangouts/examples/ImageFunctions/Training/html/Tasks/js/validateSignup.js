function validateSignup() {
	var error=0;
	/*var eMailId         = document.getElementById('email').value;
	var confirmEmail    = document.getElementById('confirmEmail').value;
	var password        = document.getElementById('password').value;
	var confirmPassword = document.getElementById('confirmPassword').value;
	var name 			= document.getElementById('name').value;
	var mobileno 		= document.getElementById('mobileno').value;
	var street 			= document.getElementById('street').value;
	var country 	    = document.getElementById('country').value;
	var dob 			= document.getElementById('dob').value;
	var year			= document.getElementById('year').value;
	var acceptcheck     = document.getElementById('accept').value;
	*/
	
	
	if(!isEmpty('email')) {
       return displayError('email', true);
        
     } 
	
	if(!isEmpty('confirmEmail')) {
       return displayError('confirmEmail', true);
        
     }        
	
	if(!isEmpty('password') {
        error++;
	return diplayError('password',true)
      } 
      
	  if(!isEmpty('confirmPassword') {
        error++;
	return diplayError('confirmPassword',true)
      } 
	  // Validate city 
}
 /*     if (!validateSelect('city')) {
        document.getElementById('cityError').style.display = "block";
        error++;
      }
      // Validate Radio
      
      if(validateRadio('male')) {
 
      }else if(validateRadio('female')) {
         
      }else {
        document.getElementById('genderError').style.display = "block";
        error++;
      }
      if(!validateCheckbox('accept')) {
        document.getElementById('termsError').style.display = "block";
        error++;
      }
      
      // Don't submit form if there are errors
      
      if(error > 0){
        return false;
      }
    }     
	
}

function validationSignin() {

var error=0;

		if(!isEmpty('username')) {
		return displayError('username',true);
		error++;
		} else {
		return displayError('username',false);	
		}	

		if(!isEmpty('pwd')) {
		return displayError('pwd',true);
		error++;
		} else {
		return displayError('pwd',false);	
		}	
	

	}
	
	
}
*/
