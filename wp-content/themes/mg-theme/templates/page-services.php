<?php
/*
 * Template Name: Services
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

<section class="approach">
  <div class="container">
    <h2><?php the_field('approach_title'); ?></h2>
    <div class="approach__row">
      <img src="<?php the_field('approach_img'); ?>">
      <div class="approach__info">
        <p class="txt-20"><?php the_field('approach_text'); ?></p>
        <a class="btn btn-dark btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
      </div>
    </div>
    <?php if( have_rows('approach_list') ): ?>
    <div class="approach__list">
      <?php while( have_rows('approach_list') ) : the_row(); ?>
      <div class="approach__item"><?php the_sub_field('text'); ?></div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  </div>
</section>

<section class="services">
  <div class="container">
    <h2><?php the_field('services_title'); ?></h2>
    <div class="services__row">
      <ul class="services__menu">
        <?php $i=0; while( have_rows('services_list') ) : the_row(); $i++; ?>
        <li <?php if($i === 1){echo 'class="active"'; }; ?> data-tab="services__tab__<?php echo $i; ?>">
          <span>0<?php echo $i; ?></span>
          <?php the_sub_field('title'); ?>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="services__tabs">
        <?php $i=0; while( have_rows('services_list') ) : the_row(); $i++; ?>
        <div class="services__tab <?php if($i === 1){echo 'active'; }; ?>" id="services__tab__<?php echo $i; ?>">
          <?php if(get_sub_field('img')): ?>
          <img src="<?php the_sub_field('img'); ?>">
          <?php endif; ?>
          <p class="txt-20"><?php the_sub_field('text'); ?></p>
          <a class="btn btn-dark btn-lg txt-18 txt-uppercase book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<section class="story">
  <div class="container">
    <h2><?php the_field('story_title'); ?></h2>
    <div class="story__row">
      <div class="story__left">
        <div class="story__year">20</div>
      </div>
      <div class="story__right">
        <?php while( have_rows('story_list') ) : the_row(); ?>
        <div class="story__item">
          <div class="story__num"><?php the_sub_field('year'); ?></div>
          <p class="txt-20 txt-medium txt-uppercase"><?php the_sub_field('title'); ?></p>
          <p class="txt-20"><?php the_sub_field('text'); ?></p>
          <?php if(get_sub_field('img')): ?>
            <img src="<?php the_sub_field('img'); ?>">
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'partials/block', 'professionals' ); ?>

<?php get_template_part( 'partials/block', 'care' ); ?>

<?php get_template_part( 'partials/block', 'waiting' ); ?>

<?php get_footer(); ?>
