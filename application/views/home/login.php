<div class='row'>
	<div class='col s12 m6'>

	</div>
	<div class='col s12 m6'>
		<div class='row'>
			<div class='col'>
				<div class="card">
					<div class="card-content">
						<span class="card-title">Login</span>
						<?php
						echo form_open('home/logar');
						?>
						<div class="row">
							<div class="input-field col s12">
								<?php
								echo form_input(array('id' => "email", 'type' => "email", 'class' => "validate"));
								echo form_label('E-mail', 'email');
								?>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<?php
								echo form_input(array('id' => "password", 'type' => "password", 'class' => "validate"));
								echo form_label('Senha', 'password');
								?>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<?php
								echo form_button(array('class' => "btn", 'type' => "submit", 'name' => "action", 'content' => 'Entrar'));
								?>
							</div>
						</div>
						<?php
						echo form_close();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
