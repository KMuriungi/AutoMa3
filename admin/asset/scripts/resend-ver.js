// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#resend-email").validate({
      rules:
	  {
			
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            
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