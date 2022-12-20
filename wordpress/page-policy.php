<?php get_header();?>
<div class="privacy">
        <div class="privacy__container">
          <div class="privacy__title" data-aos="fade-up"><?php the_title();?></div>
          <div class="privacy__subtitle" data-aos="fade-up"><?php the_field('subtitle');?></div>
          <div class="privacy__content" data-aos="fade-up">
            <?php the_content();?>
          </div>
        </div>
      </div>
<?php get_footer();?>