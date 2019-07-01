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
			subject: {
		    required: true,
			},
			message: {
		    required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name:  {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter your name",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Both names should have atleast 3 characters"
			},
			subject: "<i class='fa fa-exclamation-triangle'></i> Please enter your subject",
			message: "<i class='fa fa-exclamation-triangle'></i> Please enter your message",
            user_email: "<i class='fa fa-exclamation-triangle'></i>	Please enter a valid email address",
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
			url  : 'includes/contact-process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp;<img src="ajax-loader.gif" /> Sending... ');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						/*$("#btn-login").html('<img src="ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "../home.php"; ',4000); */
						$("#success").fadeIn(1000, function(){						
				$("#success").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Message sent</div>');
									});
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Send Message');
									});
					}
			  }
			});
				return false;
		}
	   /* form submit */
	   
	   
	 

});