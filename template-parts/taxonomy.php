<?php
$taxonomy = null;
$children = null;
if (isset(get_queried_object()->taxonomy)) {
    $taxonomy = get_queried_object();
}


if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$args = [];
$args['posts_per_page'] = 10;
$args['paged'] = $paged;
if ($taxonomy && $taxonomy->taxonomy == 'category') {
    $args['category__in'] = array($taxonomy->term_id);
    $children = get_term_children($taxonomy->term_id, 'category');
}

if ($taxonomy && $taxonomy->taxonomy == 'post_tag') {
    $args['tag__in'] = array($taxonomy->term_id);
}

$query = new WP_Query($args);
$posts = $query->posts;

?>

<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title"><?= $taxonomy->name ?></h1>

            <div class="row card-row">
                <?php foreach ($posts as $p) : ?>
                    <div class="col-md-6">
                        <?= get_template_part("template-parts/article-card", "", ['post' => $p]) ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <nav class="pagination">
                <?php
                $big = 999999999; // need an unlikely integer

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $query->max_num_pages,
                    'next_text' => "<i class='ui-arrow-right'></i>",
                    'prev_text' => "<i class='ui-arrow-left'></i>"
                ));
                ?>
            </nav>
        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
            <?= get_template_part("template-parts/sidebar/circle-posts") ?>
            <?= get_template_part("template-parts/sidebar/newsletter") ?>
            <?= get_template_part("template-parts/sidebar/social") ?>
        </aside> <!-- end sidebar -->

    </div> <!-- end content -->
</div> <!-- end main container -->