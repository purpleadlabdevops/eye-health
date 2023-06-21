<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<?php $sub_cat = get_the_category(get_post()->ID); ?>
<section class="post__section">
  <div class="container">
    <img class="post__img" src="<?php the_field('content_image'); ?>" alt="<?php the_title(); ?>" width="100%">
    <div class="post__info">
      <div class="post__cat"><?php echo $sub_cat[1]->slug; ?></div>
      <div class="post__date"><?php echo get_the_date( 'm/d/Y' ); ?></div>
    </div>
    <h1><?php the_title(); ?></h1>
    <div class="post__content">
      <!-- <div class="row">
        <div class="col__width-100">
          <div class="txt-20">Maintaining healthy vision is crucial for our overall well-being, and a balanced diet plays a vital role in supporting optimal eye health. While regular eye check-ups are essential, incorporating superfoods into your diet can provide your eyes with essential nutrients and antioxidants. In this article, we explore some superfoods that are known to boost vision and promote eye health.</div>
        </div>
      </div>
      <div class="txt-28 txt-medium txt-uppercase">Key Superfoods for Eye Health</div>
      <div class="row">
        <div class="col__width-50 col__order-2"><img src="http://localhost:8888/eye-health/wp-content/uploads/2023/06/post1-300x185.jpg" /></div>
        <div class="col__width-50 txt-20"><b>Spinach:</b> A Leafy Green Powerhouse Spinach is a nutrient-rich leafy green vegetable that is packed with antioxidants, including lutein and zeaxanthin. These compounds have been linked to a lower risk of age-related macular degeneration (AMD) and cataracts. Adding spinach to your diet can help protect your eyes from oxidative stress and improve overall vision.</div>
      </div>
      <div class="row">
        <div class="col__width-50"><img src="http://localhost:8888/eye-health/wp-content/uploads/2023/06/post2-300x185.png" /></div>
        <div class="col__width-50 txt-20"><b>Carrots:</b> Rich in Beta-Carotene Carrots are often associated with eye health due to their high beta-carotene content. Beta-carotene is converted into vitamin A in the body, which is crucial for maintaining good vision, especially in low-light conditions. Including carrots in your diet can support the health of your retinas and help prevent night blindness.</div>
      </div>
      <div class="row">
        <div class="col__width-50 col__order-2"><img src="http://localhost:8888/eye-health/wp-content/uploads/2023/06/post3-300x206.jpg" /></div>
        <div class="col__width-50 txt-20"><b>Blueberries:</b> A Vision-Boosting Berry Blueberries are renowned for their high concentration of antioxidants, particularly anthocyanins. These compounds provide protection against age-related vision problems, including macular degeneration and cataracts. Additionally, blueberries are rich in vitamin C, which helps strengthen the blood vessels in the eyes and reduce the risk of developing glaucoma.</div>
      </div>
      <div class="txt-28 txt-medium txt-uppercase">Embracing Superfoods for Clearer Vision and Lasting Eye Health</div>
      <div class="row">
        <div class="col__width-100">
          <div class="txt-20">Incorporating superfoods into your daily diet is a proactive step towards maintaining optimal eye health. <b>”The nutrients and antioxidants found in superfoods such as spinach, carrots, blueberries, and salmon provide essential support to our eyes and help protect against age-related vision problems”</b> By including these superfoods in your meals, you can boost your vision and promote long-term eye health.</div>
        </div>
      </div> -->
      <?php the_content(); ?>
    </div>
    <div class="post__share">
      <span>SHARE THIS ARTICLE:</span>
      <a href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.724 9.47245C28.7427 9.75379 28.7427 10.0365 28.7427 10.3205C28.7427 18.9965 22.1373 29.0005 10.0627 29.0005V28.9951C6.496 29.0005 3.00267 27.9791 0 26.0525C0.518667 26.1151 1.04 26.1458 1.56267 26.1471C4.52 26.1498 7.392 25.1578 9.716 23.3311C6.90667 23.2778 4.44267 21.4458 3.58267 18.7711C4.56667 18.9605 5.58 18.9218 6.54667 18.6591C3.48267 18.0405 1.28 15.3485 1.28 12.2231C1.28 12.1951 1.28 12.1671 1.28 12.1405C2.19333 12.6498 3.21467 12.9311 4.26 12.9618C1.37467 11.0351 0.484 7.19779 2.22667 4.19779C5.56 8.29912 10.4787 10.7925 15.7573 11.0578C15.228 8.77779 15.952 6.38845 17.656 4.78445C20.3 2.29779 24.4587 2.42579 26.9453 5.06979C28.416 4.78045 29.8253 4.24045 31.1147 3.47645C30.624 4.99645 29.5987 6.28712 28.228 7.10845C29.5307 6.95245 30.8013 6.60445 32 6.07379C31.1187 7.39245 30.0093 8.54312 28.724 9.47245Z" fill="#3A3E3D"/></svg></a>
      <a href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_111_2931)"><path d="M32 16.0977C32 24.083 26.1413 30.703 18.4933 31.9043V20.7537H22.212L22.92 16.1403H18.4933V13.147C18.4933 11.8843 19.112 10.655 21.0933 10.655H23.1053V6.72699C23.1053 6.72699 21.2787 6.41499 19.5333 6.41499C15.888 6.41499 13.5067 8.62432 13.5067 12.623V16.139H9.45467V20.7523H13.5067V31.903C5.86 30.7003 0 24.0817 0 16.0977C0 7.26166 7.164 0.0976562 16 0.0976562C24.836 0.0976562 32 7.26032 32 16.0977Z" fill="#3A3E3D"/></g><defs><clipPath id="clip0_111_2931"><rect width="32" height="32" fill="white"/></clipPath></defs></svg></a>
      <a href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_111_2934)"><path d="M27.2662 27.2664H22.5244V19.8408C22.5244 18.0699 22.4929 15.7913 20.0581 15.7913C17.5887 15.7913 17.2103 17.7198 17.2103 19.713V27.2664H12.4701V11.9957H17.0226V14.0819H17.0857C18.0145 12.4956 19.7396 11.5478 21.5767 11.6157C26.3831 11.6157 27.2677 14.7773 27.2677 18.8883L27.2662 27.2664ZM7.1197 9.90787C5.59957 9.90787 4.36801 8.67631 4.36801 7.15618C4.36801 5.63605 5.59957 4.40449 7.1197 4.40449C8.63983 4.40449 9.87138 5.63605 9.87138 7.15618C9.87138 8.67631 8.63983 9.90787 7.1197 9.90787ZM9.48977 27.2664H4.74331V11.9957H9.48977V27.2664ZM29.6299 0.00179229H2.36062C1.07229 -0.0123998 0.015769 1.02047 0 2.30879V29.6901C0.015769 30.98 1.07229 32.0128 2.36062 31.9986H29.6299C30.9214 32.0144 31.9827 30.9815 32 29.6901V2.30722C31.9811 1.01574 30.9198 -0.0171306 29.6299 0.000215318" fill="#3A3E3D"/></g><defs><clipPath id="clip0_111_2934"><rect width="32" height="32" fill="white"/></clipPath></defs></svg></a>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php
$category_query = new WP_Query(array(
  'cat' => 2,
  'posts_per_page' => 3
));
?>
<?php if( $category_query->have_posts() ): ?>
<section class="insights">
  <div class="container">
    <h3>related articles</h3>
    <div class="insights__list">
      <?php
        while( $category_query->have_posts() ):
          $category_query->the_post();
          $sub_cat = get_the_category(get_post()->ID);
      ?>
      <a class="insights__post link-page" data-subcat="<?php echo $sub_cat[1]->slug; ?>" href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" />
        <div class="insights__info">
          <div class="insights__cat"><?php echo $sub_cat[1]->slug; ?></div>
          <div class="insights__date"><?php echo get_the_date( 'm/d/Y' ); ?></div>
        </div>
        <div class="txt-28 txt-medium txt-uppercase"><?php the_title(); ?></div>
        <p class="txt-16"><?php the_excerpt(); ?></p>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>

<?php get_template_part( 'partials/block', 'care' ); ?>

<?php get_footer(); ?>