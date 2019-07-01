// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#mform1").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 5
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
					  required: "<i class='fa fa-exclamation-triangle'></i> Please Enter User's Full Name (First & Surname)",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Both names should have atleast 6 characters"
			},
			reg_number: "<i class='fa fa-exclamation-triangle'></i> Please Enter User's Registration Number e.g TLE/25/13",
			department: "<i class='fa fa-exclamation-triangle'></i> Please Select User's Department",
			yearls: "<i class='fa fa-exclamation-triangle'></i> Please Select User's Year",
			phone_number: {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please Enter User's Phone Number",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Phone Number Should have 10 digits (Kenyan Format)"
			},
            password:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please Provide User's Preffered Password",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Password should have atleast 5 characters"
                     },
            user_email: "<i class='fa fa-exclamation-triangle'></i>	Please Enter a valid Email Address for User",
			cpassword:{
						required: "<i class='fa fa-exclamation-triangle'></i> Please retype User's Password",
						equalTo: "<i class='fa fa-exclamation-triangle'></i> Password doesn't match!"
					  }
       },
	   //submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   /* form submit */
	   
	   
	 

});