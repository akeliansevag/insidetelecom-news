<?php
$menu = wp_get_nav_menu_items('main-menu');
?>
<?php
$menu_name = 'main-menu';
$menuitems = wp_get_nav_menu_items($menu_name);
?>
<!-- Navigation -->
<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Side Menu Button -->
                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                    <span class="nav-icon-toggle__box">
                        <span class="nav-icon-toggle__inner"></span>
                    </span>
                </button>

                <!-- Logo -->
                <a href="<?= home_url() ?>" class="logo">
                    <img class="logo__img" src="<?= get_template_directory_uri() ?>/img/logo_default.png" alt="logo">
                </a>

                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">
                        <?php
                        $count = 0;
                        $submenu = false;
                        foreach ($menuitems as $item) :
                            // set up title and url
                            $title = $item->title;
                            $link = $item->url;

                            // item does not have a parent so menu_item_parent equals 0 (false)
                            if (!$item->menu_item_parent) :
                                // save this id for later comparison with sub-menu items
                                $parent_id = $item->ID;
                        ?>
                                <li class="<?= $menuitems[$count + 1]->menu_item_parent == $parent_id ? 'nav__dropdown' : '' ?>">
                                    <a href="<?php echo $link; ?>" class="title">
                                        <?php echo $title; ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($parent_id == $item->menu_item_parent) : ?>
                                    <?php if (!$submenu) : $submenu = true; ?>
                                        <ul class="nav__dropdown-menu nav__megamenu">
                                            <li>
                                                <div class="nav__megamenu-wrap">
                                                    <div class="row">
                                                        <?php
                                                        $posts = new WP_Query([
                                                            'cat' => $item->object_id,
                                                            'posts_per_page' => 5,
                                                        ]);
                                                        $posts = $posts->posts;
                                                        ?>
                                                        <?php foreach ($posts as $p) : ?>
                                                            <div class="col nav__megamenu-item">
                                                                <article class="entry">
                                                                    <div class="entry__img-holder submenu-image-holder">
                                                                        <a href="<?= get_permalink($p->ID) ?>">
                                                                            <?= get_the_post_thumbnail($p->ID, 'small-thumb', ['class' => 'entry__img submenu-image']); ?>
                                                                        </a>
                                                                        <?php $cat = get_the_category($p->ID); ?>
                                                                        <a href="<?= get_category_link($cat[0]) ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?= $cat[0]->name; ?></a>
                                                                    </div>

                                                                    <div class="entry__body">
                                                                        <h2 class="entry__title">
                                                                            <a href="<?= get_permalink($p->ID) ?>"><?= $p->post_title; ?></a>
                                                                        </h2>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="mega-menu-links">
                                                    <?php endif; ?>
                                                    <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                                                    <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id && $submenu) : ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    <?php $submenu = false;
                                                    endif; ?>
                                <?php endif; ?>
                                <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id) : ?>
                                </li>
                            <?php $submenu = false;
                                endif; ?>
                        <?php $count++;
                        endforeach; ?>
                        <li>
                            <a href="<?= get_term_link(4357) ?>">SERIES</a>
                        </li>
                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->


                <!-- Nav Right -->
                <div class="nav__right">

                    <!-- Search -->
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form" action="<?= home_url() ?>">
                                <input name="s" type="text" placeholder="Search an article" class="nav__search-input">
                                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div> <!-- end nav right -->
            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>