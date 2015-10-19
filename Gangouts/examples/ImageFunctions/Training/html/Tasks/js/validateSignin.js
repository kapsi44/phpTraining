function validateSignin() {

	/*var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;
	var error=0;*/
 
		if(!isEmpty('username')) {
			
		return	displayError('username',true);
		}
		
		if(!isEmpty('password')) {
		    return displayError('password',true);
		}

}
