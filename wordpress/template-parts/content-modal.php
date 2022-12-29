<div class="modal">
  <div class="modal__wrapper"></div>
    <div class="modal__content">
      <?php if( have_rows('modal', 'option') ): ?>
        <?php while( have_rows('modal', 'option') ): the_row(); ?>
        <h2 class="modal__title"><?php the_sub_field('title')?></h2>
        <div class="modal__block">
          <?php if( have_rows('social') ): ?>
            <?php while( have_rows('social') ): the_row(); ?>
            <?php
            $image = get_sub_field('image');
            ?>
            <a href="<?php the_sub_field('link');?>" class="modal__box" target="_blank">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="modal__box-img"/>
              <span class="modal__box-text"><?php the_sub_field('linktext');?></span> 
            </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>