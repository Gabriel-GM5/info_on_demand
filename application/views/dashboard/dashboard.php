<div class="container">
	<div class="row">
		<div class="col s12">
			<h3>Dashboard</h3>
		</div>
	</div>
	<div class="row">
		<div class="col s6">
			<p><strong>Postagens: </strong></p>
		</div>
		<div class="col s6">
			<p><strong>Visualizações: </strong></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12">
			<a class="btn-floating modal-trigger" href="#modalNovaPostagem"><i class="material-icons">add</i></a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">

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
				echo form_input(array('id' => "subTitulo", 'name' => "subTitulo", 'type' => "text", 'class' => "validate", 'value' => set_value('subTitulo'), 'required' => "required"));
				echo form_label('Subtítulo', 'subTitulo');
				?>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_textarea(array('id' => "conteudo", 'name' => "conteudo", 'class' => "validate materialize-textarea", 'value' => set_value('conteudo'), 'required' => "required", 'style' => "min-height:150px;height:100%;"));
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
		echo form_button(array('class' => "btn primario", 'id' => "action", 'type' => "submit", 'name' => "action", 'content' => 'Salvar'));
		echo form_button(array('class' => "btn secundario modal-close", 'type' => "button", 'name' => "voltar", 'content' => 'Voltar'));
		?>
	</div>
	<?php
	echo form_close();
	?>
</div>
