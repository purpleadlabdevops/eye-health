<?php
/*
 * Template Name: Doctors
 */
get_header(); ?>

<section class="banner banner__var">
  <img class="banner__bg" src="<?php the_field('banner_img'); ?>" alt="<?php the_field('banner_title'); ?>">
  <div class="container">
    <h1><?php the_field('banner_title'); ?></h1>
    <p class="txt-20 txt-uppercase"><?php the_field('banner_text'); ?></p>
    <a class="btn btn-white btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
  </div>
</section>

<?php
  $args = array(
    'post_type' => 'cpt_doctors',
    'posts_per_page' => -1
  );
  $the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
<section class="doctor">
  <div class="container">
    <?php $i=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $i++; ?>
    <div class="doctor__item">
      <img class="doctor__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <div class="doctor__info">
        <div class="doctor__info__header">
          <h5 class="txt-medium"><?php the_title(); ?></h5>
          <div class="doctor__info__right">
            <?php the_field('position'); ?>,
            <span><?php the_field('Experience'); ?> of experience</span>
          </div>
        </div>
        <div class="doctor__directions">
        <?php while( have_rows('directions') ) : the_row(); ?>
          <div class="doctor__directions__item"><?php the_sub_field('title'); ?></div>
        <?php endwhile; ?>
        </div>
        <div class="doctor__about"><?php the_field('about'); ?></div>
        <div class="doctor__thoughts"><?php the_field('thoughts'); ?></div>
        <div class="doctor__reviews__panel">
          <div class="doctor__reviews__count" data-rev="rev_<?php echo $i; ?>">
            <?php $countReviews = count(get_field('reviews')); ?>
            <?php echo $countReviews; ?> review<?php if($countReviews > 1){echo 's';} ?>
            <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.6665L8 8.33317L15 1.6665" stroke="#221B19" stroke-width="2"/></svg>
          </div>
          <a href="<?php the_field('book_an_appointment', 'option'); ?>" class="book-an-appointment">
            book an appointment
            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.32598 2.43509L6.835 0.53541L13.9991 2.45503L14.6945 3.65938L12.7748 10.8235L10.8752 10.3145L12.1803 5.44348L1.17839 11.7955L0.195044 10.0923L11.197 3.74027L6.32598 2.43509Z" fill="#221B19"/></svg>
          </a>
        </div>
        <div class="doctor__reviews" id="rev_<?php echo $i; ?>">
          <?php while( have_rows('reviews') ) : the_row(); ?>
            <div class="doctor__reviews__item">
              <div class="doctor__reviews__head">
                <div class="doctor__reviews__name"><?php the_sub_field('name'); ?></div>
                <div class="doctor__reviews__date"><?php the_sub_field('date'); ?></div>
              </div>
              <div class="doctor__reviews__title"><?php the_sub_field('title'); ?></div>
              <div class="doctor__reviews__message"><?php the_sub_field('message'); ?></div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>

<?php
$category_query = new WP_Query(array(
  'cat' => 2,
  'posts_per_page' => 3
));
?>
<?php if( $category_query->have_posts() ): ?>
<section class="insights">
  <div class="container">
    <h3>learn from the <b>professionals</b></h3>
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

<?php get_template_part( 'partials/block', 'hiring' ); ?>

<?php get_template_part( 'partials/block', 'apply' ); ?>

<?php get_footer(); ?>







