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
</header> <!-- end sidenav -->