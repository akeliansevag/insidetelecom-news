<?php
$posts = [];
$category_id = null;
if ($args['category_id']) {
    $posts = new WP_Query([
        'cat' => $args['category_id'],
        'posts_per_page' => 5,
    ]);
    $posts = $posts->posts;

    $category = get_the_category_by_ID($args['category_id']);
}

?>

<?php if ($posts) : ?>
    <!-- Technology -->
    <div class="col-md-6">
        <div class="title-wrap title-wrap--line">
            <h3 class="section-title"><?= $category ?></h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_the_post_thumbnail_url($posts[0]->ID); ?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="<?= get_permalink($posts[0]->ID) ?>"><?= print_title($posts[0]) ?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <?php $author = get_the_author_meta('display_name', $posts[0]->post_author); ?>
                                    <span>by</span>
                                    <a href="<?= get_author_posts_url($posts[0]->post_author) ?>"><?= $author ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?php
                                    $time = date("M d, Y", strtotime($posts[0]->post_date));
                                    ?>
                                    <?= ucwords($time) ?>
                                </li>
                            </ul>
                        </div>
                        <a href="<?= get_permalink($posts[0]->ID) ?>" class="thumb-url"></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-6">
                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                    <?php foreach ($posts as $key => $post) : if ($key == 0) continue; ?>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry">
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="<?= get_permalink($post->ID) ?>"><?= print_title($post) ?></a>
                                    </h3>
                                </div>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div> <!-- end technology -->
<?php endif; ?>