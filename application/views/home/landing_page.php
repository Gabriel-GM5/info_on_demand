<div class="container">
	<div class="row">
		<div class='col s12 m8 offset-m2'>
			<div class="card">
				<div class="card-content">
					<?php
					echo form_open();
					?>
					<div class="row">
						<div class="input-field col s12">
							<?php
							echo form_input(array('id' => "search", 'name' => "search", 'type' => "text", 'class' => "validate", 'required' => "required"));
							echo form_label('Pesquisar', 'search');
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
