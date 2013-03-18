$(document).ready(function(){

	// Add function submitForm as handler
	$('#theContactForm').submit( submitForm );


	// When Contact is clicked - move focus to first field of form
	$('a[href="#contact"]').click( function() {
		$('#contactName').trigger('focus');
	});

});


// Submit form with Ajax
function submitForm() {
	var contactForm = $(this);

	// validate fields

	if ( !$('#contactName').val() || !$('#contactEmail').val() || !$('#contactMessage').val() ){

		// No, display the fill in fields message
		$('.contactFill').fadeIn("slow").addClass("fillText");

	} else {

		// Yes, submit form to PHP script
		if( $('.fillText').length ){
			$('.fillText').removeClass("fillText").fadeOut("fast");
		}

		$('.contactWorking').fadeIn("slow");

		$.ajax( {
			url		:	contactForm.attr( 'action' ) + "?ajax=true",
			type	:	contactForm.attr( 'method' ),
			data	:	contactForm.serialize() + '&contactSend=Send',
			success	:	submitFinished
		});

	}

	// Prevent the default form submission
	return false;

}

// Submit was successful
function submitFinished( response ) {

	response = $.trim( response );
	$('.contactWorking').fadeOut("slow");

	if( response == "success" ){

		//Form submission successful
		$('.contactSuccess').fadeIn("slow").delay(4000).fadeOut("slow");
		$('#contactName').val( "" );
		$('#contactEmail').val( "" );
		$('#contactMessage').val( "" );

		_gaq.push(['_trackPageview','/contact-form']);

	} else if( response == "email" ){

		//Email Validation Didn't Pass
		$('.contactEmail').fadeIn("slow").addClass("fillText");


	} else {

		//Form submission failed
		$('.contactOops').fadeIn("slow").delay(3600).fadeOut("slow");

	}

}



