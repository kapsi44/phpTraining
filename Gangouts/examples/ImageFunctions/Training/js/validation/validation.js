function validateName(x){
      // Validation rule
      var re = /[A-Za-z -']$/;
      // Check input
      if(re.test(document.getElementById(x).value)){
        // Style green
        document.getElementById(x).style.background ='#ccffcc';
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
      }else{
        // Style red
        document.getElementById(x).style.background ='#e35152';
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        return false; 
      }
    }
   // id =email
   fgucntio error(id, flag) {
   if (flag === true)   1  === "1"
   document.getElementById(id).style.background ='#ccffcc';
        document.getElementById(id + 'Error').style.display = "block";
    else {
     document.getElementById(x).style.background ='#e35152';
     document.getElementById(id + 'Error').style.display = "none";
    }
   }
   
    // Validate email
    function validateEmail(email){ 
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(re.test(email)){
        
        return true;
      }
       return false;
    }
    
    
    // Validate Select boxes
    function validateSelect(x){
      if(document.getElementById(x).selectedIndex !== 0){
        document.getElementById(x).style.background ='#ccffcc';
        document.getElementById(x + 'Error').style.display = "none";
        return true;
        }else{
        document.getElementById(x).style.background ='#e35152';
        return false; 
      }
    }
    function validateRadio(x){
      if(document.getElementById(x).checked){
        return true;
      }else{
        return false;
      }
    }
    function validateCheckbox(x){
      if(document.getElementById(x).checked){
        return true;
      }
      return false;
     }   
	
	
    
    
    function validateForm(){
      // Set error catcher
      var error = 0;
      // Check name
      
      if(!validateName('name')){
        document.getElementById('nameError').style.display = "block";
        error('name', true)
        error++;
      }
      // Validate email
      
      if(!validateEmail(document.getElementById('email').value)){
        document.getElementById('emailError').style.display = "block";
        error('email', true)
        error++;
      } else {
        error('email', false)
      }
      // Validate animal dropdown box
      
      if(!validateSelect('city')){
        document.getElementById('cityError').style.display = "block";
        error++;
      }
      // Validate Radio
      
      if(validateRadio('male')){
 
      }else if(validateRadio('female')){
         
      }else{
        document.getElementById('genderError').style.display = "block";
        error++;
      }
      if(!validateCheckbox('accept')){
        document.getElementById('termsError').style.display = "block";
        error++;
      }
      
      // Don't submit form if there are errors
      
      if(error > 0){
        return false;
      }
    }     
  
