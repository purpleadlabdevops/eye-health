<?php
/*
 * Template Name: Career
 */
get_header(); ?>

<section class="banner banner__mod">
  <img class="banner__bg" src="<?php the_field('banner_img'); ?>" alt="<?php the_field('banner_title'); ?>">
  <div class="container">
    <h1><?php the_field('banner_title'); ?></h1>
    <p class="txt-20 txt-uppercase"><?php the_field('banner_text'); ?></p>
    <a class="btn btn-white btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
  </div>
</section>

<?php get_template_part( 'partials/block', 'hiring' ); ?>

<?php get_template_part( 'partials/block', 'apply' ); ?>

<?php get_footer(); ?>
