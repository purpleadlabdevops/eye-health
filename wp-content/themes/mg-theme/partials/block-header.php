<header class="main-header">
	<div class="container">
		<div class="main-header__left">
			<a class="main-header__logo link-page" href="<?php echo home_url(); ?>">
				<?php the_field('header_logo', 'option'); ?>
			</a>
			<button class="change-style" data-style="default">Change style</button>
		</div>
		<button class="main-header__btn">
			<span></span>
			<span></span>
			<span></span>
			<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5.81738" y="3.55469" width="32" height="3.2" transform="rotate(45 5.81738 3.55469)" fill="#221B19"/><rect width="32" height="3.2" transform="matrix(-0.707107 0.707107 0.707107 0.707107 26.1826 3.55518)" fill="#221B19"/></svg>
		</button>
		<nav class="main-header__nav">
			<?php if( have_rows('header_menu', 'option') ): ?>
				<?php while( have_rows('header_menu', 'option') ) : the_row(); ?>
					<a class="link-page" href="<?php the_permalink(get_sub_field('id')); ?>"><?php the_sub_field('name'); ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
			<a class="btn btn-light" href="#">Payment</a>
			<a class="btn btn-dark book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">Book an appointment</a>
		</nav>
	</div>
</header>