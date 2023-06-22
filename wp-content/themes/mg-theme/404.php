<?php
/*
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<section class="page404">
	<div class="container">
		<div class="txt-20 txt-uppercase">hmmm! It seems like your vision got a bit blurry, but don't worry, we're here to help you find your way back to the perfect page</div>
		<div><a href="<?php the_field('book_an_appointment', 'option'); ?>" class="btn btn-lg btn-dark txt-20 txt-uppercase book-an-appointment">Book an appointment</a></div>
		<div><a href="<?php echo home_url(); ?>" class="btn btn-lg btn-white txt-20 txt-uppercase">Go to main page</a></div>
	</div>
</section>

<?php get_footer(); ?>