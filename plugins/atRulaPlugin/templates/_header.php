<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === '') : ?>
	<div id="update-check">
		<?php echo link_to('Please configure your site base URL', 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
	</div>
<?php endif; ?>

<!-- Hacky inline styles -->
<style type="text/css">
	.main {
		margin-top: 15px;
	}
	.main #browse-menu {
		position: relative;
		border: 1px solid #ccc;
		border-radius: 5px;
		width: 100%;
	}

	.main .top-item {
		margin: 0;
	}

	.main .top-dropdown, 
	.main a.top-dropdown:link, 
	.main a.top-dropdown:visited, 
	.main a.top-dropdown:active {
		padding: 0 0 0 12px;
		line-height: 28px;
		width: 100%;
		box-sizing: border-box;
	}

	#search-form-wrapper {
		position: relative;
	}

	#search-form-wrapper form {
		margin-bottom: 0;
	}

	#search-form-wrapper input {
		margin-bottom: 0;
	}

	#search-form-wrapper button {
		display: block;
		width: 30px;
		height: 30px;
		right: 0px;
		position: absolute;
		top: 0px;
		background-color: #1c5793;
		color: white;
		margin-top: 0px;
		font-size: 1.1em;
		border: none;
		-webkit-border-radius: 0 4px 4px 0;
		-moz-border-radius: 0 4px 4px 0;
		border-radius: 0 4px 4px 0;
	}

	#search-form-wrapper button:before {
		font-family: FontAwesome;
		content: "\f002";
	}

	.search-popover {
		top: 30px;
	}

	#search-bar .search-popover {
		top: 25px;
	}

	@media (max-width: 767px) {
		#search-form-wrapper {
			margin-top: 10px;
		}
	}

	@media (max-width: 480px) {
		#browse-menu > a {
			text-indent: 0;
		}
	}
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

	.rula .nav { 
		margin-left: 20px; 
		margin-bottom: 0;
	}
	.rula #user-menu > a { margin-right: 0; }
	@media (max-width: 767px) {
		.span6.logo {
			width: 25%;
			float: left;
		}
		.span6.nav {
			width: 75%;
			float: left;
		}
	}
</style>

<div class="header-wrap">
	<header class="rula container">
		<div class="row">
			<div class="span6 logo">
				<?php if (sfConfig::get('app_toggleLogo')): ?>
					<?php echo link_to(image_tag('/plugins/atRulaPlugin/images/logo.png'), '@homepage', array('id' => 'logo', 'rel' => 'home')) ?>
				<?php endif; ?>

				<?php if (sfConfig::get('app_toggleTitle')): ?>
					<h1 id="site-name" class="hidden-tablet hidden-phone">
						<?php echo link_to('<span>'.esc_specialchars(sfConfig::get('app_siteTitle')).'</span>', '@homepage', array('rel' => 'home', 'title' => __('Home'))) ?>
					</h1>
				<?php endif; ?>
			</div>
			<div class="span6 nav">
				<nav>
					<?php echo get_component('menu', 'userMenu') ?>
					<?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
				</nav>
			</div>
		</div>	
	</header>
</div>

<div class="container">
	<div class="row main">
		<div class="span2 clearfix">
			<?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
		</div>
		<div class="span10 clearfix">
			<?php echo get_component('search', 'box') ?>
		</div>
	</div>
</div>