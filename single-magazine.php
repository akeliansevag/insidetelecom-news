<?php get_header(); ?>
<?php
$post = get_post();
?>
<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-12 blog__content mb-72">
            <h1 class="page-title"><?= $post->post_title; ?></h1>

            <div>
                <?= do_shortcode(get_field("dflip_book_shortcode")); ?>
            </div>

        </div> <!-- end posts -->

    </div> <!-- end content -->
</div> <!-- end main container -->

<?php get_footer(); ?>