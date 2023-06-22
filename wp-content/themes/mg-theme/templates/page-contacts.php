<?php
/*
 * Template Name: Contacts
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

<?php get_template_part( 'partials/block', 'waiting' ); ?>

<section class="form">
  <div class="container">
    <div class="form__wrap">
      <h2>contact <b>us!</b></h2>
      <div class="row">
        <img src="<?php echo IMG; ?>/contact-form.jpg">
        <form class="form__contact-us" action="/" >
          <div class="field">
            <input type="text" id="full_name" name="full_name" placeholder="FULL NAME" required>
          </div>
          <div class="field">
            <input type="text" id="email" name="email" placeholder="EMAIL" required>
          </div>
          <div class="field">
            <textarea id="msg" name="msg" placeholder="TELL US ABOUT YOURSELF" required></textarea>
          </div>
          <div class="field">
            <input type="submit" value="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
