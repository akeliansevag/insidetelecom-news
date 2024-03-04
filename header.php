<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GR0Q5B11WC"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-GR0Q5B11WC');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' -';
									} ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<link rel="icon" href="<?= get_template_directory_uri() ?>/img/faviconinsidetelecom.png">
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/img/faviconinsidetelecom.png">
	<meta http-equiv="X-UA-Compatible" content="IE=ledge,chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

	<!--for linkedin preview image-->
	<?php if (is_singular("post")) : ?>
		<meta name="image" property='og:image' content='<?= get_the_post_thumbnail_url() ?>' />
	<?php endif; ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152943891-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-152943891-1');
	</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8663501575241425" crossorigin="anonymous"></script> -->

	<?php wp_head(); ?>
</head>

<body class="bg-light style-default style-rounded">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			<div></div>
		</div>
	</div>

	<!-- Bg Overlay -->
	<div class="content-overlay"></div>

	<!-- Sidenav -->
	<header class="sidenav" id="sidenav">

		<!-- close -->
		<div class="sidenav__close">
			<button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
				<i class="ui-close sidenav__close-icon"></i>
			</button>
		</div>

		<!-- Nav -->
		<nav class="sidenav__menu-container">
			<ul class="sidenav__menu" role="menubar">
				<li>
					<a href="#" class="sidenav__menu-url">Home</a>
					<button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
					<ul class="sidenav__menu-dropdown">
						<li><a href="index.html" class="sidenav__menu-url">Home Default</a></li>
						<li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
						<li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
						<li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
						<li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
						<li><a href="index-music.html" class="sidenav__menu-url">Home Music</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Pages</a>
					<button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
					<ul class="sidenav__menu-dropdown">
						<li><a href="about.html" class="sidenav__menu-url">About</a></li>
						<li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
						<li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
						<li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
						<li><a href="404.html" class="sidenav__menu-url">404</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Features</a>
					<button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
					<ul class="sidenav__menu-dropdown">
						<li>
							<a href="#" class="sidenav__menu-url">Single Post</a>
							<button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
							<ul class="sidenav__menu-dropdown">
								<li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
								<li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
								<li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
								<li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
								<li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
								<li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
							</ul>
						</li>
						<li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
					</ul>
				</li>

				<!-- Categories -->
				<li>
					<a href="#" class="sidenav__menu-url">World</a>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Business</a>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Fashion</a>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Lifestyle</a>
				</li>
				<li>
					<a href="#" class="sidenav__menu-url">Advertise</a>
				</li>
			</ul>
		</nav>

		<div class="socials sidenav__socials">
			<a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
				<i class="ui-facebook"></i>
			</a>
			<a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
				<i class="ui-twitter"></i>
			</a>
			<a class="social social-google-plus" href="#" target="_blank" aria-label="google">
				<i class="ui-google"></i>
			</a>
			<a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
				<i class="ui-youtube"></i>
			</a>
			<a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
				<i class="ui-instagram"></i>
			</a>
		</div>
	</header> <!-- end sidenav -->


	<main class="main oh" id="main">

		<!-- Top Bar -->
		<div class="top-bar d-none d-lg-block">
			<div class="container">
				<div class="row">

					<!-- Top menu -->
					<div class="col-lg-6">
						<ul class="top-menu">
							<li><a href="#">About</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>

					<!-- Socials -->
					<div class="col-lg-6">
						<div class="socials nav__socials socials--nobase socials--white justify-content-end">
							<a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
								<i class="ui-facebook"></i>
							</a>
							<a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
								<i class="ui-twitter"></i>
							</a>
							<a class="social social-google-plus" href="#" target="_blank" aria-label="google">
								<i class="ui-google"></i>
							</a>
							<a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
								<i class="ui-youtube"></i>
							</a>
							<a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
								<i class="ui-instagram"></i>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div> <!-- end top bar -->

		<?= get_template_part("template-parts/main-menu"); ?>