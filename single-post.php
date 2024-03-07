<?php get_header(); ?>
<?php
$post = get_post();
$cat = get_the_category($post->ID);
$time = human_time_diff(get_the_time('U', $post->ID), current_time('timestamp'));
$author = get_the_author_meta('display_name', $post->post_author);

$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
$youtube_video_url = get_field("youtube_video_url");
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
                                    <a href="#" rel="next">How to design your first mobile app</a>
                                </div>
                            </div>
                            <div class="entry-navigation--right">
                                <span class="entry-navigation__label">Next Post</span>
                                <i class="ui-arrow-right"></i>
                                <div class="entry-navigation__link">
                                    <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
                                </div>
                            </div>
                        </div>
                    </nav>



                    <!-- Related Posts -->
                    <section class="section related-posts mt-40 mb-0">
                        <div class="title-wrap title-wrap--line title-wrap--pr">
                            <h3 class="section-title">Related Articles</h3>
                        </div>

                        <!-- Slider -->
                        <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_template_directory_uri() ?>/img/content/carousel/carousel_post_1.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">9 Things to Consider Before Accepting a New Job</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_template_directory_uri() ?>/img/content/carousel/carousel_post_2.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_template_directory_uri() ?>/img/content/carousel/carousel_post_3.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">(Infographic) Is Work-Life Balance Even Possible?</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_template_directory_uri() ?>/img/content/carousel/carousel_post_4.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">Is Uber Considering To Sell its Southeast Asia Business to Grab?</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_template_directory_uri() ?>/img/content/carousel/carousel_post_2.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                        </div> <!-- end slider -->

                    </section> <!-- end related posts -->

                </article> <!-- end standard post -->

            </div> <!-- end content box -->
        </div> <!-- end post content -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

            <!-- Widget Popular Posts -->
            <aside class="widget widget-popular-posts">
                <h4 class="widget-title">Popular Posts</h4>
                <ul class="post-list-small">
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_1.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_2.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_3.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_4.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                </ul>
            </aside> <!-- end widget popular posts -->

            <!-- Widget Newsletter -->
            <aside class="widget widget_mc4wp_form_widget">
                <h4 class="widget-title">Newsletter</h4>
                <p class="newsletter__text">
                    <i class="ui-email newsletter__icon"></i>
                    Subscribe for our daily news
                </p>
                <form class="mc4wp-form" method="post">
                    <div class="mc4wp-form-fields">
                        <div class="form-group">
                            <input type="email" name="EMAIL" placeholder="Your email" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                        </div>
                    </div>
                </form>
            </aside> <!-- end widget newsletter -->

            <!-- Widget Socials -->
            <aside class="widget widget-socials">
                <h4 class="widget-title">Let's hang out on social</h4>
                <div class="socials socials--wide socials--large">
                    <div class="row row-16">
                        <div class="col">
                            <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                                <span class="social__text">Facebook</span>
                            </a><!--
                  --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                                <span class="social__text">Twitter</span>
                            </a><!--
                  --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                                <span class="social__text">Youtube</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                                <span class="social__text">Google+</span>
                            </a><!--
                  --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                                <span class="social__text">Instagram</span>
                            </a><!--
                  --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                                <i class="ui-rss"></i>
                                <span class="social__text">Rss</span>
                            </a>
                        </div>
                    </div>
                </div>
            </aside> <!-- end widget socials -->

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->
</div> <!-- end main container -->

<?php get_footer(); ?>