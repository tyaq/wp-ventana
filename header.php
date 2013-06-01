<?php 
/*
@package Ventana
@since:1.0 
*/

?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="screen">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon128.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="256x256" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<meta name="msvalidate.01" content="ED28141E02E61C8D610C29FFEDD88E34" />
		<!-- Begin Google Analytics -->
            	<script type="text/javascript">
            
            	var _gaq = _gaq || [];
            	_gaq.push(['_setAccount', 'UA-41085222-1']);
		_gaq.push(['_trackPageview']);
            	(function () {
                	var ga = document.createElement('script');
                	ga.type = 'text/javascript';
                	ga.async = true;
                	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

                	var s = document.getElementsByTagName('script')[0];
                	s.parentNode.insertBefore(ga, s);
            		})();
            	</script>
		<!-- End Google Analytics -->
	</head>

	<body class="<?php if (is_home()) {echo $page = "home";} ; if (is_single()) {echo $page = "single";}; if (is_page('about')) {echo $page = "biography";}; if (is_page('resume')) {echo $page = "resume";} ;?>">
		<div class="container clearfix <?php echo $page; ?> ">

			<header>
				<h1 class='masthead'><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name');?></a></h1>
			</header>