$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
});

$('#confirmPassword').keyup(function () {
	'use strict';
	if ($('#password').val() != $('#confirmPassword').val()){
		alert('Teste');
	}
});
