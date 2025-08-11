<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-articleFv SP -->
  <section class="p-articleFv">
    <div class="p-articleFv__textContents">
      <div class="p-articleFv__inner">
        <div class="p-articleFv__textBox">
          <h2 class="p-articleFv__enTitle">ARTICLE</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-articleFv SP -->

  <!-- ▼ p-articleContents -->
  <div class="p-articleContents">
    <div class="p-articleContents__filterContainer">

      <?php
      $current_category = empty($_GET['category']) ? 'all' : $_GET['category'];
      $categories = array(
        'all' => 'ALL',
        'news-cat' => 'NEWS',
        'case-cat' => 'CASE',
        'event-cat' => 'EVENT',
      );
      ?>

      <ul class="p-articleContents__filterList">
        <?php foreach ($categories as $key => $value): ?>
          <li class="p-articleContents__filterItem">
            <a href="<?php echo esc_url(add_query_arg(array('category' => $key, 'paged' => 1))); ?>" class="p-articleContents__filterLink <?php echo ($current_category === $key) ? 'is-current' : ''; ?>">
              <?php echo $value; ?>
            </a>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>
    <ul class="p-articleContents__list">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        'category_name' => $current_category !== 'all' ? $current_category : '',
      );

      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

          <li class="p-articleContents__item">
            <a href="<?php the_permalink(); ?>" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', array('class' => 'p-articleContents__img')); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-image.jpg" alt="" class="p-articleContents__img" width="600" height="400">
                <?php endif; ?>
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <?php
                  $categories = get_the_category();
                  foreach ($categories as $category): ?>
                    <span class="p-articleContents__tag"><?php echo esc_html($category->cat_name); ?></span>
                  <?php endforeach; ?>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date"><?php the_time('Y.m.d'); ?></span><?php the_title(); ?>
                  </h2>
                </div>
              </div>
            </a>
          </li>

        <?php endwhile; ?>
      <?php else: ?>
        <p class="c-noneTitle">記事が見つかりませんでした。</p>
      <?php endif; ?>

    </ul>
    <div class="p-articleContents__paginationBox">
      <div class="c-pagination">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi(array(
            'query' => $the_query,
            'add_args' => array('category' => $current_category),
          ));
        } ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
  <!-- ▲ p-articleContents -->

  <?php get_footer(); ?>