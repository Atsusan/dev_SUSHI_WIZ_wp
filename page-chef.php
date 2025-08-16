<?php
/*
Template Name: Plan-Chef Page
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
          <h2 class="p-chefFv__enTitle">CHEF</h2>
          <h2 class="p-chefFv__jpTitle">職人一覧</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- ▲ p-chefFv SP -->

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
    // 現在選択中のカテゴリ
    $current_cat = isset($_GET['cat']) ? $_GET['cat'] : 'all';

    // タブメニュー（URLキー => 表示名）
    $tabs = array(
      'all'   => 'ALL',
      'cat01' => '出張寿司職人',
      'cat02' => '日本酒ソムリエ',
      'cat03' => 'ワインソムリエ',
    );
    ?>

    <!-- カテゴリ切り替えタブ -->
    <ul class="p-chefCourse__list">
      <?php foreach ($tabs as $key => $label): ?>
        <li class="p-chefCourse__item">
          <a href="<?php echo esc_url(add_query_arg(array('cat' => $key))); ?>"
            class="p-chefCourse__link <?php echo ($current_cat === $key) ? 'is-current' : ''; ?>">
            <p class="p-chefCourse__price"><?php echo esc_html($label); ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="p-chefPersonal__planContainer">
      <div class="p-chefPersonal__textList">
        <?php
        // WP_Query 用の args
        $args = array(
          'post_type'      => 'chef-cat',
          'posts_per_page' => -1,
        );

        // ALL以外ならmeta_queryで絞り込み
        if ($current_cat !== 'all') {
          $args['meta_query'] = array(
            array(
              'key'     => 'chef_cat',
              'value'   => $current_cat,
              'compare' => '=',
            )
          );
        }

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()): $modal_count = 1; ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <?php
            $chef_name      = get_field('chef_name');
            $chef_image_url = get_field('chef_img');
            $chef_job       = get_field('chef_job');
            $chef_btn       = get_field('chef_btn');
            $chef_link      = get_field('chef_link');
            $chef_cat_val   = get_field('chef_cat');
            $chef_about     = get_field('chef_about');
            $chef_popular   = get_field('chef_popular');
            $chef_comment   = get_field('chef_comment');
            $chef_spatial   = get_field('chef_spatial');
            $post_id        = get_the_ID();
            $modal_id       = 'modal' . $post_id . '_' . $modal_count;
            ?>

            <div class="p-chefPersonalCard">
              <div class="p-chefPersonalCard__card">
                <a class="p-chefPersonalCard__link" data-modal-target="#<?php echo $modal_id; ?>">
                  <p class="p-chefPersonalCard__job"><?php echo esc_html($tabs[$chef_cat_val]); ?></p>
                  <p class="p-chefPersonalCard__name"><?php echo esc_html($chef_name); ?></p>
                  <div class="p-chefPersonalCard__imgBox">
                    <?php if (!empty($chef_image_url)): ?>
                      <img src="<?php echo esc_url($chef_image_url); ?>" alt="" class="p-chefPersonalCard__img" loading="lazy">
                    <?php else: ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="p-chefPersonalCard__img" width="660" height="440" loading="lazy">
                    <?php endif; ?>
                  </div>
                  <p class="p-chefPersonalCard__bottom">
                    もっと詳しく<span class="p-chefPersonalCard__plus"></span>
                  </p>
                </a>
                <div class="p-chefPersonalCard__btnBox">
                  <a href="<?php echo esc_html($chef_link); ?>" class="p-chefPersonalCard__btn">
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
                      <?php if (!empty($chef_image_url)): ?>
                        <img src="<?php echo esc_url($chef_image_url); ?>" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                      <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="" class="c-modal__img" width="660" height="440" loading="lazy">
                      <?php endif; ?>
                    </div>
                    <div class="c-modal__contents">
                      <?php if($chef_name): ?>
                      <p class="c-modal__name"><?php echo esc_html($chef_name); ?><?php if($chef_popular): ?><span class="c-modal__nameTag"><?php echo esc_html($chef_popular); ?></span><?php endif; ?></p>
                      <?php endif; ?>
                      <?php if($chef_job): ?>
                      <p class="c-modal__job"><?php echo nl2br(esc_html($chef_job)); ?></p>
                      <?php endif; ?>
                      <?php if($chef_about): ?>
                      <p class="c-modal__about"><?php echo nl2br(esc_html($chef_about)); ?></p>
                      <?php endif; ?>
                      <?php if($chef_comment): ?>
                      <p class="c-modal__comment"><?php echo nl2br(esc_html($chef_comment)); ?></p>
                      <?php endif; ?>
                      <?php if($chef_spatial): ?>
                      <div class="c-modal__spatialBox">
                        <span class="c-modal__spatialTag">スペシャリティ</span>
                        <p class="c-modal__spatial"><?php echo nl2br(esc_html($chef_spatial)); ?></p>
                      </div>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ▲ モーダル -->

            <?php $modal_count++; ?>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="c-noneTitle--white">コンテンツがありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <!-- ▲ p-chefCourse -->

  <?php get_footer(); ?>