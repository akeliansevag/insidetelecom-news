<?php get_header(); ?>
<?php
$q = null;
if (isset($_GET['s'])) {
    $q = $_GET['s'];
}

if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$query = new WP_Query([
    'posts_per_page' => 10,
    's' => $q,
    'paged' => $paged,
]);
$posts = $query->posts;


/*$author_posts = new WP_Query([
        'posts_per_page'=>3,
        ''
    ]);*/
?>


<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title">Search results for <i>"<?= $q ?>"</i></h1>
            <?php if ($posts) : ?>
                <div class="row card-row">
                    <?php foreach ($posts as $p) : ?>
                        <div class="col-md-6">
                            <?= get_template_part("template-parts/article-card", "", ['post' => $p]) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p class="mt-5">No posts to display.</p>
            <?php endif; ?>

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