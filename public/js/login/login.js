$( "#login_form" ).on( "submit", function () {
	let email = $( "#email" );
	let email_validation_error = $( "#email_validation_error" );
	let password = $( "#password" );
	let password_validation_error = $( "#password_validation_error" );

	let input_field = $( ".input_field" );
	let input_field_validation_error = $( ".input_field_validation_error" );

	input_field.removeClass( "invalid_input" );
	input_field_validation_error.text( "" );

	let error_found = false;

	if ( ! email.val() ) {
		email.addClass( "invalid_input" );
		email_validation_error.text( "The email field is required." );
		error_found = true;
	}

	if ( ! password.val() ) {
		password.addClass( "invalid_input" );
		password_validation_error.text( "The password field is required." );
		error_found = true;
	}

	if ( error_found ) {
		return false;
	}
} );