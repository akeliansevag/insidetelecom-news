<?php header('Access-Control-Allow-Origin: *'); ?>
<?php get_header(); ?>

<?php


$args = [];

$args['post_type'] = 'magazine';
$args['posts_per_page'] = -1;


$query = new WP_Query($args);
$posts = $query->posts;
?>
<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title">Magazines</h1>

            <div class="row card-row">
                <?php foreach ($posts as $post) : ?>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="">
                                <a href="<?= get_permalink($post->ID) ?>">
                                    <div class="">
                                        <img src="<?= get_the_post_thumbnail_url($p->ID, 'medium-thumb'); ?>" class="" />
                                    </div>
                                </a>

                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="<?= get_permalink($post->ID) ?>"><?= print_title($post) ?></a>
                                    </h2>
                                    <ul class="entry__meta">

                                        <li class="entry__meta-date">
                                            <?php
                                            $time = date("M d, Y", strtotime($post->post_date));
                                            ?>
                                            <?= ucwords($time) ?>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>


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