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
			<div class="col s12 m4">
				<h6>Posts</h6>
				<ul class="collection">
					<?php
					foreach ($posts as $post) {
					?>
						<li class="collection-item avatar">
							<?php
							if (isset($post->imagem)) {
							?>
								<img src="data:image/*;base64,<?php echo base64_encode($post->imagem) ?>" alt="" class="circle">
							<?php
							} else {
							?>
								<img src="<?php echo base_url('assets/images/sem_miniatura.png') ?>" alt="" class="circle">
							<?php
							}
							?>
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
			</div>
			<div class="col s12 m4">
				<h6>Imagens</h6>
				<ul class="collection">
					<?php
					foreach ($posts as $post) {
						if (isset($post->imagem)) {
					?>
							<li class="collection-item avatar">
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
								<img src="data:image/*;base64,<?php echo base64_encode($post->imagem) ?>" class="materialboxed" width="240" />
							</li>
					<?php
						}
					}
					?>
				</ul>
			</div>
			<div class="col s12 m4">
				<h6>Videos</h6>
				<ul class="collection">
					<?php
					foreach ($posts as $post) {
						if (isset($post->video)) {
					?>
							<li class="collection-item avatar">
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
								<video width="240" height="auto" controls>
									<source src="data:video/*;base64,<?php echo base64_encode($post->video) ?>" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</li>
					<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
	</div>
<?php
}
?>
