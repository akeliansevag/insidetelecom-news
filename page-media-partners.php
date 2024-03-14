<?php get_header(); ?>
<?php $media = get_field("media_partners"); ?>

<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title">Media Partners</h1>

            <div class="media-partners">
                <div class="row gx-5">
                    <?php foreach ($media as $key => $m) : ?>
                        <div class="col-6 col-md-3">
                            <div class="media-partner mb-5 px-3 py-3">
                                <a target="_blank" href="<?= $m['link'] ?>">
                                    <img class="white-element" src="<?= $m['image']['sizes']['medium-thumb'] ?>" alt="White media partner logo">
                                </a>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div><!--row-->

            </div><!--media-partners-->
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