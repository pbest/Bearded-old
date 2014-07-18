<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
		<link href='//fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css' />
   		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,600' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/webfonts/ss-social.css" media="all" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_template_directory_uri(); ?>/css/webfonts/ss-standard.css" media="all" rel="stylesheet" type="text/css" />

		<!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/html5shiv.min.js"></script>
        <![endif]-->
		<?php wp_head(); ?>
	</head>
	
	<body <?php
	global $post;
	$slug = get_post( $post )->post_name;
	body_class($slug);
	?>>
		
		<div id="wrapper">
		
		<header class="branding" data-0="background-position-y: 25%" data-500="background-position-y: -40%">
    		<div class="branding-wrapper" data-0="opacity: 1" data-180="opacity: 0">
        		<img src="<?php echo get_template_directory_uri(); ?>/img/logo-text.png" /><Br>
      			<h1>Songs reviewed in five words</h1>
      		</div>
     	</header>

     	<nav class="header-nav">
        	<div class="header-nav--block block-left">
          		<a id="nav-play" href="#" class="nav-item"><i class="ss-icon">play</i> Listen</a>
          		<a class="nav-item upload">Submit</a>
        	</div>
        	<a href="#" class="nav-item--home"><img src="<?php echo get_template_directory_uri(); ?>/img/buffalo.png" /></a>
        	<div class="header-nav--block block-right">
          		<a class="nav-item about">About</a>
          		<a href="#" class="nav-item">Blog</a>
        	</div>
        </nav>

			