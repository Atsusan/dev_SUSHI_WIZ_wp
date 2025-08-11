<?php
/*
Template Name: Plan Page
*/
?>

<?php get_header(); ?>

<!-- ▼ main -->
<main>
  <!-- ▼ p-chefFv SP -->
  <section class="p-chefFv">
    <div class="p-chefFv__textContents">
      <div class="p-chefFv__inner">
        <div class="p-chefFv__textBox">
          <h2 class="p-chefFv__enTitle">PLAN</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-chefFv SP -->

  <!-- ▼ p-chefCourse -->
  <section class="p-chefCourse">
    <div class="p-chefCourse__inner">
      <h2 class="p-chefCourse__title">
        豊富な種類のコースから
        <br>
        お選びいただけます。
      </h2>
      <p class="p-chefCourse__text">
        お客様に合わせたカスタマイズも可能ですのでお問い合わせください。
      </p>
    </div>
    <ul class="p-chefCourse__list">
      <li class="p-chefCourse__item">
        <a href="#plan1" class="p-chefCourse__link">
          <p class="p-chefCourse__price">
            個人プラン
          </p>
          <p class="p-chefCourse__plan">
            <span class="p-chefCourse__plan--en">1-8</span>名様
          </p>
        </a>
      </li>
      <li class="p-chefCourse__item">
        <a href="#plan2" class="p-chefCourse__link">
          <p class="p-chefCourse__price">
            食べ放題プラン
          </p>
          <p class="p-chefCourse__plan">
            <span class="p-chefCourse__plan--en">1-8</span>名様プラン
          </p>
        </a>
      </li>
      <li class="p-chefCourse__item">
        <a href="#plan3" class="p-chefCourse__link">
          <p class="p-chefCourse__price">
            日本酒ペアリングプラン
          </p>
        </a>
      </li>
      <li class="p-chefCourse__item">
        <a href="#plan4" class="p-chefCourse__link">
          <p class="p-chefCourse__price">
            ワインペアリングプラン
          </p>
        </a>
      </li>
    </ul>
  </section>
  <!-- ▲ p-chefCourse -->

  <!-- ▼ p-chefPersonal -->
  <section id="personal" class="p-chefPersonal">
    <div class="p-chefPersonal__inner">
      <h2 class="p-chefPersonal__title">個人宅プラン</h2>
      <div id="plan8" class="p-chefPersonal__planContainer">
        <div class="p-chefPersonal__headingBox">
          <h3 class="p-chefPersonal__heading">
            20,000<span class="p-chefPersonal__heading--fzSmall">円プラン</span>
          </h3>
          <span class="p-chefPersonal__sub">1名様あたり</span>
        </div>
        <div class="p-chefPersonal__textList">

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

              <div class="p-chefPersonal__textItem">
                <button class="p-chefPersonal__textButton" data-modal-target="#<?php echo $modal_id; ?>">
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
      </div>
    </div>
  </section>



  <?php get_footer(); ?>