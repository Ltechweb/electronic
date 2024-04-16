//LOGIN
//**************************************
//**************************************
//**************************************
$(document).ready(function(){
	$('input[name=ltechWebLoginForm]').click(function(){

		let email = 'clarisemadina@gmail.com';
		let password = 'DO2301SE63';

		// let email = $('input[name=stu_email]').val();
		// let password = $('input[name=stu_password]').val();

		let goingToUrl = $('input[name=currentGoToPage]').val();
		let ltechWebLoginForm= $(this).val();

		var  url = "assets/inc/login.inc.php";
		
		$.ajax({
			url:url,
			method:"POST", 
			data:{
				stu_email:email,
				stu_password:password,
				goingToUrl:goingToUrl,
				ltechWebLoginForm:ltechWebLoginForm
			},
			success:function(datas){
				$('#displayingLoginResult').html(datas);
			}
		});
		return false;
	}); //the end of login

	$('#userIconLogin').click(function(){
		$('#login_popup-wrapper').show();
		$('.xtendexMenu').hide();
		$('#regist_popup-wrapper').hide();
	});

	$('#openLogin').click(function(){
		$('#login_popup-wrapper').show();
		$('.xtendexMenu').hide();
	});

	$('#deviateLogin').click(function(){
		$('#login_popup-wrapper').show();
		$('.xtendexMenu').hide();
	});

	$('#closeLogin').click(function(){
		$('#login_popup-wrapper').hide();
	});
});





