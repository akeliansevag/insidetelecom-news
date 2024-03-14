<?php get_header(); ?>
<?php
$author = get_user_by('id', get_query_var("author"));
$user_last = get_user_meta(get_query_var("author"), 'wpseo_user_schema')[0];
$position = isset($user_last['jobTitle']) ? $user_last['jobTitle'] : '';
$company = isset($user_last['worksFor']) ? $user_last['worksFor'] : '';
$description = isset(get_user_meta(get_query_var("author"), 'description')[0]) ? get_user_meta(get_query_var("author"), 'description')[0] : '';

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

if ($author) {
    $args['author'] = $author->ID;
}

$query = new WP_Query($args);
$posts = $query->posts;

?>

<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title"><?= $author->display_name ?></h1>
            <?php if ($description) : ?>
                <p class="mb-4"><?= $description ?></p>
            <?php endif; ?>
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
<?php get_footer(); ?>