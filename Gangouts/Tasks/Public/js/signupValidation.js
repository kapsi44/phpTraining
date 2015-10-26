document.ready(function() {
	$("#signupForm").validate({
	rules: {
		firstname:"required",
		lastname :"required",	
		username: {
			required:true
			minlength:2
		},
		password : {
			required:true,
			minlength:5
		},
		confirm_password: {
			required:true,
			minlength:5,
			equalTo: "#password"
		},
		email: {
			required:true,
			email: true
		},
		messages: {
				firstname:"Please enter your Firstname",
				lastname :"Please enter your Lastname",
				username :{
					required:"Please enter a username",
					minlength:"Your Username should consists of atleast 2 characters",
				},
				password :{
					required:"Please provide a password",
					minlength:"Your Password must be atleast 5 characters long",
				},
				confirm_password :{
					required:"Please re-enter the password",
					minlength:"Your Password should consists of atleast 5 characters",
					equalTo :"Please enter the same password"
				},
				
		},
		 errorPlacement: function(error, element) {
				error.insertAfter('.form-group'); //So i putted it after the .form-group so it will not include to your append/prepend group.
			}, 
			highlight: function(element) {
				$(element).closest('.form-group').addClass('has-error');
			},
			unhighlight: function(element) {
				$(element).closest('.form-group').removeClass('has-error');
			}
	}
	}
	)
});