
$('document').ready(function()
{ 
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
			user_regnumber: {
            required: true,
            },
	   },
       messages:
	   {
            password:{
                      required: "<i class='fa fa-exclamation-circle'></i> Please enter your password"
                     },
			user_email: "<i class='fa fa-exclamation-triangle'></i>	Please enter a valid email address",
            user_regnumber: "<i class='fa fa-exclamation-circle'></i> Please enter your registration number",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'login_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "indexadmin.php"; ',4000);
					}
					else if(response=="okstud"){
									
						$("#btn-login").html('<img src="ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "indexuser.php"; ',4000);
					}
					else if(response=="oklec"){
									
						$("#btn-login").html('<img src="ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "indexco.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});