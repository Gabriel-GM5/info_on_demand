<?php
$menu = '
<li><a href="sass.html">Sass</a></li>
<li><a href="badges.html">Components</a></li>
<li><a href="collapsible.html">Javascript</a></li>
<li><a href="mobile.html">Mobile</a></li>
<li>
Modo escuro:
<div class="switch">
<label>
    <input type="checkbox">
    <span class="lever"></span>
</label>
</div>
</li>
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
