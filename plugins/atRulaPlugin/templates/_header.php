<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === '') : ?>
	<div id="update-check">
		<?php echo link_to('Please configure your site base URL', 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
	</div>
<?php endif; ?>

<style type="text/css">
	.header-wrap {
    background-color: #e6e6e6;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), color-stop(50%, #eee), to(#e4e4e4));
    background-image: -webkit-linear-gradient(#fff, #eee 50%, #e4e4e4);
    background-image: -moz-linear-gradient(top, #fff, #eee 50%, #e4e4e4);
    background-image: linear-gradient(#fff, #eee 50%, #e4e4e4);
    background-repeat: no-repeat;
	}
	header.rula {
		height:50px; 
	}

	/*.rula #user-menu { margin-right: 0; }*/
</style>

<div class="header-wrap">
	<header class="rula container">
		<div class="row">
			<div class="span6">
				<?php if (sfConfig::get('app_toggleLogo')): ?>
					<?php echo link_to(image_tag('/plugins/atRulaPlugin/images/logo.png'), '@homepage', array('id' => 'logo', 'rel' => 'home')) ?>
				<?php endif; ?>

				<?php if (sfConfig::get('app_toggleTitle')): ?>
					<h1 id="site-name">
						<?php echo link_to('<span>'.esc_specialchars(sfConfig::get('app_siteTitle')).'</span>', '@homepage', array('rel' => 'home', 'title' => __('Home'))) ?>
					</h1>
				<?php endif; ?>
			</div>
			<div class="span6">
				<nav>
					<?php echo get_component('menu', 'userMenu') ?>
					<?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
				</nav>
			</div>
		</div>	
	</header>
</div>