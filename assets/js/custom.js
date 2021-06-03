var api_url = 'https://info-on-demand.herokuapp.com/api/';

$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
	$('.materialize-textarea').characterCounter();
	getNotificacoes();
});

$('#confirmPassword, #actionCadastrar').on('keyup focusin focusout change click', function () {
	$('#mensConfSenha').remove();
	if ($('#password').val() != $('#confirmPassword').val()) {
		$('#confirmPassword').attr('class', 'validate invalid');
		$('#confirmPassword').parent('div').append('<p id="mensConfSenha">As senhas devem ser iguais!</p>');
		event.preventDefault();
	} else {
		$('#confirmPassword').attr('class', 'validate valid');
	}
});

function getNotificacoes() {
	$.ajax({
		url: api_url + 'getNotificacoes',
		method: "GET",
		success: function (result) {
			if (result != 'null') {
				alert(result);
			}
		}
	});
}

$("form").submit(function (event) {
	$('.modal').modal('close');
	document.getElementById("overlay").style.display = "block";
});
