</main>
<footer class="footer">
  <div class="footer__container">
    <div class="footer__block">
      <div class="footer__copy">Copyright © 2022 Orkhan Khalaf. All rights reserved.</div>
        <?php the_privacy_policy_link( )?>
    </div>
  </div>
</footer>
<?php if( !is_front_page()){?>
  <a href="#" class="topbutton" id="topbutton">
  <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21 34.3333L31 24.3333L41 34.3333M61 31C61 14.4315 47.5685 1 31 1C14.4315 1 1 14.4315 1 31C1 47.5685 14.4315 61 31 61C47.5685 61 61 47.5685 61 31Z" stroke="#A6A6B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

  </a>
<?php }?>
<?php echo get_template_part( 'template-parts/content', 'modal');?>
<?php wp_footer();?>
</body>

</html>