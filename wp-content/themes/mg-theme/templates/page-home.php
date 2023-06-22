<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<section class="banner">
  <video class="banner__video" width="400" height="300" autoplay muted loop poster="<?php echo IMG; ?>/video-poster.jpg">
    <source src="<?php echo VIDEO; ?>/pexels.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
  </video>
  <svg class="banner__wrap" width="1440" height="187" viewBox="0 0 1440 187" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1440 0.498274C981.5 240.998 450.414 242.193 -8.13048e-06 0.498337L0.00121943 186.5L1440 186.502L1440 0.538008L1440 0.498274Z" fill="var(--bg-color)"/></svg>
  <div class="container">
    <h1><?php the_field('banner_title'); ?></h1>
    <p class="txt-20 txt-uppercase"><?php the_field('banner_text'); ?></p>
    <a class="btn btn-white btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
  </div>
</section>

<section class="insurance">
  <div class="container">
    <div class="insurance__head">
      <h2><?php the_field('insurance_title'); ?></h2>
      <p class="txt-20"><?php the_field('insurance_text'); ?></p>
    </div>
    <?php the_field('insurance_sponsors'); ?>
    <a class="btn btn-dark btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
  </div>
</section>

<section class="about-us">
  <div class="container">
    <div class="about-us__info">
      <h2><?php the_field('about_title'); ?></h2>
      <p class="txt-20"><?php the_field('about_text'); ?></p>
      <a class="btn btn-dark btn-lg txt-18 txt-uppercase link-page" href="<?php the_permalink(7) ?>">see all services</a>
    </div>
    <?php if( have_rows('about_list') ): ?>
    <div class="about-us__list">
      <?php while( have_rows('about_list') ) : the_row(); ?>
        <div class="about-us__item">
          <img src="<?php the_sub_field('icon'); ?>" alt="">
          <h6 class="txt-28 txt-medium"><?php the_sub_field('title'); ?></h6>
          <p class="txt-20"><?php the_sub_field('text'); ?></p>
        </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section class="what-we-do">
  <div class="container">
    <h2><?php the_field('what_we_do_title'); ?></h2>
    <div class="what-we-do__row">
      <img class="what-we-do__img" src="<?php the_field('what_we_do_image'); ?>" alt="">
      <div class="what-we-do__info">
        <p class="txt-20"><?php the_field('what_we_do_text'); ?></p>
        <a class="btn btn-dark btn-lg txt-18 txt-uppercase link-page" href="<?php the_permalink(7); ?>">see all services</a>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'partials/block', 'professionals' ); ?>

<?php get_template_part( 'partials/block', 'care' ); ?>

<?php get_template_part( 'partials/block', 'waiting' ); ?>

<?php get_footer(); ?>
