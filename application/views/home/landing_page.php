<div class="container">
	<div class="row">
		<div class='col s12 m10 offset-m1'>
			<div class="card">
				<div class="card-content">
					<?php
					echo form_open('home/landing_page');
					?>
					<div class="row">
						<div class="input-field col s12">
							<?php
							echo form_input(array('id' => "termo", 'name' => "termo", 'type' => "text", 'class' => "validate barraBusca", 'value' => $termo));
							echo form_label('Pesquisar', 'termo');
							?>
						</div>
					</div>
					<div class="row">
						<div class="file-field input-field">
							<?php
							echo form_button(array('class' => "btn primario", 'id' => "action", 'type' => "submit", 'name' => "action", 'content' => 'Buscar'));
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
<?php
if ($posts) {
?>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4>Resultados</h4>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<ul class="collection">
					<?php
					foreach ($posts as $post) {
					?>
						<li class="collection-item avatar">
							<img src="<?php echo base_url('assets/images/sem_miniatura.png') ?>" alt="" class="circle">
							<a href="#"><span class="title"><?php echo $post->titulo ?></span>
								<p>
									<?php
									if ($post->subtitulo) {
										echo $post->subtitulo;
									}
									?>
									<br>
									Por <strong><?php echo $post->nomeUsuario ?>&nbsp;<?php echo $post->sobrenomeUsuario ?></strong>
									<br>
								</p>
							</a>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
<?php
}
?>
