<?php
$menu = '';
if ($logado) {
	$menu .= '<li><a class="dropdown-trigger btn" href="#!" data-target="dropdownUsuario">' . $nomeUsuario . '<i class="material-icons right">arrow_drop_down</i></a></li>';
	$menu .= '
	<ul id="dropdownUsuario" class="dropdown-content">
		<li><a href="#!">Editar</a></li>
		<li class="divider"></li>
		<li><a href="' . site_url('home/logout') . '">Sair</a></li>
	</ul>';
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

<?php
if ($logado) {
?>
	<ul id="dropdownUsuario" class="dropdown-content">
		<li><a href="#!">Editar</a></li>
		<li class="divider"></li>
		<li><a href="<?php echo site_url('home/logout') ?>">Sair</a></li>
	</ul>
<?php
}
?>

<ul class="sidenav" id="mobile-demo">
	<?php echo $menu; ?>
</ul>
