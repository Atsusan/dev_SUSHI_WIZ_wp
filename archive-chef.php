<?php get_header(); ?>

<main>
  <!-- ▼ p-chefFv -->
  <section class="p-chefFv">
    <div class="p-chefFv__textContents">
      <div class="p-chefFv__inner">
        <div class="p-chefFv__textBox">
          <h2 class="p-chefFv__enTitle">CHEF</h2>
          <h2 class="p-chefFv__jpTitle">職人一覧</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-chefFv -->

  <!-- ▼ p-chefCourse -->
  <section class="p-chefCourse">
    <div class="p-chefCourse__inner">
      <h2 class="p-chefCourse__title">WIZARDS</h2>
      <p class="p-chefCourse__text">
        あなたのもとへ、<br>
        魔法のようなお鮨を届ける職人たち
      </p>
      <p class="p-chefCourse__text">
        SUSHI WIZの職人たちは、<br>
        お鮨を握る“WIZARDS=魔法使い”。ひとつひとつの仕込みと握りに心を込めて、<br>
        大切な人とのひとときに、魔法のような体験をお届けします。<br>
        ご自宅でも、特別な日にも。<br>
        あなたのそばに寄り添う“SUSHI WIZ”の職人たちをご紹介します。
      </p>
    </div>

    <?php
    // 現在選択中のタクソノミー
    $current_cat = isset($_GET['chef-cat']) ? $_GET['chef-cat'] : 'all';

    // タブメニュー（URLキー => 表示名）
    $tabs = array(
      'all'                  => 'ALL',
      'traveling-chef-cat'   => '出張寿司職人',
      'sake-sommelier-cat'   => '日本酒ソムリエ',
      'wine-sommelier-cat'   => 'ワインソムリエ',
    );
    ?>

    <!-- カテゴリ切り替えタブ -->
    <ul class="p-chefCourse__list">
      <?php foreach ($tabs as $slug => $label): ?>
        <li class="p-chefCourse__item">
          <?php $link_args = ($slug !== 'all') ? array('chef-cat' => $slug, 'paged' => 1) : array(); ?>
          <a href="<?php echo esc_url(add_query_arg($link_args, get_post_type_archive_link('chef'))); ?>"
            class="p-chefCourse__link <?php echo ($current_cat === $slug) ? 'is-current' : ''; ?>">
            <p class="p-chefCourse__price"><?php echo esc_html($label); ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="p-chefPersonal__planContainer">
      <div class="p-chefPersonal__textList">
        <?php if (have_posts()): $modal_count = 1; ?>
          <ul class="p-chefPersonal__list">
            <?php while (have_posts()): the_post(); ?>
              <?php
              $chef_name      = get_field('chef_name');
              $chef_image_url = get_field('chef_img');
              $chef_image_url2 = get_field('chef_img2');
              $chef_job       = get_field('chef_job');
              $chef_btn       = get_field('chef_btn');
              $chef_link      = get_field('chef_link');
              $chef_cat_val   = wp_get_post_terms(get_the_ID(), 'chef-cat', array('fields' => 'slugs'));
              $chef_about     = get_field('chef_about');
              $chef_popular   = get_field('chef_popular');
              $chef_comment   = get_field('chef_comment');
              $chef_spatial   = get_field('chef_spatial');
              $post_id        = get_the_ID();
              $modal_id       = 'modal' . $post_id . '_' . $modal_count;
              ?>
              <li class="p-chefPersonal_item">
                <div class="p-chefPersonalCard">
                  <div class="p-chefPersonalCard__card">
                    <a class="p-chefPersonalCard__link" data-modal-target="#<?php echo $modal_id; ?>">
                      <p class="p-chefPersonalCard__job"><?php echo esc_html($tabs[$chef_cat_val[0]] ?? ''); ?></p>
                      <p class="p-chefPersonalCard__name"><?php echo esc_html($chef_name); ?></p>
                      <div class="p-chefPersonalCard__imgBox">
                        <?php if (!empty($chef_image_url)): ?>
                          <img src="<?php echo esc_url($chef_image_url); ?>" alt="" class="p-chefPersonalCard__img" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="p-chefPersonalCard__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <p class="p-chefPersonalCard__bottom">もっと詳しく<span class="p-chefPersonalCard__plus"></span></p>
                    </a>
                    <div class="p-chefPersonalCard__btnBox">
                      <a href="<?php echo esc_url($chef_link); ?>" class="p-chefPersonalCard__btn">
                        <?php echo esc_html($chef_btn); ?>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- モーダル -->
                <div id="<?php echo $modal_id; ?>" class="c-modal--chef js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                  <div class="c-modal__flex">
                    <div class="c-modal__card">
                      <button class="c-modal__close js-close"></button>
                      <div class="c-modal__container">
                        <div class="c-modal__imgBox">
                          <?php if (!empty($chef_image_url2)): ?>
                            <img src="<?php echo esc_url($chef_image_url2); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                          <?php elseif (!empty($chef_image_url)): ?>
                            <img src="<?php echo esc_url($chef_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                          <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                          <?php endif; ?>
                        </div>
                        <div class="c-modal__contents">
                          <?php if ($chef_name): ?>
                            <p class="c-modal__name">
                              <?php echo esc_html($chef_name); ?>
                              <?php if ($chef_popular): ?><span class="c-modal__nameTag"><?php echo esc_html($chef_popular); ?></span><?php endif; ?>
                            </p>
                          <?php endif; ?>
                          <?php if ($chef_job): ?>
                            <p class="c-modal__job"><?php echo nl2br(esc_html($chef_job)); ?></p>
                          <?php endif; ?>
                          <?php if ($chef_about): ?>
                            <p class="c-modal__about"><?php echo nl2br(esc_html($chef_about)); ?></p>
                          <?php endif; ?>
                          <?php if ($chef_comment): ?>
                            <p class="c-modal__comment"><?php echo nl2br(esc_html($chef_comment)); ?></p>
                          <?php endif; ?>
                          <?php if ($chef_spatial): ?>
                            <div class="c-modal__spatialBox">
                              <span class="c-modal__spatialTag">スペシャリティ</span>
                              <p class="c-modal__spatial"><?php echo nl2br(esc_html($chef_spatial)); ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ▲ モーダル -->
              </li>
              <?php $modal_count++; ?>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション -->
          <div class="p-chefPersonalCard__paginationBox">
            <div class="c-pagination">
              <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
              } ?>
            </div>
          </div>

        <?php else: ?>
          <p class="c-noneTitle--white">コンテンツがありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- ▲ p-chefCourse -->

  <?php get_footer(); ?>