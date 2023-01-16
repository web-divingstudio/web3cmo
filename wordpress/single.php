<?php get_header()?>
<div class="single">
  <div class="single__container">
    <div class="single__image" >
      <?php the_post_thumbnail()?>
    </div>
    <div class="single__date"><img src="<?php echo get_template_directory_uri()?>/images/icons/Calendar.svg" alt=""
        class="single__date-img"> <span class="single__date-value"><?php the_time('d F Y')?></span></div>
    <div class="single__title"><?php the_title();?></div>
    <div class="single__content">
      <?php the_content()?>
    </div>
  </div>
</div>
  <?php		
    global $post;

    $query = new WP_Query( [
      'posts_per_page' => 2,
    ] );

    if ( $query->have_posts() ) {
      ?>
      <section class="blog__section single__blog-section">
        <div class="blog__container">
        <h2 class="single__blog-title" >You might also like</h2>
          <div class="blog__block single__blog-block">
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