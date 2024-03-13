<!-- Widget Categories -->
<aside class="widget widget_categories">
    <?php
    $categories = get_categories(array(
        'orderby' => 'count',
        'order' => 'DESC',
        'number' => 6 // Get top 5 categories
    ));
    ?>
    <h4 class="widget-title">Categories</h4>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?> <span class="categories-count"><?= $category->count ?></span></a></li>
        <?php endforeach; ?>
    </ul>
</aside> <!-- end widget categories -->