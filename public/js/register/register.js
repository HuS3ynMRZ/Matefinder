$( "#register_form" ).on( "submit", function () {
	let role = $( "#role" );
	let role_validation_error = $( "#role_validation_error" );
	let name = $( "#name" );
	let name_validation_error = $( "#name_validation_error" );
	let email = $( "#email" );
	let email_validation_error = $( "#email_validation_error" );
	let password = $( "#password" );
	let password_validation_error = $( "#password_validation_error" );
	let confirm_password = $( "#confirm_password" );
	let confirm_password_validation_error = $( "#confirm_password_validation_error" );

	let input_field = $( ".input_field" );
	let input_field_validation_error = $( ".input_field_validation_error" );

	input_field.removeClass( "invalid_input" );
	input_field_validation_error.text( "" );

	let error_found = false;

	if ( ! role.val() ) {
		role.addClass( "invalid_input" );
		role_validation_error.text( "The role field is required." );
		error_found = true;
	}

	if ( ! name.val() ) {
		name.addClass( "invalid_input" );
		name_validation_error.text( "The name field is required." );
		error_found = true;
	}

	if ( ! email.val() ) {
		email.addClass( "invalid_input" );
		email_validation_error.text( "The email field is required." );
		error_found = true;

	} else if ( ! isValidEmail( email.val() ) ) {
		email.addClass( "invalid_input" );
		email_validation_error.text( "Please enter a valid email address." );
		error_found = true;
	}

	if ( ! password.val() ) {
		password.addClass( "invalid_input" );
		password_validation_error.text( "The password field is required." );
		error_found = true;

	} else if ( password.val().length < 6 ) {
		password.addClass( "invalid_input" );
		password_validation_error.text( "The password must be at least 6 characters." );
		error_found = true;
	}

	if ( ! confirm_password.val() ) {
		confirm_password.addClass( "invalid_input" );
		confirm_password_validation_error.text( "The confirm password field is required." );
		error_found = true;
	
	} else if ( password.val() != confirm_password.val() ) {
		confirm_password.addClass( "invalid_input" );
		confirm_password_validation_error.text( "The password is not matched." );
		error_found = true;
	}

	if ( error_found ) {
		return false;
	}
} );