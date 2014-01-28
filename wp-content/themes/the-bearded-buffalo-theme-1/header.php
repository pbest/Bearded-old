<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
		<link href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|Reenie+Beanie" rel="stylesheet" type="text/css">
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
		
		<header id="header">
			
	   </header>
	   <nav id="main-navigation">
	     
	   </nav>

			