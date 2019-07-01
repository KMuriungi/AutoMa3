// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#mform1").validate({
      rules:
	  {
			
			password: {
			required: true,
			minlength: 5,
			maxlength: 15
			},
			passwordold: {
			required: true
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
	   },
       messages:
	   {
            
            password:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please provide a password",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Password should have atleast 5 characters"
                     },
			passwordold:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please provide your current password"
                     },
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