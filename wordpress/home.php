<?php get_header();?>
<section class="blog__page blog__section">
  <div class="blog__container">
    <h1 class="blog__title">Blog</h1>
    <div class="blog__block">
      <?php		
        global $post;

        $query = new WP_Query( [
          'posts_per_page' => -1,
        ] );

        if ( $query->have_posts() ) {
          ?>
          <?php
          while ( $query->have_posts() ) {
            $query->the_post();
             get_template_part( 'template-parts/content', 'post__blog');
          }
          ?>
          <?php
        } 
        wp_reset_postdata(); // Сбрасываем $post
      ?>  
    </div>
  </div>
</section>
<?php get_footer();?>