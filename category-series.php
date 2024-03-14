<?php get_header(); ?>
<?php
$taxonomy = null;
$children = null;
if (isset(get_queried_object()->taxonomy)) {
    $taxonomy = get_queried_object();
}

$children = get_term_children($taxonomy->term_id, 'category');

$series = [];
foreach ($children as $s) {
    $series[] = get_term($s);
}
?>

<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title"><?= $taxonomy->name ?></h1>

            <div class="row card-row">
                <?php foreach ($series as $se) : ?>
                    <?php $image = get_field("category_image", $se); ?>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="<?= get_term_link($se) ?>">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="<?= $image['sizes']['mvp-large-thumb']; ?>" src="<?= $image['sizes']['mvp-large-thumb']; ?>" class="entry__img it-cover lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="<?= get_term_link($se) ?>"><?= $se->name; ?></a>
                                    </h2>
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