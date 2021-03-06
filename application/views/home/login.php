<div class="container">
	<div class="row">
		<div class='col s12 m8 l6 offset-m2 offset-l3'>
			<div class="card">
				<div class="card-content">
					<span class="card-title">Login</span>
					<?php
					echo form_open('home/logar');
					?>
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
						<center>
							<div class="input-field col s12">
								<?php
								echo form_button(array('class' => "btn primario", 'type' => "submit", 'name' => "action", 'content' => 'Entrar'));
								?>
							</div>
							<div class="input-field col s6">
								<a href="<?php echo site_url('home/cadastro') ?>">Recuperar senha!</a>
							</div>
							<div class="input-field col s6">
								<a href="<?php echo site_url('home/cadastro') ?>">Cadastre-se!</a>
							</div>
						</center>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
