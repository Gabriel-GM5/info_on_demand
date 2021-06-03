$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').keyup(function () {
	if ($('#password').val() != $(this).val()) {
		$('#mensConfSenha').remove();
		$(this).parent('div').append('<p id="mensConfSenha">As senhas devem ser iguais!</p>');
		event.preventDefault();
	}
});
