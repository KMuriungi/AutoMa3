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
			minlength: 12
			},
			department: {
		    required: true,
			},
			yearls: {
		    required: true,
			},
			terms: {
		    required: true,
			},
			vpb_captcha_code: {
		    required: true,
			minlength: 5
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
			terms: "<i class='fa fa-exclamation-triangle'></i> You must agree to terms and conditions of using our site",
			yearls: "<i class='fa fa-exclamation-triangle'></i> Please select your year",
			//vpb_captcha_code: "<i class='fa fa-exclamation-triangle'></i> Please enter the capture code!",
			vpb_captcha_code: {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter the capture code!",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Captcha code has 5 characters"
			},
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

//This function refreshes the security or captcha code when clicked on the refresh link
function vpb_refresh_aptcha()
{
	return $("#vpb_captcha_code").val('').focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

//This function checks to see if the code provided is correct or wrong and displays the appropriate result on the screen to the user
function vpb_submit_captcha()
{
	var vpb_captcha_code = $("#vpb_captcha_code").val();
	
	if(vpb_captcha_code == "")
	{
		$("#captchaResponse").html('<div class="vpb_info" align="left">Please enter the captcha code in the box provided. Thanks.</div>');
		$("#vpb_captcha_code").focus();
	}
	else
	{
		var dataString = 'vpb_captcha_code='+ vpb_captcha_code;
		$.ajax({
			type: "POST",
			url: "captcha_checker.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#captchaResponse").html('<div style="padding-left:100px;margin-bottom:30px;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please wait</font> <img src="load.gif" align="absmiddle" /></div>');
			},
			success: function(response)
			{
				vpb_refresh_aptcha(); //Refresh the Captcha Image on success or on wrong security submitted
				$("#vpb_captcha_code").val('');
				$("#captchaResponse").hide().fadeIn('slow').html(response);
			}
		});
	}
}