<?php get_header(); ?>

<?php
$daily_news = new WP_Query([
   'cat' => 177,
   'posts_per_page' => 4,
]);
$daily_news = $daily_news->posts;


$latest = new WP_Query([
   'category__not_in' => 177,
   'posts_per_page' => 4,
]);
$latest = $latest->posts;


$promoted_post = get_post(48036);
if ($promoted_post) {
   array_unshift($latest, $promoted_post);
}

$promoted_post_2 = get_post(48103);
if ($promoted_post_2) {
   array_unshift($latest, $promoted_post_2);
}

// $promoted_post_3 = get_post(46004);
// if ($promoted_post_3) {
//    array_unshift($latest, $promoted_post_3);
// }


$technology_all = new WP_Query([
   'cat' => [8, 582, 1621, 581, 559, 558, 2058, 557, 509, 883, 846, 1612],
   'posts_per_page' => 4,
]);
$technology_all = $technology_all->posts;

$technology_cryptocurrency = new WP_Query([
   'cat' => [581],
   'posts_per_page' => 4,
]);
$technology_cryptocurrency = $technology_cryptocurrency->posts;


$technology_cybersecurity = new WP_Query([
   'cat' => [559],
   'posts_per_page' => 4,
]);
$technology_cybersecurity = $technology_cybersecurity->posts;

$technology_fintech = new WP_Query([
   'cat' => [558],
   'posts_per_page' => 4,
]);
$technology_fintech = $technology_fintech->posts;

$technology_intelligent_tech = new WP_Query([
   'cat' => [2058],
   'posts_per_page' => 4,
]);
$technology_intelligent_tech = $technology_intelligent_tech->posts;

$editors = new WP_Query([
   'meta_key' => 'editors_choice',
   'meta_value' => true,
   'posts_per_page' => 8,
]);
$editors = $editors->posts;

$events = new WP_Query([
   'post_type' => 'event',
   'posts_per_page' => 2,
]);
$events = $events->posts;

$magazines = new WP_Query([
   'post_type' => 'magazine',
   'posts_per_page' => 6,
]);
$magazines = $magazines->posts;

$media_partners = get_field("media_partners", 2747);

$medtech = new WP_Query([
   'cat' => [509],
   'posts_per_page' => 4,
]);
$medtech = $medtech->posts;

?>

<!-- Trending Now -->
<div class="container">
   <div class="trending-now">
      <span class="trending-now__label">
         <i class="ui-flash"></i>
         <span class="trending-now__text d-lg-inline-block d-none">Daily News</span>
      </span>
      <div class="newsticker">
         <ul class="newsticker__list">
            <?php foreach ($daily_news as $news) : ?>
               <li class="newsticker__item"><a href="<?= get_permalink($news->ID); ?>" class="newsticker__item-url"><?= print_title($news); ?></a></li>
            <?php endforeach; ?>
         </ul>
      </div>
      <div class="newsticker-buttons">
         <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
         <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
      </div>
   </div>
</div>

<!-- Featured Posts Grid -->
<section class="featured-posts-grid">
   <div class="container">
      <div class="row row-8">

         <div class="col-lg-6">
            <?php foreach ($latest as $key => $late) : ?>
               <?php if ($key > 2) {
                  break;
               } ?>
               <!-- Small post -->
               <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                  <article class="entry card post-list featured-posts-grid__entry">
                     <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?= get_the_post_thumbnail_url($late->ID); ?>)">
                        <a href="<?= get_permalink($late->ID) ?>" class="thumb-url"></a>
                        <img src="<?= get_the_post_thumbnail_url($late->ID); ?>" alt="" class="entry__img d-none">
                        <?php $cat = get_the_category($late->ID); ?>
                        <a href="<?= get_category_link($cat[0]) ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?= $cat[0]->name; ?></a>
                     </div>

                     <div class="entry__body post-list__body card__body">
                        <h2 class="entry__title two-lines">
                           <a href="<?= get_permalink($late->ID) ?>"><?= print_title($late) ?></a>
                        </h2>
                        <ul class="entry__meta">
                           <li class="entry__meta-author">
                              <?php $author = get_the_author_meta('display_name', $late->post_author); ?>
                              <span>by</span>
                              <a href="<?= get_author_posts_url($late->post_author) ?>"><?= $author ?></a>
                           </li>
                           <li class="entry__meta-date">
                              <?php
                              $time = date("M d, Y", strtotime($late->post_date));
                              ?>
                              <?= ucwords($time) ?>
                           </li>
                        </ul>
                     </div>
                  </article>
               </div> <!-- end post -->
            <?php endforeach; ?>

         </div> <!-- end col -->

         <div class="col-lg-6">
            <?php if ($latest[3]) : ?>
               <!-- Large post -->
               <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                  <article class="entry card featured-posts-grid__entry">
                     <div class="entry__img-holder card__img-holder">
                        <a href="<?= get_permalink($latest[3]->ID) ?>">
                           <img src="<?= get_the_post_thumbnail_url($latest[3]->ID); ?>" alt="" class="entry__img">
                        </a>
                        <?php $cat = get_the_category($latest[3]->ID); ?>
                        <a href="<?= get_category_link($cat[0]) ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green"><?= $cat[0]->name; ?></a>
                     </div>

                     <div class="entry__body card__body">
                        <h2 class="entry__title two-lines">
                           <a href="<?= get_permalink($latest[3]->ID) ?>"><?= print_title($latest[3]) ?></a>
                        </h2>
                        <ul class="entry__meta">
                           <li class="entry__meta-author">
                              <?php $author = get_the_author_meta('display_name', $latest[3]->post_author); ?>
                              <span>by</span>
                              <a href="<?= get_author_posts_url($latest[3]->post_author) ?>"><?= $author ?></a>
                           </li>
                           <li class="entry__meta-date">
                              <?php
                              $time = date("M d, Y", strtotime($late->post_date));
                              ?>
                              <?= ucwords($time) ?>
                           </li>
                        </ul>
                     </div>
                  </article>
               </div> <!-- end large post -->
            <?php endif; ?>

         </div>

      </div>
   </div>
</section> <!-- end featured posts grid -->

<div class="main-container container pt-24" id="main-container">

   <!-- Content -->
   <div class="row">

      <!-- Posts -->
      <div class="col-lg-8 blog__content">

         <!-- Latest News -->
         <section class="section tab-post mb-16">
            <div class="title-wrap title-wrap--line">
               <h3 class="section-title">Technology</h3>

               <div class="tabs tab-post__tabs">
                  <ul class="tabs__list">
                     <li class="tabs__item tabs__item--active">
                        <a href="#tab-all" class="tabs__trigger">All</a>
                     </li>
                     <li class="tabs__item">
                        <a href="#tab-cryptocurrency" class="tabs__trigger">Crypto</a>
                     </li>
                     <li class="tabs__item">
                        <a href="#tab-cybersecurity" class="tabs__trigger">Cybersecurity</a>
                     </li>
                     <li class="tabs__item">
                        <a href="#tab-fintech" class="tabs__trigger">FinTech</a>
                     </li>
                     <li class="tabs__item">
                        <a href="#tab-intelligent-tech" class="tabs__trigger">Intelligent Tech</a>
                     </li>
                  </ul> <!-- end tabs -->
               </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

               <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                  <div class="row card-row">
                     <?php foreach ($technology_all as $key => $post) : ?>
                        <div class="col-md-6">
                           <?= get_template_part("template-parts/article-card", "", ['post' => $post]) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div> <!-- end pane 1 -->

               <div class="tabs__content-pane" id="tab-cryptocurrency">
                  <div class="row card-row">
                     <?php foreach ($technology_cryptocurrency  as $key => $post) : ?>
                        <div class="col-md-6">
                           <?= get_template_part("template-parts/article-card", "", ['post' => $post]) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div> <!-- end pane 1 -->

               <div class="tabs__content-pane" id="tab-cybersecurity">
                  <div class="row card-row">
                     <?php foreach ($technology_cybersecurity  as $key => $post) : ?>
                        <div class="col-md-6">
                           <?= get_template_part("template-parts/article-card", "", ['post' => $post]) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div> <!-- end pane 1 -->

               <div class="tabs__content-pane" id="tab-fintech">
                  <div class="row card-row">
                     <?php foreach ($technology_fintech  as $key => $post) : ?>
                        <div class="col-md-6">
                           <?= get_template_part("template-parts/article-card", "", ['post' => $post]) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div> <!-- end pane 1 -->

               <div class="tabs__content-pane" id="tab-intelligent-tech">
                  <div class="row card-row">
                     <?php foreach ($technology_intelligent_tech  as $key => $post) : ?>
                        <div class="col-md-6">
                           <?= get_template_part("template-parts/article-card", "", ['post' => $post]) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div> <!-- end pane 1 -->

            </div> <!-- end tab content -->
         </section> <!-- end latest news -->

      </div> <!-- end posts -->

      <!-- Sidebar -->
      <aside class="col-lg-4 sidebar sidebar--right">

         <?= get_template_part("template-parts/sidebar/circle-posts", "", ['title' => 'MedTech', 'posts' => $medtech]); ?>
         <?= get_template_part("template-parts/sidebar/newsletter"); ?>

         <?= get_template_part("template-parts/sidebar/social"); ?>

      </aside> <!-- end sidebar -->

   </div> <!-- end content -->

   <!-- Ad Banner 728 -->
   <!--<div class="text-center pb-48">
      <a href="#">
         <img src="<?= get_template_directory_uri() ?>/img/content/placeholder_728.jpg" alt="">
      </a>
   </div>-->

   <!-- Carousel posts -->
   <section class="section mb-0">
      <div class="title-wrap title-wrap--line title-wrap--pr">
         <h3 class="section-title">editor's choice</h3>
      </div>

      <!-- Slider -->
      <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
         <?php foreach ($editors as $key => $post) : ?>
            <article class="entry thumb thumb--size-1">
               <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>')">
                  <div class="bottom-gradient"></div>
                  <div class="thumb-text-holder">
                     <h2 class="thumb-entry-title">
                        <a href="<?= get_permalink($post->ID) ?>"><?= print_title($post) ?></a>
                     </h2>
                  </div>
                  <a href="<?= get_permalink($post->ID) ?>" class="thumb-url"></a>
               </div>
            </article>
         <?php endforeach; ?>
      </div> <!-- end slider -->

   </section> <!-- end carousel posts -->


   <!-- Posts from categories -->
   <section class="section mb-0">
      <div class="row">
         <?= get_template_part("template-parts/posts-style-1", "", ['category_id' => 556]); ?>
         <?= get_template_part("template-parts/posts-style-1", "", ['category_id' => 560]); ?>
         <?= get_template_part("template-parts/posts-style-1", "", ['category_id' => 566]); ?>
         <?= get_template_part("template-parts/posts-style-1", "", ['category_id' => 182]); ?>
      </div>
   </section> <!-- end posts from categories -->

   <!-- Video posts -->
   <section class="section mb-24">
      <div class="title-wrap title-wrap--line">
         <h3 class="section-title">Events</h3>
         <a href="/events" class="all-posts-url">View All</a>
      </div>
      <div class="row card-row">
         <?php foreach ($events as $ev) : ?>
            <div class="col-md-6">
               <article class="">
                  <div class="entry__img-holder card__img-holder">
                     <a href="<?= get_permalink($ev->ID) ?>">
                        <img src="<?= get_the_post_thumbnail_url($ev->ID, 'medium-thumb', ['class' => 'no-lazy-load']); ?>" class="entry__img lazyload" alt="" />
                     </a>
                  </div>
               </article>
            </div>
         <?php endforeach; ?>

      </div>
   </section>


   <!-- Content Secondary -->
   <div class="row">

      <!-- Posts -->
      <div class="col-lg-8 blog__content mb-72">

         <!-- Worldwide News -->
         <section class="section">
            <div class="title-wrap title-wrap--line">
               <h3 class="section-title">Magazines</h3>
               <a href="/magazines" class="all-posts-url">View All</a>
            </div>

            <div class="row">
               <?php foreach ($magazines as $mag) : ?>
                  <div class="col-md-4">
                     <article class="mb-3">
                        <a href="<?= get_permalink($mag->ID); ?>">
                           <?= get_the_post_thumbnail($mag->ID, 'medium-thumb'); ?>
                        </a>
                     </article>
                  </div>
               <?php endforeach; ?>

            </div>

         </section> <!-- end worldwide news -->

      </div> <!-- end posts -->



      <!-- Sidebar 1 -->
      <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

         <!-- Widget Ad 300 -->
         <!--<aside class="widget widget_media_image">
            <a href="#">
               <img src="<?= get_template_directory_uri() ?>/img/content/placeholder_336.jpg" alt="">
            </a>
         </aside> -->

         <?= get_template_part("template-parts/sidebar/top-categories"); ?>


      </aside> <!-- end sidebar 1 -->
   </div> <!-- content secondary -->

   <!-- Carousel posts -->
   <section class="section mb-0">
      <div class="title-wrap title-wrap--line title-wrap--pr">
         <h3 class="section-title">Partners</h3>
      </div>

      <!-- Slider -->
      <div id="owl-partners" class="owl-carousel owl-theme owl-carousel--arrows-outside">
         <?php foreach ($media_partners as $key => $mp) : ?>
            <?php if ($key > 9) break; ?>
            <div class="home-media-partner">
               <img class="white-element" src="<?= $mp['image']['sizes']['medium-thumb'] ?>" alt="">
            </div>
         <?php endforeach; ?>

      </div> <!-- end slider -->

   </section> <!-- end carousel posts -->

</div> <!-- end main container -->

<?php get_footer(); ?>