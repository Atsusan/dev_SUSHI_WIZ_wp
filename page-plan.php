<?php
/*
Template Name: Plan Page
*/
?>

<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-planFv SP -->
  <section class="p-planFv">
    <div class="p-planFv__textContents">
      <div class="p-planFv__inner">
        <div class="p-planFv__textBox">
          <h2 class="p-planFv__enTitle">PLAN</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-planFv SP -->

  <!-- ▼ p-planCourse -->
  <section class="p-planCourse">
    <div class="p-planCourse__inner">
      <h2 class="p-planCourse__title">
        豊富な種類のコースから
        <br>
        お選びいただけます。
      </h2>
      <p class="p-planCourse__text">
        お客様に合わせたカスタマイズも可能ですのでお問い合わせください。
      </p>
    </div>
    <ul class="p-planCourse__list">
      <li class="p-planCourse__item">
        <a href="#personal" class="p-planCourse__link">
          <p class="p-planCourse__price">
            個人プラン
          </p>
          <p class="p-planCourse__plan">
            <span class="p-planCourse__plan--en">1-8</span>名様
          </p>
        </a>
      </li>
      <li class="p-planCourse__item">
        <a href="#buffet" class="p-planCourse__link">
          <p class="p-planCourse__price">
            食べ放題プラン
          </p>
          <p class="p-planCourse__plan">
            <span class="p-planCourse__plan--en">1-8</span>名様プラン
          </p>
        </a>
      </li>
      <li class="p-planCourse__item">
        <a href="#riceWine" class="p-planCourse__link">
          <p class="p-planCourse__price">
            日本酒ペアリングプラン
          </p>
        </a>
      </li>
      <li class="p-planCourse__item">
        <a href="#alcoholWine" class="p-planCourse__link">
          <p class="p-planCourse__price">
            ワインペアリングプラン
          </p>
        </a>
      </li>
    </ul>
  </section>
  <!-- ▲ p-planCourse -->

  <!-- ▼ p-planPersonal -->
  <section id="personal" class="p-planPersonal">
    <div class="p-planPersonal__inner">
      <h2 class="p-planPersonal__title">個人宅プラン</h2>
      <div id="plan1" class="p-planPersonal__planContainer">
        <div class="p-planPersonal__headingBox">
          <h3 class="p-planPersonal__heading">
            5,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planPersonal__sub">1名様あたり</span>
        </div>
        <div class="p-planPersonal__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan_5000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1; // モーダルのカウンターを初期化
          ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">5,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planPersonal__swiperContainer">
          <div id="planPersonal1" class="swiper p-planPersonal__swiper">
            <ul class="swiper-wrapper p-planPersonal__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planPersonal__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planPersonal__imgBox" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planPersonal__paginationBox">
              <div class="swiper-pagination p-planPersonal__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>

      <div id="plan2" class="p-planPersonal__planContainer">
        <div class="p-planPersonal__headingBox">
          <h3 class="p-planPersonal__heading">
            7,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planPersonal__sub">1名様あたり</span>
        </div>
        <div class="p-planPersonal__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan_7000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1;
          ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">7,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planPersonal__swiperContainer">
          <div id="planPersonal2" class="swiper p-planPersonal__swiper">
            <ul class="swiper-wrapper p-planPersonal__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planPersonal__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planPersonal__imgBox" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planPersonal__paginationBox">
              <div class="swiper-pagination p-planPersonal__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>

      <div id="plan3" class="p-planPersonal__planContainer">
        <div class="p-planPersonal__headingBox">
          <h3 class="p-planPersonal__heading">
            10,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planPersonal__sub">1名様あたり</span>
        </div>
        <div class="p-planPersonal__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan_10000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1;
          ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">10,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planPersonal__swiperContainer">
          <div id="planPersonal3" class="swiper p-planPersonal__swiper">
            <ul class="swiper-wrapper p-planPersonal__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planPersonal__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planPersonal__imgBox" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planPersonal__paginationBox">
              <div class="swiper-pagination p-planPersonal__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>

      <div id="plan4" class="p-planPersonal__planContainer">
        <div class="p-planPersonal__headingBox">
          <h3 class="p-planPersonal__heading">
            12,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planPersonal__sub">1名様あたり</span>
        </div>
        <div class="p-planPersonal__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan_12000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1; ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">12,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planPersonal__swiperContainer">
          <div id="planPersonal4" class="swiper p-planPersonal__swiper">
            <ul class="swiper-wrapper p-planPersonal__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planPersonal__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planPersonal__imgBox" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planPersonal__paginationBox">
              <div class="swiper-pagination p-planPersonal__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>
    </div>
  </section>

  <!-- ▼ p-planBuffet -->
  <section id="buffet" class="p-planBuffet">
    <div class="p-planBuffet__inner">
      <h2 class="p-planBuffet__title">食べ放題プラン</h2>
      <p class="p-planBuffet__text">10~15種のネタを好きなだけ、お召し上がりいただけます。</p>
      <div id="plan7" class="p-planBuffet__planContainer">
        <div class="p-planBuffet__headingBox">
          <h3 class="p-planBuffet__heading">
            15,000<span class="p-planBuffet__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planBuffet__sub">1名様あたり</span>
        </div>
        <div class="p-planBuffet__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan2_15000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1; ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planBuffet__textItem">
                <button class="p-planBuffet__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">15,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planBuffet__swiperContainer">
          <div id="planBuffet1" class="swiper p-planBuffet__swiper">
            <ul class="swiper-wrapper p-planBuffet__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planBuffet__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planBuffet__imgBox" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planBuffet__paginationBox">
              <div class="swiper-pagination p-planBuffet__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>
      <div id="plan8" class="p-planBuffet__planContainer">
        <div class="p-planBuffet__headingBox">
          <h3 class="p-planBuffet__heading">
            20,000<span class="p-planBuffet__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-planBuffet__sub">1名様あたり</span>
        </div>
        <div class="p-planBuffet__textList">

          <?php
          $plan_images = array();
          $args = array(
            'post_type' => 'plan-cat',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'plan_radio',
                'value' => 'plan2_20000',
                'compare' => '=',
              ),
            ),
          );
          $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()): $modal_count = 1; ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <?php
              $plan_name = get_field('plan_name');
              $plan_image_url = get_field('plan_image');
              $plan_text = get_field('plan_text');
              if ($plan_image_url) {
                $plan_images[] = $plan_image_url;
              }
              $post_id = get_the_ID();
              $modal_id = 'modal' . $post_id . '_' . $modal_count;
              ?>

              <div class="p-planBuffet__textItem">
                <button class="p-planBuffet__textButton" data-modal-target="#<?php echo $modal_id; ?>">
                  <?php echo esc_html($plan_name); ?>
                </button>
              </div>

              <div id="<?php echo $modal_id; ?>" class="c-modal js-modal" data-modal-target="#<?php echo $modal_id; ?>">
                <div class="c-modal__flex">
                  <!-- ▼ Modal Contents Stat -->
                  <div class="c-modal__card">
                    <button class="c-modal__close js-close">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                    </button>
                    <div class="c-modal__container">
                      <p class="c-modal__tag">20,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                      <div class="c-modal__titleBox">
                        <p class="c-modal__title"><?php echo esc_html($plan_name); ?></p>
                      </div>
                      <div class="c-modal__imgBox">
                        <?php if (!empty($plan_image_url)): ?>
                          <img src="<?php echo esc_url($plan_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                        <?php endif; ?>
                      </div>
                      <div class="c-modal__textBox">
                        <p class="c-modal__text"><?php echo nl2br(esc_html($plan_text)); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- ▲ Modal Contents End -->
                </div>
              </div>
              <!-- ▲ Modal End -->

            <?php
              $modal_count++; // モーダルカウンターをインクリメント
            endwhile; ?>
          <?php else: ?>
            <p class="c-noneTitle">コンテンツがありません。</p>
          <?php wp_reset_postdata();
          endif; ?>
        </div>

        <!-- ▼ Slide Stat -->
        <div class="p-planBuffet__swiperContainer">
          <div id="planPersonal4" class="swiper p-planBuffet__swiper">
            <ul class="swiper-wrapper p-planBuffet__wrapper">
              <?php foreach ($plan_images as $image_url): // 画像URLの配列をループ
              ?>
                <li class="swiper-slide p-planBuffet__slide">
                  <img src="<?php echo esc_url($image_url); ?>" class="p-planBuffet__img" width="660" height="440" loading="lazy">
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="p-planBuffet__paginationBox">
              <div class="swiper-pagination p-planBuffet__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->
      </div>
    </div>
  </section>
  <!-- ▲ p-planBuffet -->

  <!-- ▼ p-planAlcohol -->
  <section id="alcohol" class="p-planAlcohol">
    <!-- ▼ p-planAlcoholRiceWine -->
    <div class="p-planAlcoholRiceWine">
      <div class="p-planAlcohol__inner">
        <h2 id="riceWine" class="p-planAlcoholRiceWine__title">Drink</h2>
        <p class="p-planAlcoholRiceWine__read">
          日本酒ペアリングプラン
        </p>
        <p class="p-planAlcoholRiceWine__text">
          各寿司コースの料金にプラスすることで、SAKE DIPLOMAの資格を持つスタッフが厳選した日本酒をお持ちします。<br>
          選ばれたお寿司コースに併せて最適の日本酒をチョイスしますので、是非日本酒と併せてお寿司をお楽しみください。
        </p>

        <!-- ▼ Slide Stat -->
        <div class="p-planAlcohol__swiperContainer">
          <div id="planAlcohol1" class="swiper p-planAlcohol__swiper">
            <ul class="swiper-wrapper p-planAlcohol__wrapper">
              <li class="swiper-slide p-planAlcohol__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-RiceWine01.webp" class="p-planAlcohol__img" width="660" height="440" loading="lazy">
              </li>
              <li class="swiper-slide p-planAlcohol__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-RiceWine02.webp" class="p-planAlcohol__img" width="660" height="440" loading="lazy">
              </li>
            </ul>
            <div class="p-planAlcohol__paginationBox">
              <div class="swiper-pagination p-planAlcohol__pagination"></div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide End -->

        <ul class="p-planAlcohol__list">
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                おすすめ3種ペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+3,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                厳選日本酒ペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+5,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                希少日本酒ペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+7,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                希少日本酒ペアリング飲み放題コース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+10,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ▲ p-planAlcoholRiceWine -->

    <!-- ▼ p-planAlcoholWine -->
    <div id="alcoholWine" class="p-planAlcoholWine">
      <div class="p-planAlcohol__inner">
        <p class="p-planAlcoholWine__read">
          ワインペアリングプラン
        </p>
        <p class="p-planAlcoholWine__text">
          各寿司コースの料金にプラスすることで、ワインソムリエの資格を持つスタッフが厳選したワインをお持ちします。<br>
          選ばれたお寿司コースに併せて最適のワインをチョイスしますので、是非ワインと併せてお寿司をお楽しみください。
        </p>
        <div class="p-planAlcoholWine__imgBox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-alcoholWine.webp" class="p-planAlcoholWine__img" width="660" height="440" loading="lazy">
        </div>
        <ul class="p-planAlcohol__list">
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                おすすめ3種ペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+5,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                厳選ワインペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+7,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
          <li class="p-planAlcohol__item">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                希少ワインペアリングコース
              </h3>
              <p class="p-planAlcohol__sub">
                <span class="p-planAlcohol__sub--fzBig">+10,000</span><span class="p-planAlcohol__sub--fzMidLarge">円</span> / 1名様あたり
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ▲ p-planAlcoholWine -->
  </section>
  <!-- ▲ p-planAlcohol -->

  <!-- ▼ p-planTrip -->
  <section class="p-planTrip">
    <div class="p-planTrip__inner">
      <div class="p-planTrip__head">
        <h2 class="p-planTrip__title">出張交通費</h2>
        <ul class="p-planTrip__list">
          <li class="p-planTrip__item">
            <p class="p-planTrip__area--mtSmall">
              勝どき 月島 晴海エリア
            </p>
            <p class="p-planTrip__price--mtFzJp">無料</p>
          </li>
          <li class="p-planTrip__item">
            <p class="p-planTrip__area">上記以外の中央区内</p>
            <p class="p-planTrip__price">
              1,000<span class="p-planTrip__price--fzJp">円</span>
            </p>
          </li>
          <li class="p-planTrip__item">
            <p class="p-planTrip__area">中央区以外の東京都内</p>
            <p class="p-planTrip__price">
              2,000<span class="p-planTrip__price--fzJp">円～</span>
            </p>
          </li>
        </ul>
      </div>
      <div class="p-planTrip__footer">
        <h2 class="p-planTrip__title">対応エリア</h2>
        <div class="p-planTrip__box">
          <p class="p-planTrip__boxText">
            東京都内<span class="p-planTrip__boxText--fzSmall">及び</span>近郊
          </p>
        </div>
        <p class="p-planTrip__footerText">
          ※上記以外の開催場所でも
          <br>
          対応が出来る場合がございますので、
          <br>
          お気軽にお問合せください。
        </p>
      </div>
    </div>
  </section>
  <!-- ▲ p-planTrip -->

  <!-- ▼ p-planCancel -->
  <section class="p-planCancel">
    <div class="p-planCancel__inner">
      <h2 class="p-planCancel__title">キャンセルポリシー</h2>
      <div class="p-planCancel__readBox">
        <h3 class="p-planCancel__heading">予約キャンセルについて</h3>
        <p class="p-planCancel__read">
          ご予約日の4日前まではキャンセル料はかかりませんが、ご予約日3日前を過ぎてのキャンセルには、下記のキャンセル料をお支払い頂きます。
        </p>
      </div>
      <div class="p-planCancel__wrap">
        <ul class="p-planCancel__list">
          <li class="p-planCancel__item">3日前‥‥代金の30％</li>
          <li class="p-planCancel__item">前日‥‥代金の50％</li>
          <li class="p-planCancel__item--red">当日‥‥代金全額</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ▲ p-planCancel -->

  <?php get_footer(); ?>