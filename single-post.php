<?php get_header(); ?>
<?php
$post = get_post();
$cat = get_the_category($post->ID);
$time = human_time_diff(get_the_time('U', $post->ID), current_time('timestamp'));
$author = get_the_author_meta('display_name', $post->post_author);

$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
$youtube_video_url = get_field("youtube_video_url");

$next_post = get_next_post(true);
$prev_post = get_previous_post(true);
?>

<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- post content -->
        <div class="col-lg-8 blog__content mb-72">
            <div class="content-box">

                <!-- standard post -->
                <article class="entry mb-0">

                    <div class="single-post__entry-header entry__header">
                        <a class="entry__meta-category entry__meta-category--label" href="<?= get_category_link($cat[0]) ?>"><?= $cat[0]->name; ?></a>
                        <h1 class="single-post__entry-title">
                            <?= $post->post_title; ?>
                        </h1>

                        <div class="entry__meta-holder">
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="<?= get_author_posts_url($post->post_author) ?>"><?= $author; ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?= date("F d, Y", strtotime($post->post_date)); ?>
                                </li>
                            </ul>

                            <ul class="entry__meta">
                                <li class="entry__meta-views">
                                    <span>Reading time: <?= get_reading_time($post) ?></span>
                                </li>

                            </ul>
                        </div>
                    </div> <!-- end entry header -->

                    <div class="entry__img-holder">
                        <?= get_the_post_thumbnail($post->ID, 'large', ['class' => 'entry__img']); ?>
                    </div>

                    <div class="entry__article-wrap">

                        <!-- Share -->
                        <div class="entry__share">
                            <div class="sticky-col">
                                <?php $url = get_permalink(); ?>
                                <div class="socials socials--rounded socials--large">
                                    <a class="social social-whatsapp" title="whatsapp" aria-label="whatsapp" href="https://api.whatsapp.com/send?text=<?= $url ?>" data-action="share/whatsapp/share" target="_blank">
                                        <i class="ui-whatsapp"></i>
                                    </a>
                                    <a class="social social-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" title="facebook" target="_blank" aria-label="facebook">
                                        <i class="ui-facebook"></i>
                                    </a>
                                    <a class="social social-twitter" href="https://twitter.com/intent/tweet?url=<?= $url ?>" title="twitter" target="_blank" aria-label="twitter">
                                        <i class="ui-twitter"></i>
                                    </a>
                                    <a class="social social-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $url ?>" title="linkedin" target="_blank" aria-label="linkedin">
                                        <i class="ui-linkedin"></i>
                                    </a>

                                </div>
                            </div>
                        </div> <!-- share -->

                        <div class="entry__article">
                            <?php if ($post->post_content) : ?>
                                <?= the_content(); ?>
                            <?php endif; ?>

                            <?php $tags = wp_get_post_tags($post->ID); ?>
                            <?php if ($tags) : ?>
                                <!-- tags -->
                                <div class="entry__tags">
                                    <i class="ui-tags"></i>
                                    <span class="entry__tags-label">Tags:</span>
                                    <?php foreach ($tags as $tag) : ?>
                                        <a rel="tag" href="<?= get_tag_link($tag) ?>"><?= $tag->name; ?></a>
                                    <?php endforeach; ?>
                                </div> <!-- end tags -->
                            <?php endif; ?>

                        </div> <!-- end entry article -->
                    </div> <!-- end entry article wrap -->


                    <!-- Prev / Next Post -->
                    <nav class="entry-navigation">
                        <div class="clearfix">
                            <div class="entry-navigation--left">
                                <i class="ui-arrow-left"></i>
                                <span class="entry-navigation__label">Previous Post</span>
                                <div class="entry-navigation__link">
                                    <a href="<?= get_permalink($prev_post->ID) ?>" rel="next"><?= print_title($prev_post) ?></a>
                                </div>
                            </div>
                            <div class="entry-navigation--right">
                                <span class="entry-navigation__label">Next Post</span>
                                <i class="ui-arrow-right"></i>
                                <div class="entry-navigation__link">
                                    <a href="<?= get_permalink($next_post->ID) ?>" rel="prev"><?= print_title($next_post) ?></a>
                                </div>
                            </div>
                        </div>
                    </nav>

                </article> <!-- end standard post -->

            </div> <!-- end content box -->
        </div> <!-- end post content -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
            <div class="sticky">
                <?= get_template_part("template-parts/sidebar/circle-posts", "", ['title' => 'Related Articles', 'posts' => $related]); ?>
                <?= get_template_part("template-parts/sidebar/newsletter"); ?>
                <?= get_template_part("template-parts/sidebar/social"); ?>
            </div>

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->
</div> <!-- end main container -->

<?php get_footer(); ?>