<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-articleSingle -->
  <section class="p-articleSingle">
    <div class="p-articleSingle__inner">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="p-articleSingle__titleBox">
            <h2 class="p-articleSingle__title"><?php the_title(); ?></h2>
          </div>
          <div class="p-articleSingle__thumbnailBox">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('large', array('class' => 'p-articleSingle__thumbnail')); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-image.jpg" alt="" class="p-articleSingle__thumbnail" width="600" height="400">
            <?php endif; ?>
          </div>
          <div class="p-articleSingle__tagBox">
            <span class="p-articleSingle__tag"><?php the_category(' '); ?></span>
            <div class="p-articleSingle__dateBox">
              <time class="p-articleSingle__date" datetime="<?php echo get_the_date('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
          <div class="p-articleSingle__contents">
            <?php the_content(); ?>
          </div>
    </div>
  <?php endwhile; ?>
<?php else: ?>
  <p class="c-noneTitle">記事はありません</p>
<?php endif; ?>

<div class="p-articleSingle__btnBox">
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  ?>
  <?php if ($next_post): ?>
    <a href="<?php echo get_permalink($next_post->ID); ?>" class="p-articleSingle__next">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-single-arrow.svg" alt="" class="p-articleSingle__arrowImg" width="28"
        height="28">
    </a>
  <?php else: ?>
    <div class="p-articleSingle__next" style="opacity: 0; visibility: hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-single-arrow.svg" alt="" class="p-articleSingle__arrowImg" width="28"
        height="28">
    </div>
  <?php endif; ?>
  <a href="<?php echo esc_url(home_url('/archive')); ?>" class="p-articleSingle__btnLink">
    <span class="p-articleSingle__btnText">BACK</span>
  </a>
  <?php if ($prev_post): ?>
    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="p-articleSingle__prev">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-single-arrow.svg" alt="" class="p-articleSingle__arrowImg" width="28"
        height="28">
    </a>
  <?php else: ?>
    <div class="p-articleSingle__prev" style="opacity: 0; visibility: hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-single-arrow.svg" alt="" class="p-articleSingle__arrowImg" width="28"
        height="28">
    </div>
  <?php endif; ?>
</div>
  </section>
  <!-- ▲ p-articleSingle -->

  <?php get_footer(); ?>