<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
	<?php wp_head();?>
</head>
<body>
	<div id="header">

		<a href="http://localhost/wordpress" >
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="">
    </a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.html">home</a>
			</li>
			<li>
				<a href="about.html">about</a>
			</li>
			<li>
				<a href="gallery.html">gallery</a>
			</li>
			<li>
				<a href="blog.html">blog</a>
			</li>
			<li>
				<a href="contact.html">contact</a>
			</li>
		</ul>
	</div>