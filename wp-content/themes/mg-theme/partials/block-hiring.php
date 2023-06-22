<?php
  $args = array(
    'post_type' => 'cpt_hiring',
    'posts_per_page' => -1
  );
  $the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
<section class="hiring">
  <div class="container">
    <div class="hiring__row">
      <div class="hiring__left">
        <h2>We’re Hiring!</h2>
        <p class="txt-20">Join our dedicated team of eye care professionals and contribute to improving vision health by applying for our exciting job opportunities today!</p>
      </div>
      <div class="hiring__right">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="hiring__item">
          <div class="hiring__item__sub"><?php the_field('subtitle'); ?></div>
          <div class="hiring__item__title"><?php the_title(); ?></div>
          <div class="hiring__item__text"><?php the_field('text'); ?></div>
          <a class="hiring__item__link" href="<?php the_field('link'); ?>">
            <?php the_field('link_text'); ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6073 8.5182L11.9955 7.06931L17.4596 8.53341L17.9899 9.45197L16.5258 14.9161L15.0769 14.5278L16.0724 10.8127L7.68118 15.6574L6.93118 14.3583L15.3224 9.51366L11.6073 8.5182Z" fill="var(--text-color)"/></svg>
          </a>
          <button class="hiring__item__btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 7L12 17L22.5 7" stroke="var(--text-color)" stroke-width="2"/></svg></button>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<script>
document.querySelectorAll('.hiring__item').forEach(item => {
  item.addEventListener('click', e => {
    e.preventDefault()
    e.target.classList.toggle('active')
  })
})
</script>

<?php endif; ?>