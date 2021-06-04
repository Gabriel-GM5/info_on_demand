<div class="container">
	<div class="row">
		<div class="col s12">
			<h3>Dashboard</h3>
		</div>
	</div>
	<div class="row">
		<div class="col s6">
			<center>
				<p><strong>Postagens: </strong></p>
			</center>
		</div>
		<div class="col s6">
			<center>
				<p><strong>Visualizações: </strong></p>
			</center>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12">
			<h4>Suas Postagens</h4>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<a class="btn-floating modal-trigger" href="#modalNovaPostagem"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<?php
			if ($posts) {
			?>
				<ul class="collection">
					<?php
					foreach ($posts as $post) {
					?>
						<li class="collection-item avatar">
							<img src="<?php echo base_url('assets/images/sem_miniatura.png') ?>" alt="" class="circle">
							<a href="<?php echo site_url('posts/ver/' . $post->idPost) ?>" target="_blank"><span class="title"><?php echo $post->titulo ?></span>
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
			<?php
			}
			?>
		</div>
	</div>
</div>
<div id="modalNovaPostagem" class="modal">
	<?php
	echo form_open_multipart('dashboard/novaPostagem');
	?>
	<div class="modal-content">
		<h4>Nova Postagem</h4>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_input(array('id' => "titulo", 'name' => "titulo", 'type' => "text", 'class' => "validate", 'value' => set_value('titulo'), 'required' => "required"));
				echo form_label('Título', 'titulo');
				?>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_input(array('id' => "subtitulo", 'name' => "subtitulo", 'type' => "text", 'class' => "validate", 'value' => set_value('subtitulo')));
				echo form_label('Subtítulo', 'subtitulo');
				?>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_textarea(array('id' => "conteudo", 'name' => "conteudo", 'class' => "validate materialize-textarea", 'value' => set_value('conteudo')));
				echo form_label('Conteúdo', 'conteudo');
				?>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field">
				<div class="btn">
					<span>Imagem</span>
					<input type="file" id="imagem" name="imagem" accept="image/*">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field">
				<div class="btn">
					<span>Vídeo</span>
					<input type="file" id="video" name="video" accept="video/*">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field">
				<div class="btn">
					<span>Áudio</span>
					<input type="file" id="audio" name="audio" accept="audio/*">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<?php
		echo form_button(array('class' => "btn primario uploads", 'id' => "action", 'type' => "submit", 'name' => "action", 'content' => 'Salvar'));
		echo form_button(array('class' => "btn secundario modal-close", 'type' => "button", 'name' => "voltar", 'content' => 'Voltar'));
		?>
	</div>
	<?php
	echo form_close();
	?>
</div>
