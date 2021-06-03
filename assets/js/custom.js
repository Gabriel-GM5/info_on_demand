$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword, #actionCadastrar').on('keyup focusin focusout change click', function () {
	$('#mensConfSenha').remove();
	if ($('#password').val() != $(this).val()) {
		$('#confirmPassword').attr('class', 'validate invalid');
		$('#confirmPassword').parent('div').append('<p id="mensConfSenha">As senhas devem ser iguais!</p>');
		event.preventDefault();
	} else {
		$(this).attr('class', 'validate valid');
	}
});
