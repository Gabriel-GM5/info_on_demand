$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').keyup(function () {
	$('#mensConfSenha').remove();
	if ($('#password').val() != $(this).val()) {
		$(this).parent('div').append('<p id="mensConfSenha">As senhas devem ser iguais!</p>');
	}
});
