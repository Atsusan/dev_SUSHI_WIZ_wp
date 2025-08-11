<?php
/*
Template Name: Faq Page
*/
?>

<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-faqFv SP -->
  <section class="p-faqFv">
    <div class="p-faqFv__textContents">
      <div class="p-faqFv__inner">
        <div class="p-faqFv__textBox">
          <h2 class="p-faqFv__enTitle">FAQ</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-faqFv SP -->

  <!-- ▼ p-faqAccordion -->
  <section class="p-faqAccordion">
    <div class="p-faqAccordion__inner">
      <h2 class="p-faqAccordion__heading u-displayNone--PU">FAQ</h2>
      <div class="p-faqAccordion__accordionContainer">
        <!-- ▼ Accordion Start -->
        <dl class="c-accordion">

          <?php
          $faq_posts = new WP_Query(array(
            'post_type' => 'faq-cat',
            'posts_per_page' => -1,
          ));
          ?>

          <?php if ($faq_posts->have_posts()): ?>
            <?php while ($faq_posts->have_posts()): $faq_posts->the_post(); ?>

              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    <?php echo nl2br(esc_html(get_field('faq_q'))); ?>
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <p class="c-accordion__bodyText">
                      <?php echo nl2br(esc_html(get_field('faq_a'))); ?>
                    </p>
                  </div>
                </dd>
              </div>

            <?php endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">FAQが見つかりませんでした。</p>
          <?php
          endif;
          wp_reset_postdata();
          ?>

        </dl>
        <!-- ▲ Accordion End -->
      </div>
    </div>
    <div class="p-faqAccordion__imgBox">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-faq-item.jpg" alt="お寿司" class="p-faqAccordion__img" width="780" height="434">
    </div>
  </section>
  <!-- ▲ p-faqAccordion -->

  <?php get_footer(); ?>