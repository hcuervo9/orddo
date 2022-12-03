function validateEmail(){
    
	var emailField = document.getElementById('email');
	
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	if( validEmail.test(emailField.value) ){
		alert('Email is valid, continue with form submission');
		return true;
	}else{
		alert('Email is invalid, skip form submission');
		return false;
	}
} 