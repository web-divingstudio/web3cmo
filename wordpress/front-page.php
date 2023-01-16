<?php get_header()?>
<?php if( have_rows('first_section') ): ?>
    <?php while( have_rows('first_section') ): the_row(); ?>
      <section class="head__section" >
        <div class="head__container">
          <div class="head__block-header">
              <?php if( have_rows('box_icon') ): ?>
                <?php while( have_rows('box_icon') ): the_row(); ?>
                <?php
                    $cnt++;
                    switch ($cnt) {
                     
                      case 1: case 2: case 3:
                        $image = get_sub_field('icon');
                          ?>
                          <div class="head__box"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><span><?php the_sub_field('text')?></span></div>
                          <?php
                          break;
                      default:
                          break;
                  }
                ?>
                <?php endwhile; ?>
              <?php endif; ?>  
          </div>
          <h1 class="head__title"><?php the_title()?></h1>
          <h2 class="head__subtitle"><?php the_sub_field('subtitle')?></h2><a href="#" class="btn open__modal head__btn">Get in touch</a>
          <div class="head__block">
          <?php if( have_rows('box_icon') ): ?>
            <?php while( have_rows('box_icon') ): the_row();?>
            <?php $image = get_sub_field('icon');?>
            <div class="head__box"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><span><?php the_sub_field('text')?></span></div>
            <?php endwhile; ?>
          <?php endif; ?>  
          </div>
          <div class="head__block-footer">
            <?php if( have_rows('box_icon') ): ?>
              <?php while( have_rows('box_icon') ): the_row();?>
              <?php
                $image = get_sub_field('icon');
                $cnt2++;
                    switch ($cnt2) {
                      case 4: case 5: case 6:
                        $image = get_sub_field('icon');
                          ?>
                          <div class="head__box"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><span><?php the_sub_field('text')?></span></div>
                          <?php
                          break;
                      default:
                          break;
                  }
                ?>
              <?php endwhile; ?>
            <?php endif; ?>  
          </div>
        </div>
      </section>
    <?php endwhile; ?>
<?php endif; ?>  
<?php if( have_rows('about') ): ?>
  <?php while( have_rows('about') ): the_row(); ?>  
    <section class="about__section" >
        <div class="about__container">
          <div class="about__block">
            <div class="about__img">
              <?php $image = get_sub_field('image');?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              <a href="#" class="btn open__modal about__btn">Get in Touch</a>
            </div>
            <div class="about__text">
              <h2 class="about__title"><?php the_sub_field('title')?></h2>
              <?php the_sub_field('text')?>
            </div>
          </div>
        </div>
      </section>
  <?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('cmo') ): ?>
  <?php while( have_rows('cmo') ): the_row(); ?>  
    <section class="cmo__section" >
      <div class="cmo__container">
        <div class="cmo__block">
          <div class="cmo__text">
            <h2 class="cmo__title"><?php the_sub_field('title')?></h2>
              <?php the_sub_field('text')?>
              <a href="#" class="btn open__modal cmo__btn">Get in Touch</a>
          </div>
          <div class="cmo__img">
            <?php $image = get_sub_field('image');?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('advantages') ): ?>
  <?php while( have_rows('advantages') ): the_row(); ?>  
  <section class="advantages__section">
    <div class="advantages__container">
      <h2 class="advantages__title"><?php the_sub_field('title')?></h2>
      <div class="advantages__block">
      <?php if( have_rows('advantages_box') ): ?>
        <?php while( have_rows('advantages_box') ): the_row(); ?>  
        <div class="advantages__box" >
            <?php $image = get_sub_field('icon');?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="advantages__box-icon">
          <h3 class="advantages__box-title"><?php the_sub_field('box_title')?></h3>
          <p class="advantages__box-text"><?php the_sub_field('box_text')?></p>
        </div>
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
      <a href="#" class="btn open__modal advantages__btn">Get in Touch</a>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?> 
<?php if( have_rows('find_me_on') ): ?>
  <?php while( have_rows('find_me_on') ): the_row(); ?> 
  <section class="findme__section">
    <div class="findme__container">
      <div class="findme__block">
        <h2 class="findme__title"><?php the_sub_field('title')?></h2>
        <?php if( have_rows('find_me_on_box') ): ?>
          <?php while( have_rows('find_me_on_box') ): the_row(); ?> 
            <a href="<?php the_sub_field('link')?>" class="findme__box" target="_blank">
              <?php $image = get_sub_field('image');?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              <span><?php the_sub_field('text')?></span>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>    
        <?php if( have_rows('separate_unit') ): ?>
          <?php while( have_rows('separate_unit') ): the_row(); ?> 
            <a href="<?php the_sub_field('link')?>" class="findme__toprated" target="_blank">
              <?php $image = get_sub_field('image');?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </a>
          <?php endwhile; ?>
        <?php endif; ?>  
       
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>       
<?php		
  global $post;

  $query = new WP_Query( [
    'posts_per_page' => 2,
  ] );

  if ( $query->have_posts() ) {
    ?>
    <section class="blog__section featured__section">
      <div class="featured__container">
        <h2 class="featured__title">Featured blog posts</h2>
        <div class="blog__block featured__block">
    <?php
    while ( $query->have_posts() ) {
      $query->the_post();
        get_template_part( 'template-parts/content', 'post__blog');
    }
    ?>
        </div>
        <a href="<?php echo home_url( 'blog' );?>" class="btn featured__btn">All posts <img src="<?php echo get_template_directory_uri()?>/images/icons/arrow-post.svg" alt=""></a>
      </div>
    </section>
    <?php
  } 

  wp_reset_postdata(); // Сбрасываем $post
?>  


<?php get_footer()?>