<?php
$post = "";
if ($args['post']) {
    $post = $args['post'];
}
?>
<?php if ($post) : ?>
    <article class="entry card">
        <div class="entry__img-holder card__img-holder">
            <a href="<?= get_permalink($post->ID) ?>">
                <div class="thumb-container thumb-70">
                    <img data-src="<?= get_the_post_thumbnail_url($post->ID); ?>" src="<?= get_the_post_thumbnail_url($post->ID); ?>" class="entry__img it-cover lazyload" alt="" />
                </div>
            </a>
            <?php $cat = get_the_category($post->ID); ?>
            <a href="<?= get_category_link($cat[0]) ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?= $cat[0]->name; ?></a>
        </div>

        <div class="entry__body card__body">
            <div class="entry__header">

                <h2 class="entry__title">
                    <a href="<?= get_permalink($post->ID) ?>"><?= print_title($post) ?></a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                        <?php $author = get_the_author_meta('display_name', $post->post_author); ?>
                        <span>by</span>
                        <a href="<?= get_author_posts_url($post->post_author) ?>"><?= $author ?></a>
                    </li>
                    <li class="entry__meta-date">
                        <?php
                        $time = date("M d, Y", strtotime($post->post_date));
                        ?>
                        <?= ucwords($time) ?>
                    </li>
                </ul>
            </div>
            <div class="entry__excerpt two-lines">
                <p><?= get_the_excerpt($post->ID); ?></p>
            </div>
        </div>
    </article>
<?php endif; ?>