$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').keyup(function () {
	if ($('#password').val() != $(this).val()) {
		alert('Teste');
	}
});
