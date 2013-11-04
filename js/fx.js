$(document).ready(function(){

$('#submit-button').click(function(){
	var email = $('#email-input-field');
	var dataString = email;
	var confirm = email.val();
		if(email == '' || !validateEmail(confirm)){
		//if(email == '' ){
				$('#email-input-field').focus().css({'border-color':'red','outline':'red'});
			} else{
				$.ajax({
					type:'POST',
					url: 'db_api.php',
					data: dataString,
					beforeSend:function(){
						//	Appearnce
						$('#email-input-field').focus().css({'border-color':'green','outline':'green'});
						$('#email-collection').append('<div class="loader"><img src="img/485.gif"></div>');
						$('#submit-button').css("display","none");
						$('#email-input-field').attr('disabled', 'disabled'); 
						// Function
					},
					complete:function(){
						//	Appearance
						$('#email-input-field').val('');
						$('#email-input-field').css("display","none");
						$('.loader').css("display","none");
						$('#email-collection').css("display","none");

						//	Function
						$('#after-submit').append('<div class="e-recieved"><span class="icon-checkmark-circle"></span>Thank You! <span class="e-success">\'' +confirm +'\'</span> recieved successfully!</div>');
					}
				});
			}
		return false;
	});


});
/********************* Validation Functions ***************************/
function validateEmail($email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if( !emailReg.test( $email)){
		return false;
	} else {
		return true;
	}
}