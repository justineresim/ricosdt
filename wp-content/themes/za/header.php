<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
		<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/img/icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/img/icons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/img/icons/manifest.json">
		<link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#222222">
		<link rel="shortcut icon" href="/img/icons/favicon.ico">
		<meta name="msapplication-config" content="/img/icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Great+Vibes|Lato:400,300,700,400italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="all">

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header">
				<div class="container">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Logo" class="logo-img logo-white">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="Logo" class="logo-img logo-black">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>

			</header>
			<!-- /header -->
