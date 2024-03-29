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
        <?php wp_nav_menu([
            'menu' => 2072,
            'menu_class' => 'sidenav__menu',
            'walker' => new AWP_Menu_Walker_Mobile()
        ]);
        ?>

    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="https://www.facebook.com/insidetelecomnews" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="https://twitter.com/insidetelecom_" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
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
    </div>
</header> <!-- end sidenav -->