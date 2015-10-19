    function popup() {
        alert("Hello World")
        }

    function requiredValid(){
        var user1=document.getElementById('u1').value;
        if (user1=="")
         {
         alert("enter");
         document.getElementById(x).style.background ='#e35152';
         document.getElementById('ne').style.display = "block";
        }
        }
        
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
