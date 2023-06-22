<footer id="main-footer" class="main-footer">
  <svg class="main-footer__img" width="1440" height="115" viewBox="0 0 1440 115" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1677 -93C1075.82 184.105 364.184 184.105 -237 -92.9999L-237 115L1677 115L1677 -92.9598L1677 -93Z" fill="var(--footer-bg)"/>
  </svg>
  <div class="main-footer__wrap">
    <div class="container">
      <div class="main-footer__row">
        <div class="main-footer__left">
          <div class="main-footer__logo"><?php the_field('footer_logo', 'option'); ?></div>
          <p class="txt-16">We embrace innovation and utilize cutting-edge technology to improve patient outcomes and offer precise and effective eye care.</p>
        </div>
        <div class="main-footer__right">
          <?php if( have_rows('footer_navigate', 'option') ): ?>
          <div class="main-footer__menu">
            <h6>Navigate</h6>
            <ul>
              <?php while( have_rows('footer_navigate', 'option') ) : the_row(); ?>
                <li><a class="link-page" href="<?php the_permalink(get_sub_field('id')); ?>"><?php the_sub_field('title'); ?></a></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if( have_rows('footer_help', 'option') ): ?>
          <div class="main-footer__menu">
            <h6>get help</h6>
            <ul>
              <?php while( have_rows('footer_help', 'option') ) : the_row(); ?>
                <li><?php the_sub_field('title'); ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if( have_rows('footer_follow', 'option') ): ?>
          <div class="main-footer__menu">
            <h6>follow us</h6>
            <ul>
              <?php while( have_rows('footer_follow', 'option') ) : the_row(); ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="main-footer__bottom">
        <a class="link-page" href="<?php the_permalink(18); ?>">Privacy policy</a>
        <a class="link-page" href="<?php the_permalink(20); ?>">Terms and conditions</a>
        <span>the eye health group 2023. All rights reserved.</span>
      </div>
    </div>
  </div>
</footer>
