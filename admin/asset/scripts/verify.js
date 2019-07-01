// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#verify-form").validate({
      rules:
	  {
			
			admin_code: {
		    required: true,
			minlength: 10
			},
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            
			admin_code: {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your activation code!",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Activation code has 10 alphanumeric characters!"
			},
            password:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please provide your password"
                     },
            user_email: "<i class='fa fa-exclamation-triangle'></i>	Please enter a valid email address",
			cpassword:{
						required: "<i class='fa fa-exclamation-triangle'></i> Please retype your password",
						equalTo: "<i class='fa fa-exclamation-triangle'></i> Password doesn't match!"
					  }
       },
	   //submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   /* form submit */
	   
	   
	 

});