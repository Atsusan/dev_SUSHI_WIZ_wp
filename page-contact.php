<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-contactFv SP -->
  <section class="p-contactFv">
    <div class="p-contactFv__textContents">
      <div class="p-contactFv__inner">
        <div class="p-contactFv__textBox">
          <h2 class="p-contactFv__enTitle">CONTACT</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-contactFv SP -->

  <!-- ▼ p-contactForm -->
  <div class="p-contactForm">
    <div class="p-contactForm__head">
      <div class="p-contactForm__inner">
        <p class="p-contactForm__read">
          当サイトをご覧いただきありがとうございます。<br>
          下記フォームよりお気軽にお問い合わせください。
        </p>
      </div>
    </div>
    <div class="p-contactForm__container">
      <div class="p-contactForm__inner">
        <div class="p-contactForm__form">
          <?php echo do_shortcode('[contact-form-7 id="4bd55cf" title="お問い合わせフォーム"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- ▲ p-contactForm -->

<?php get_footer(); ?>