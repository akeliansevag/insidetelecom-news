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
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<!--for linkedin preview image-->
	<?php if (is_singular("post")) : ?>
		<meta name="image" property='og:image' content='<?= get_the_post_thumbnail_url() ?>' />
	<?php endif; ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152943891-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-152943891-1');
	</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8663501575241425" crossorigin="anonymous"></script>

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

	<?= get_template_part("template-parts/side-menu"); ?>


	<main class="main oh" id="main">

		<!-- Top Bar -->
		<div class="top-bar d-none d-lg-block">
			<div class="container">
				<div class="row">

					<!-- Top menu -->
					<div class="col-lg-6">
						<?= wp_nav_menu(['menu' => 'sidebar', 'menu_class' => 'top-menu']); ?>
					</div>

					<!-- Socials -->
					<div class="col-lg-6">
						<div class="socials nav__socials socials--nobase socials--white justify-content-end">
							<a class="social social-facebook" href="https://www.facebook.com/insidetelecomnews" target="_blank" aria-label="facebook">
								<i class="ui-facebook"></i>
							</a>
							<a class="social social-x" href="https://x.com/insidetelecom_" target="_blank" aria-label="twitter">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="18px" height="18px">
									<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
										<g transform="scale(5.12,5.12)">
											<path d="M5.91992,6l14.66211,21.375l-14.35156,16.625h3.17969l12.57617,-14.57812l10,14.57813h12.01367l-15.31836,-22.33008l13.51758,-15.66992h-3.16992l-11.75391,13.61719l-9.3418,-13.61719zM9.7168,8h7.16406l23.32227,34h-7.16406z"></path>
										</g>
									</g>
								</svg>
							</a>

							<a class="social social-youtube" href="https://www.youtube.com/channel/UCAjXVGAApTJCllvep9CuJaA/" target="_blank" aria-label="youtube">
								<i class="ui-youtube"></i>
							</a>
							<a class="social social-instagram" href="https://www.instagram.com/insidetelecom.news/?hl=en" target="_blank" aria-label="instagram">
								<i class="ui-instagram"></i>
							</a>
							<a class="social social-linkedin" href="https://www.linkedin.com/company/inside-telecom/" target="_blank" aria-label="linkedin">
								<i class="ui-linkedin"></i>
							</a>

							<a class="social social-whatsapp" href="https://whatsapp.com/channel/0029Vb7OJuOGzzKZ2ZyDH60G" target="_blank" aria-label="whatsapp">
								<i class="ui-whatsapp"></i>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div> <!-- end top bar -->

		<?= get_template_part("template-parts/main-menu"); ?>