<?php if(!is_page_template('page-contact.php')): ?>
<!-- ▼ CTA -->
<section class="c-cta">
  <div class="c-cta__inner">
    <div class="c-cta__textBox">
      <h2 class="c-cta__title">RESERVATION</h2>
      <p class="c-cta__read">
        無料でお見積りやご相談を承ります。
        <br>
        お気軽にご連絡ください。
      </p>
    </div>
    <div class="c-cta__btnWarap">
      <div class="c-cta__btnContact">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-cta__link">
          <span class="c-cta__subText">お問い合わせ</span>
          <span class="c-cta__mainText">CONTACT</span>
        </a>
      </div>
      <div class="c-cta__btnResevation">
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="c-cta__link--bgImage">
          <span class="c-cta__subText">予約</span>
          <span class="c-cta__mainText">RESERVATION</span>
        </a>
      </div>
    </div>
    <div class="c-cta__snsBox">
      <?php $line_url = get_option('line_url', '')?>
      <?php if($line_url): ?>
      <a href="<?php echo esc_url($line_url); ?>" class="c-cta__line" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/common/sns-line.png" alt="LINE" class="c-cta__lineImg" width="118"
          height="118">
      </a>
      <?php endif;?>
      <p class="c-cta__snsText">
        <span class="c-cta__snsText--en">LINE</span>でのお問合せも承っております
      </p>
    </div>
  </div>
</section>
<!-- ▲ CTA -->
 <?php endif;?>
</main>
<!-- ▲ main -->

<!-- ▼ footer -->
<footer class="l-footer">
  <div class="l-footer__inner">
    <ul class="l-footer__list">
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__link">TOP</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/concept')); ?>" class="l-footer__link">CONCEPT</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/profile')); ?>" class="l-footer__link">PROFILE</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/plan')); ?>" class="l-footer__link">PLAN</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/archive')); ?>" class="l-footer__link">ARTICLE</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-footer__link">CONTACT</a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="l-footer__link">RESERVATION</a>
      </li>
    </ul>
    <div class="l-footer__bottom">
      <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>" class="l-footer__link">プライバシーポリシー</a>
      <p class="l-footer__copyRightBox">
        <small class="l-footer__copyRight">© 2024 SUSHI WIZ</small>
      </p>
    </div>
  </div>
</footer>
<!-- ▲ footer -->
</div>
<!-- ▲ contents End -->

<?php wp_footer();?>
</body>

</html>