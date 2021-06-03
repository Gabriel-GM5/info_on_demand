<div class="container">
	<div class="row">
		<div class="col s12">
			<h3>Cadastro</h3>
		</div>
	</div>
</div>
<div class="container">
	<?php
	echo form_open('home/cadastrar');
	?>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_input(array('id' => "first_name", 'name' => "first_name", 'type' => "text", 'class' => "validate", 'maxlength' => "45", 'required' => "required"));
			echo form_label('Nome', 'first_name');
			?>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_input(array('id' => "last_name", 'name' => "last_name", 'type' => "text", 'class' => "validate", 'maxlength' => "45", 'required' => "required"));
			echo form_label('Sobrenome', 'last_name');
			?>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_input(array('id' => "email", 'name' => "email", 'type' => "email", 'class' => "validate", 'maxlength' => "45", 'required' => "required"));
			echo form_label('E-mail', 'email');
			?>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_input(array('id' => "password", 'name' => "password", 'type' => "password", 'class' => "validate", 'maxlength' => "45", 'required' => "required"));
			echo form_label('Senha', 'password');
			?>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_input(array('id' => "confirmPassword", 'name' => "confirmPassword", 'type' => "password", 'class' => "validate", 'maxlength' => "45", 'required' => "required"));
			echo form_label('Confirmar Senha', 'confirmPassword');
			?>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<?php
			echo form_button(array('class' => "btn primario", 'type' => "submit", 'name' => "action", 'content' => 'Cadastrar'));
			echo form_button(array('class' => "btn secundario", 'type' => "button", 'name' => "voltar", 'content' => 'Voltar', 'onclick' => "window.location.href = '" . site_url('home/login') . "';"));
			?>
		</div>
	</div>
	<?php
	echo form_close();
	?>
</div>
