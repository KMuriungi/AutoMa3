// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#update-profile").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			reg_number: {
		    required: true,
			minlength: 8
			},
			phone_number: {
		    required: true,
			minlength: 10
			},
			department: {
		    required: true,
			},
			yearls: {
		    required: true,
			},
			password: {
			required: true,
			minlength: 5,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name:  {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your Full Name (First & Surname)",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Both names should have atleast 3 characters"
			},
			reg_number: "<i class='fa fa-exclamation-triangle'></i> Please enter your Registration Number e.g TLE/25/13",
			department: "<i class='fa fa-exclamation-triangle'></i> Please select your department",
			yearls: "<i class='fa fa-exclamation-triangle'></i> Please select your year",
			phone_number: {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your Phone Number",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Phone Number should have 10 digits (Kenyan Format)"
			},
            password:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please provide a password",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Password should have atleast 5 characters"
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