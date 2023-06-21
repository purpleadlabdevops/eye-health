<?php
/*
 * Template Name: Insights
 */
get_header(); ?>

<section class="banner">
  <video class="banner__video" width="400" height="300" autoplay muted loop poster="<?php echo IMG; ?>/video-poster.jpg">
    <source src="<?php echo VIDEO; ?>/pexels.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
  </video>
  <div class="container">
    <h1><?php the_field('banner_title'); ?></h1>
    <p class="txt-20 txt-uppercase"><?php the_field('banner_text'); ?></p>
    <a class="btn btn-white btn-lg txt-18 txt-uppercase" href="#">Book an appointment</a>
  </div>
</section>

<?php
$category_query = new WP_Query(array(
  'cat' => 2
));
?>
<?php if( $category_query->have_posts() ): ?>
<section class="insights">
  <div class="container">
    <div class="insights__cats">
      <button id="showAll" class="insights__subcat active">All TOPICS</button>
      <?php
        $categories = get_categories(array(
          'parent' => 2,
          'posts_per_page' => -1
        ));
        foreach($categories as $category):
      ?>
      <button class="insights__subcat" id="<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
      <?php endforeach; ?>
    </div>
    <div class="insights__list">
      <?php
        while( $category_query->have_posts() ):
          $category_query->the_post();
          $sub_cat = get_the_category(get_post()->ID);
      ?>
      <a class="insights__post link-page" data-subcat="<?php echo $sub_cat[1]->slug; ?>" href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" />
        <div class="insights__info">
          <div class="insights__cat"><?php echo $sub_cat[1]->slug; ?></div>
          <div class="insights__date"><?php echo get_the_date( 'm/d/Y' ); ?></div>
        </div>
        <div class="txt-28 txt-medium txt-uppercase"><?php the_title(); ?></div>
        <p class="txt-16"><?php the_excerpt(); ?></p>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>

<?php get_template_part( 'partials/block', 'care' ); ?>

<?php get_footer(); ?>
