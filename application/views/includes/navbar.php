<?php
$menu = '';
if ($logado) {
	$menu .= '
	<li>
		<div class="chip btn modal-trigger" data-target="modalUsuario">
    		<img src="' . base_url('assets/images/sem_foto.png') . '" alt="Contact Person">
    		' . $nomeUsuario . '
  		</div>
  	</li>';
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

<div id="modalUsuario" class="modal">
	<div class="modal-content">
		<h4>Modal Header</h4>
		<p>A bunch of text</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	</div>
</div>

<ul class="sidenav" id="mobile-demo">
	<?php echo $menu; ?>
</ul>
