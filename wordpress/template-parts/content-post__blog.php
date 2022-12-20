<a href="<?php the_permalink()?>" class="blog__post">
  <div class="blog__box">
    <?php the_post_thumbnail()?>
    <div class="blog__box-text">
      <h3 class="blog__post-title"><?php the_title();?></h3>
      <p class="blog__post-excerpt"></p>
      <?php the_excerpt();?>
    </div>
  </div>
</a>