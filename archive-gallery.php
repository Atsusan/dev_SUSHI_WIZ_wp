<?php get_header(); ?>

<main>
  <section class="p-galleryFv">
    <div class="p-galleryFv__textContents">
      <div class="p-galleryFv__inner">
        <div class="p-galleryFv__textBox">
          <h2 class="p-galleryFv__enTitle">GALLERY</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="p-galleryCourse">
    <?php
    $current_category = isset($_GET['gallery-cat']) ? $_GET['gallery-cat'] : 'all';
    $tabs = array(
      'all'            => 'ALL',
      'individual-cat' => '個人宅出張',
      'business-cat'   => '法人パーティー出張',
      'experience-cat' => 'にぎり寿司体験',
      'other-cat'      => 'その他',
    );
    ?>

    <ul class="p-galleryCourse__list">
      <?php foreach ($tabs as $key => $value): ?>
        <li class="p-galleryCourse__item">
          <?php if ($key === 'all'): ?>
            <a href="<?php echo esc_url(get_post_type_archive_link('gallery')); ?>"
              class="p-galleryCourse__link <?php echo ($current_category === 'all') ? 'is-current' : ''; ?>">
              <p class="p-galleryCourse__text"><?php echo esc_html($value); ?></p>
            </a>
          <?php else: ?>
            <a href="<?php echo esc_url(add_query_arg(array('gallery-cat' => $key), get_post_type_archive_link('gallery'))); ?>"
              class="p-galleryCourse__link <?php echo ($current_category === $key) ? 'is-current' : ''; ?>">
              <p class="p-galleryCourse__text"><?php echo esc_html($value); ?></p>
            </a>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="p-galleryPersonal__planContainer">
      <div class="p-galleryPersonal__textList">
        <?php if ( have_posts() ) : ?>
          <ul class="p-galleryList">
            <?php while ( have_posts() ): the_post(); ?>
              <?php
              $gallery_image_url = get_field('gallery_img');
              $gallery_title     = get_field('gallery_title');
              $gallery_place     = get_field('gallery_place');
              ?>
              <li class="p-galleryList__item">
                <div class="p-galleryList__imgBox">
                  <img src="<?php echo esc_url($gallery_image_url); ?>" alt="<?php echo esc_attr($gallery_title); ?>" class="p-galleryList__img">
                </div>
                <div class="p-galleryList__textBox">
                  <p class="p-galleryList__place"><?php echo esc_html($gallery_place); ?></p>
                  <h3 class="p-galleryList__title"><?php echo esc_html($gallery_title); ?></h3>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p class="c-noneTitle--white">コンテンツがありません。</p>
        <?php endif; ?>

        <div class="p-galleryList__paginationBox">
          <div class="c-pagination">
            <?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
