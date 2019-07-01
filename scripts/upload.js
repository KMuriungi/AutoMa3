// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#mform1").validate({
      rules:
	  {
			doc_name: {
		    required: true,
			minlength: 5
			},
			yearls: {
		    required: true,
			},
			year: {
		    required: true,
			},
			radio: {
		    required: true,
			},
			doc_Course: {
		    required: true,
			},
			doc_file: {
		    required: true,
			},
	   },
       messages:
	   {
            doc_name:  {
					  required: "<i class='fa fa-exclamation-triangle'></i> Please enter document name)",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Both names should have atleast 3 characters"
			},
			reg_number: "<i class='fa fa-exclamation-triangle'></i> Please enter your Registration Number e.g TLE/25/13",
			department: "<i class='fa fa-exclamation-triangle'></i> Please select your department",
			yearls: "<i class='fa fa-exclamation-triangle'></i> Please select document level",
			year: "<i class='fa fa-exclamation-triangle'></i> Please select document academic year",
			doc_course: "<i class='fa fa-exclamation-triangle'></i> Please enter document course code",
			radio: "<i class='fa fa-exclamation-triangle'></i> Please select document semester",
			doc_file: "<i class='fa fa-exclamation-triangle'></i> Please choose document file",
            password:{
                      required: "<i class='fa fa-exclamation-triangle'></i> Please provide a password",
                      minlength: "<i class='fa fa-exclamation-triangle'></i> Password should have atleast 5 characters"
                     }
       },
	   //submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   /* form submit */
	   
	   
	 

});