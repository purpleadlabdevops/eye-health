<section class="form">
  <div class="container">
    <div class="form__wrap">
      <h2>APPLY <b>NOW!</b></h2>
      <div class="row">
        <img src="<?php echo IMG; ?>/apply.jpg" class="col__order-2">
        <form class="form__apply" enctype="multipart/form-data" >
          <div class="field">
            <select name="position" id="position" placeholder="POSITION" required>
              <option selected disabled>CHOOSE POSITION</option>
              <?php if( have_rows('hiring_list') ): ?>
              <?php while( have_rows('hiring_list') ) : the_row(); ?>
                <option value="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></option>
              <?php endwhile; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="field">
            <input type="text" id="full_name" name="full_name" placeholder="FULL NAME" required>
          </div>
          <div class="field">
            <input type="text" id="email" name="email" placeholder="EMAIL" required>
          </div>
          <div class="field">
            <label for="attached_cv">ATTACHED CV</label>
            <input type="file" id="attached_cv" name="attached_cv" required>
          </div>
          <div class="field">
            <textarea id="msg" name="msg" placeholder="HOW CAN WE HELP YOU?" required></textarea>
          </div>
          <div class="field">
            <input type="submit" value="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>