<section class="care">
  <div class="care__eye">
    <video class="care__video" width="400" height="300" autoplay muted loop>
      <source src="<?php echo VIDEO; ?>/eye.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>
    <svg class="care__top" width="1440" height="208" viewBox="0 0 1440 208" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 208C452.302 -69.1041 987.698 -69.1041 1440 208L1440 0.000551226L0 0.000488281V207.96V208Z" fill="var(--bg-color)"/></svg>
    <svg class="care__bottom" width="1440" height="313" viewBox="0 0 1440 313" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1440 6.10352e-05C987.698 273.475 452.302 273.475 0 6.10352e-05L6.74817e-06 312.5L1440 312.5L1440 0.0397949V6.10352e-05Z" fill="#221B19"/></svg>
  </div>
  <div class="care__wrap">
    <div class="container">
      <h2><?php the_field('care_title', 'option'); ?></h2>
      <div class="care__info">
        <p class="txt-20"><?php the_field('care_text', 'option'); ?></p>
        <a class="btn btn-white-static btn-lg txt-18 book-an-appointment" href="<?php the_field('book_an_appointment', 'option'); ?>">BOOK AN APPOINTMENT</a>
      </div>
    </div>
  </div>
</section>