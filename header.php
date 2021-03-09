<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">

		<?php wp_head(); ?>

	</head>
	<body>

		<!-- wrapper -->
		<div class="wrapper">
			
			<!-- header -->
			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<a class="header-logo" href="<?php bloginfo('url');?>">
								<img src="<?php bloginfo('template_url');?>/static/images/logo-spidertheme-red-extend.png" alt="">
							</a>
						</div>
						
						<div class="col-6">
							<?php spidertheme_nav(); ?>

							<div class="hamburguer">
								<div class="hamburguer__item"></div>
								<div class="hamburguer__item"></div>
								<div class="hamburguer__item"></div>
							</div>
						</div>
					</div>
				</div>
				
			</header>
			<!-- /header -->
