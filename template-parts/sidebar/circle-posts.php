<?php
$posts = [];
$title = "Latest Articles";
if ($args['posts']) {
    $posts = $args['posts'];
} else {
    $latest = new WP_Query([
        'category__not_in' => 177,
        'posts_per_page' => 4,
    ]);
    $posts = $latest->posts;
}

if ($args['title']) {
    $title = $args['title'];
}

?>

<?php if ($posts) : ?>
    <!-- Widget Popular Posts -->
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title"><?= $title ?></h4>
        <ul class="post-list-small">
            <?php foreach ($posts as $post) : ?>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder circle-holder">
                            <div class="thumb-container thumb-100">
                                <a href="<?= get_permalink($post->ID) ?>">
                                    <img data-src="<?= get_the_post_thumbnail_url($post->ID); ?>" src="<?= get_the_post_thumbnail_url($post->ID); ?>" alt="" class="it-cover lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="<?= get_permalink($post->ID) ?>"><?= print_title($post) ?></a>
                            </h3>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <?php $author = get_the_author_meta('display_name', $post->post_author); ?>
                                    <span>by</span>
                                    <a href="<?= get_author_posts_url($post) ?>"><?= $author ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?php
                                    $time = date("M d, Y", strtotime($post->post_date));
                                    ?>
                                    <?= ucwords($time) ?>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside> <!-- end widget popular posts -->

<?php endif; ?>