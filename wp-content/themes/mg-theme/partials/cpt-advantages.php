<?php
	$args = array(
		'post_type' => 'cpt_advantages',
		'posts_per_page' => 3
	);
	$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
	<section class="advantages">
		<?php if( is_page_template( array('templates/page-v4.php', 'templates/page-v6.php', 'templates/page-v9.php') ) ): ?><h2>a revolutionary deep muscle treatment in <br> the comfort of your home</h2><?php endif; ?>
		<div class="row">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-lg-4">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
<?php endif; ?>