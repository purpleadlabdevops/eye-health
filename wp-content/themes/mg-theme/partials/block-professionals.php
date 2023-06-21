<?php
  $args = array(
    'post_type' => 'cpt_doctors',
    'posts_per_page' => 20
  );
  $the_query = new WP_Query( $args );
?>
<section class="professionals">
  <div class="container">
    <h2><?php the_field('professionals_title', 'option'); ?></h2>
    <p class="txt-20"><?php the_field('professionals_text', 'option'); ?></p>
    <?php if ( $the_query->have_posts() ) : ?>
    <div class="professionals__slider-wrap">
      <div class="professionals__slider" id="professionals__slider">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="professionals__doctor">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="doctor__name txt-medium"><?php the_title(); ?></div>
            <div class="doctor__desc txt-12"><?php the_field('doctors_short'); ?></div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="professionals__nav">
      <button id="professionals__prev"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.75" width="42.5" height="42.5" rx="21.25" fill="#FFFEF4"/><path d="M31.5 21.25C31.9142 21.25 32.25 21.5858 32.25 22C32.25 22.4142 31.9142 22.75 31.5 22.75V21.25ZM11.9697 22.5303C11.6768 22.2374 11.6768 21.7626 11.9697 21.4697L16.7426 16.6967C17.0355 16.4038 17.5104 16.4038 17.8033 16.6967C18.0962 16.9896 18.0962 17.4645 17.8033 17.7574L13.5607 22L17.8033 26.2426C18.0962 26.5355 18.0962 27.0104 17.8033 27.3033C17.5104 27.5962 17.0355 27.5962 16.7426 27.3033L11.9697 22.5303ZM31.5 22.75H12.5V21.25H31.5V22.75Z" fill="#3A3E3D"/><rect x="0.75" y="0.75" width="42.5" height="42.5" rx="21.25" stroke="#3A3E3D" stroke-width="1.5"/></svg></button>
      <button id="professionals__next"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.75" width="42.5" height="42.5" rx="21.25" fill="#FFFEF4"/><path d="M12.5 21.25C12.0858 21.25 11.75 21.5858 11.75 22C11.75 22.4142 12.0858 22.75 12.5 22.75V21.25ZM32.0303 22.5303C32.3232 22.2374 32.3232 21.7626 32.0303 21.4697L27.2574 16.6967C26.9645 16.4038 26.4896 16.4038 26.1967 16.6967C25.9038 16.9896 25.9038 17.4645 26.1967 17.7574L30.4393 22L26.1967 26.2426C25.9038 26.5355 25.9038 27.0104 26.1967 27.3033C26.4896 27.5962 26.9645 27.5962 27.2574 27.3033L32.0303 22.5303ZM12.5 22.75H31.5V21.25H12.5V22.75Z" fill="#3A3E3D"/><rect x="0.75" y="0.75" width="42.5" height="42.5" rx="21.25" stroke="#3A3E3D" stroke-width="1.5"/></svg></button>
    </div>
    <a href="<?php the_permalink(7); ?>" class="btn btn-dark btn-lg txt-18 link-page">SEE ALL DOCTORS</a>
    <?php endif; ?>
  </div>
</section>