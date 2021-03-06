<?php
$menu = '';
if ($logado) {
	$menu .= '<li><a href=' . site_url('home/landing_page') . '><i class="material-icons">search</i></a></li>';
	$menu .= '
	<li>
		<div class="chip btn modal-trigger" data-target="modalUsuario">
    		<img src="' . base_url('assets/images/sem_foto.png') . '" alt="Contact Person">
    		' . $nomeUsuario . '
  		</div>
  	</li>';
?>
	<div id="modalUsuario" class="modal">
		<div class="modal-content">
			<h4><?php echo $nomeUsuario . ' ' . $sobrenomeUsuario ?></h4>
			<div class="collection">
				<a href="<?php echo site_url('dashboard') ?>" class="collection-item">Dashboard</a>
				<a href="#!" class="collection-item">Editar Cadastro</a>
				<a href="<?php echo site_url('home/logout') ?>" class="collection-item">Sair</a>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close btn-flat">Fechar</a>
		</div>
	</div>
<?php
} else {
	$menu .= '<li><a class="btn botaoNavBar" href="' . site_url('home/login') . '">Login</a></li>';
}
$menu .= '
<!--
<li class="switch">
<label>
	<i class="material-icons tiny">brightness_low</i>
    <input type="checkbox">
    <span class="lever"></span>
	<i class="material-icons tiny">brightness_high</i>
</label>
</li>
-->
';
?>

<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper">
			<a href="<?php echo site_url() ?>" class="brand-logo"><img src="<?php echo base_url('assets/icons/Logo.svg') ?>" width="auto" height="56"></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<?php echo $menu ?>
			</ul>
		</div>
	</nav>
</div>

<ul class="sidenav" id="mobile-demo">
	<?php echo $menu; ?>
</ul>
