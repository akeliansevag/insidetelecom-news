<?php
$menu = wp_get_nav_menu_items('main-menu');
?>
<?php
$menu_name = 'main-menu';
$menuitems = wp_get_nav_menu_items($menu_name);
?>
<ul class="navbar-nav">
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
            <li class="item">
                <a href="<?php echo $link; ?>" class="title">
                    <?php echo $title; ?>
                </a>
            <?php endif; ?>
            <?php if ($parent_id == $item->menu_item_parent) : ?>
                <?php if (!$submenu) : $submenu = true; ?>
                    <div class="mega-menu p pt-3">
                        <div class="mega-menu-posts px-4 pt-2 pb-3">
                            <?php
                            $posts = new WP_Query([
                                'cat' => $item->object_id,
                                'posts_per_page' => 5,
                            ]);
                            $posts = $posts->posts;
                            ?>
                            <?php foreach ($posts as $p) : ?>
                                <div class="mega-menu-post px-2">
                                    <div class="mega-menu-image">
                                        <a href="<?= get_permalink($p->ID) ?>">
                                            <?= get_the_post_thumbnail($p->ID, 'small-thumb'); ?>
                                        </a>
                                    </div>
                                    <div class="mega-menu-title mt-2">
                                        <a href="<?= get_permalink($p->ID) ?>">
                                            <?= $p->post_title; ?>
                                        </a>
                                    </div>
                                    <div class="mega-menu-meta mt-2">
                                        <?php
                                        $time = date("F d, Y", strtotime($p->post_date));
                                        ?>
                                        <span><?= ucwords($time) ?></span>
                                    </div>
                                </div><!--post-->
                            <?php endforeach; ?>
                        </div>
                        <div class="mega-menu-links py-3 mt-1 px-2">
                        <?php endif; ?>
                        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                        <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id && $submenu) : ?>
                        </div>
                    </div>
                <?php $submenu = false;
                        endif; ?>

            <?php endif; ?>
            <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id) : ?>
            </li>
        <?php $submenu = false;
            endif; ?>
    <?php $count++;
    endforeach; ?>
    <li class="item">
        <a href="<?= get_term_link(4357) ?>" class="title">
            Series
        </a>
    </li>
</ul>