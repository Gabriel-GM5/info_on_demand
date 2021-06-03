$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').keyup(function () {
	if ($('#password').val() != $(this).val()) {
		$(this).parent('div').append('<p>As senhas devem ser iguais!</p>')
		event.preventDefault();
	}
});
