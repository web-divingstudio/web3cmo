<?php get_header();?>
<div class="privacy">
        <div class="privacy__container">
          <div class="privacy__title"><?php the_title();?></div>
          <div class="privacy__subtitle"><?php the_field('subtitle');?></div>
          <div class="privacy__content">
            <?php the_content();?>
          </div>
        </div>
      </div>
<?php get_footer();?>