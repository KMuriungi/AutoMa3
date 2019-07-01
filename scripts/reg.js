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
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#mform1").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken!</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									setTimeout('$(".mform").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+'</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});