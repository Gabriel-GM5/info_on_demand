<div class="container">
	<div class="row">
		<center>
			<div class="col s12">
				<h3><?php echo $post->titulo ?></h3>
				<h4><?php echo $post->subtitulo ?></h4>
			</div>
		</center>
	</div>
	<div class="row">
		<center>
			<div class="col s6">
				<p><strong>Criado em: </strong><?php echo $post->criacao ?></p>
			</div>
			<div class="col s6">
				<p><strong>Última edição em: </strong><?php echo $post->ultimaEdicao ?></p>
			</div>
			<div class="col s12">
				<p>Por: <strong><?php echo $post->nomeUsuario ?>&nbsp;<?php echo $post->sobrenomeUsuario ?></strong></p>
			</div>
		</center>
	</div>
	<?php
	if ($post->imagem) {
	?>
		<div class="row">
			<div class="col s12">
				<img src="data:image/jpeg;base64,<?php echo base64_encode($result['image']) ?>" />
			</div>
		</div>
	<?php
	}
	?>
	<div class="row">
		<div class="col s12">
			<p><?php echo $post->conteudo ?></p>
		</div>
	</div>
</div>
