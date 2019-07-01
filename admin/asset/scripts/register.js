// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#mform1").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			first_name: {
		    required: true,
			minlength: 3
			},
			surname: {
		    required: true,
			minlength: 3
			},
			reg_number: {
		    required: true,
			minlength: 8
			},
			phone_number: {
		    required: true,
			minlength: 12
			},
			department: {
		    required: true,
			},
			terms: {
		    required: true,
			},
			yearls: {
		    required: true,
			},
			joining_code: {
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
			first_name:  {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your First Name",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Name should have atleast 3 characters"
			},
			surname:  {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your Surname",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Name should have atleast 3 characters"
			},
			reg_number: "<i class='fa fa-exclamation-triangle'></i> Please enter your Registration Number e.g TLE/25/13",
			department: "<i class='fa fa-exclamation-triangle'></i> Please select your department",
			terms: "<i class='fa fa-exclamation-triangle'></i> You must agree to terms and conditions of using this site!",
			yearls: "<i class='fa fa-exclamation-triangle'></i> Please select your year",
			joining_code: "<i class='fa fa-exclamation-triangle'></i> Please enter the lecturer joining code provided by administrator",
			phone_number: {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your Phone Number",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Phone Number should have 12 digits (This format <strong>254</strong>724******)"
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