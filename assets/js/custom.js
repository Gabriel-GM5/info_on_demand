$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').on('keyup focusin focusout change', function () {
	$('#mensConfSenha').remove();
	if ($('#password').val() != $(this).val()) {
		$(this).attr('class', 'validate invalid');
		$(this).parent('div').append('<p id="mensConfSenha">As senhas devem ser iguais!</p>');
	} else {
		$(this).attr('class', 'validate valid');
	}
});
