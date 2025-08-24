<?php get_header(); ?>

<!-- ▼ p-topFvContents -->
<section class="p-topFvContents">
  <div class="p-topFvContents__inner">
    <div class="p-topFvContents__textBox">
      <h2 class="p-topFvContents__mainText">握りたての鮨で<br>心躍る<br>祭りのような<br>ライブ体験を。</h2>
    </div>
  </div>
  <div class="p-topFvContents__imgBox">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-fv-content-item.jpg" alt="" class="p-topFvContents__img" width="604" height="606">
  </div>
  <div class="p-topFvContents__scrollBox">
    <div class="c-scrollDown__box">
      <p class="c-scrollDown__text">SCROLL</p>
      <span class="c-scrollDown__bar"></span>
    </div>
  </div>
</section>
<!-- ▲ p-topFvContents -->

<!-- ▼ p-topConcept -->
<section class="p-topConcept">
  <div class="p-topConcept__head">
    <div class="p-topConcept__titleBox">
      <h2 class="p-topConcept__title">鮨で人を笑顔にしたい<br>鮨で人とを繋げたい</h2>
    </div>
    <div class="p-topConcept__imgBox">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-concept-bg.jpg" alt="concept-bg" class="p-topConcept__img" width="780" height="676">
    </div>
  </div>
  <div class="p-topConcept__inner">
    <p class="p-topConcept__text">SUSHI WIZは、新鮮で美味しいお鮨を、ご自宅で手軽に楽しんでいただける出張寿司サービスです。こだわり抜いた食材とリーズナブルな価格、お客様のニーズに合わせた多彩なプランで、どこでも誰とでも美味しいお鮨を楽しめます。</p>
    <div class="p-topConcept__btnBox">
      <div class="c-btn">
        <a href="<?php echo esc_url(home_url('/concept')); ?>" class="c-btn__link">MORE</a>
      </div>
    </div>
  </div>
</section>
<!-- ▲ p-topConcept -->

<!-- ▼ p-topProfile -->
<section class="p-topProfile">
  <div class="p-topProfile__inner">
    <div class="p-topProfile__titleBox">
      <div class="c-secondHeading">
        <h2 class="c-secondHeading__title">PROFILE</h2>
      </div>
      <div class="p-topProfile__imgBox">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-profile-img.jpg" alt="高橋 元気" class="p-topProfile__img" width="660" height="440">
      </div>
      <div class="p-topProfile__textBox">
        <h3 class="p-topProfile__title">とびっきりのお鮨を<br>楽しく握ります</h3>
        <p class="p-topProfile__text">現職の中央区議会議員でもある異色の経歴をもつ職人・高橋元気が名店で腕を磨いた確かな技術で独創的かつエンターテイメント性の高い鮨で<br>皆様の特別な日もいつもの日常にも<br>祭りのようなワクワクする時間を提供します。</p>
      </div>
      <div class="p-topProfile__btnBox">
        <div class="c-btn--black">
          <a href="<?php echo esc_url(home_url('/profile')); ?>" class="c-btn__link">MORE</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ▲ p-topProfile -->

<!-- ▼ p-topPlan -->
<section class="p-topPlan">
  <div class="p-topPlan__titleBox">
    <div class="c-secondHeading">
      <h2 class="c-secondHeading__title--white">PLAN</h2>
    </div>
    <p class="p-topPlan__read">リーズナブルで多種多様な<br>プランをご用意しております。</p>
  </div>
  <ul class="p-topPlan__list">
    <li class="p-topPlan__item">
      <a href="<?php echo esc_url(home_url('/plan')); ?>#personal" class="p-topPlan__link">
        <div class="p-topPlan__textBox">
          <h3 class="p-topPlan__title">個人宅プラン</h3>
          <span class="p-topPlan__headCount">( 1～８名様 )</span>
          <p class="p-topPlan__text">全16種類のコースからお選びいただけます。</p>
        </div>
        <div class="p-topPlan__moreBox">
          <span class="p-topPlan__more">VIEW MORE</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-btn-more.svg" alt="view more" class="p-topPlan__moreImg" width="137" height="11">
        </div>
      </a>
    </li>
    <li class="p-topPlan__item">
      <a href="<?php echo esc_url(home_url('/party-plan')); ?>" class="p-topPlan__link">
        <div class="p-topPlan__textBox">
          <h3 class="p-topPlan__title">法人向けプラン</h3>
          <span class="p-topPlan__headCount">( ８名様～ )</span>
          <p class="p-topPlan__text">お客様のご希望に合わせてメニューを考えます。</p>
        </div>
        <div class="p-topPlan__moreBox">
          <span class="p-topPlan__more">VIEW MORE</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-btn-more.svg" alt="view more" class="p-topPlan__moreImg" width="137" height="11">
        </div>
      </a>
    </li>
    <li class="p-topPlan__item">
      <a href="<?php echo esc_url(home_url('/plan')); ?>#alcohol" class="p-topPlan__link">
        <div class="p-topPlan__textBox">
          <h3 class="p-topPlan__title">ペアリングプラン</h3>
          <p class="p-topPlan__text">SAKE DIPLOMA の資格を持つスタッフが厳選した<br>日本酒・ワインをペアリングしたコース。</p>
        </div>
        <div class="p-topPlan__moreBox">
          <span class="p-topPlan__more">VIEW MORE</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-btn-more.svg" alt="view more" class="p-topPlan__moreImg" width="137" height="11">
        </div>
      </a>
    </li>
  </ul>
</section>
<!-- ▲ p-topPlan -->

<!-- ▼ p-topInsta -->
<section class="p-topInsta">
  <div class="p-topInsta__inner">
    <div class="p-topInsta__titleBox">
      <div class="c-secondHeading">
        <h2 class="c-secondHeading__title">INSTAGRAM</h2>
      </div>
    </div>
    <div class="p-topInsta__list">
      <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
    <div class="p-topInsta__btnBox">
      <div class="c-btn--img">
        <?php $instagram_url = get_option('instagram_url', '') ?>
        <?php if ($instagram_url): ?>
          <a href="<?php echo esc_url($instagram_url); ?>" class="c-btn__link">
            <span class="c-btn__text">VIEW ON</span>
            <svg class="c-btn__img" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_84_1380)">
                <path
                  d="M9.5271 1.71074C12.0654 1.71074 12.366 1.72187 13.3642 1.76641C14.2919 1.80723 14.7929 1.96309 15.1269 2.09297C15.5685 2.26367 15.8876 2.47148 16.2179 2.80176C16.5519 3.13574 16.756 3.45117 16.9267 3.89277C17.0566 4.22676 17.2125 4.73145 17.2533 5.65547C17.2978 6.65742 17.3089 6.95801 17.3089 9.49258C17.3089 12.0309 17.2978 12.3314 17.2533 13.3297C17.2125 14.2574 17.0566 14.7584 16.9267 15.0924C16.756 15.534 16.5482 15.8531 16.2179 16.1834C15.8839 16.5174 15.5685 16.7215 15.1269 16.8922C14.7929 17.0221 14.2882 17.1779 13.3642 17.2188C12.3623 17.2633 12.0617 17.2744 9.5271 17.2744C6.98882 17.2744 6.68823 17.2633 5.68999 17.2188C4.76226 17.1779 4.26128 17.0221 3.92729 16.8922C3.48569 16.7215 3.16655 16.5137 2.83628 16.1834C2.50229 15.8494 2.29819 15.534 2.12749 15.0924C1.99761 14.7584 1.84175 14.2537 1.80093 13.3297C1.7564 12.3277 1.74526 12.0271 1.74526 9.49258C1.74526 6.9543 1.7564 6.65371 1.80093 5.65547C1.84175 4.72773 1.99761 4.22676 2.12749 3.89277C2.29819 3.45117 2.50601 3.13203 2.83628 2.80176C3.17026 2.46777 3.48569 2.26367 3.92729 2.09297C4.26128 1.96309 4.76597 1.80723 5.68999 1.76641C6.68823 1.72187 6.98882 1.71074 9.5271 1.71074ZM9.5271 0C6.948 0 6.62515 0.0111328 5.61206 0.0556641C4.60269 0.100195 3.90874 0.263477 3.30757 0.497266C2.68042 0.742188 2.14976 1.06504 1.6228 1.5957C1.09214 2.12266 0.769287 2.65332 0.524365 3.27676C0.290576 3.88164 0.127295 4.57187 0.0827637 5.58125C0.0382324 6.59805 0.0270996 6.9209 0.0270996 9.5C0.0270996 12.0791 0.0382324 12.402 0.0827637 13.415C0.127295 14.4244 0.290576 15.1184 0.524365 15.7195C0.769287 16.3467 1.09214 16.8773 1.6228 17.4043C2.14976 17.9312 2.68042 18.2578 3.30386 18.499C3.90874 18.7328 4.59897 18.8961 5.60835 18.9406C6.62144 18.9852 6.94429 18.9963 9.52339 18.9963C12.1025 18.9963 12.4253 18.9852 13.4384 18.9406C14.4478 18.8961 15.1417 18.7328 15.7429 18.499C16.3664 18.2578 16.897 17.9312 17.424 17.4043C17.9509 16.8773 18.2775 16.3467 18.5187 15.7232C18.7525 15.1184 18.9158 14.4281 18.9603 13.4188C19.0048 12.4057 19.016 12.0828 19.016 9.50371C19.016 6.92461 19.0048 6.60176 18.9603 5.58867C18.9158 4.5793 18.7525 3.88535 18.5187 3.28418C18.2849 2.65332 17.9621 2.12266 17.4314 1.5957C16.9044 1.06875 16.3738 0.742188 15.7503 0.500977C15.1455 0.267187 14.4552 0.103906 13.4458 0.059375C12.4291 0.0111328 12.1062 0 9.5271 0Z" />
                <path
                  d="M9.5271 4.62012C6.83296 4.62012 4.64722 6.80586 4.64722 9.5C4.64722 12.1941 6.83296 14.3799 9.5271 14.3799C12.2212 14.3799 14.407 12.1941 14.407 9.5C14.407 6.80586 12.2212 4.62012 9.5271 4.62012ZM9.5271 12.6654C7.77925 12.6654 6.36167 11.2479 6.36167 9.5C6.36167 7.75215 7.77925 6.33457 9.5271 6.33457C11.275 6.33457 12.6925 7.75215 12.6925 9.5C12.6925 11.2479 11.275 12.6654 9.5271 12.6654Z" />
                <path
                  d="M15.7392 4.42735C15.7392 5.05821 15.2271 5.5666 14.6 5.5666C13.9691 5.5666 13.4607 5.05449 13.4607 4.42735C13.4607 3.79649 13.9728 3.28809 14.6 3.28809C15.2271 3.28809 15.7392 3.8002 15.7392 4.42735Z" />
              </g>
              <defs>
                <clipPath id="clip0_84_1380">
                  <rect width="19" height="19" fill="white" transform="translate(0.0270996)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- ▲ p-topInsta -->

<!-- ▼ p-topFaq -->
<section class="p-topFaq">
  <div class="p-topFaq__inner">
    <div class="p-topFaq__titleBox">
      <div class="c-secondHeading">
        <h2 class="c-secondHeading__title--white">FAQ</h2>
      </div>
    </div>
    <div class="p-topFaq__accordionContainer">
      <!-- ▼ Accordion Start -->
      <dl class="c-accordion">

        <?php
        $faq_posts = new WP_Query(array(
          'post_type' => 'faq-cat',
          'posts_per_page' => 5,
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
          <p>FAQが見つかりませんでした。</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>

      </dl>
      <!-- ▲ Accordion End -->
    </div>
    <div class="p-topFaq__btnBox">
      <div class="c-btn">
        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="c-btn__link">MORE</a>
      </div>
    </div>
  </div>
  <div class="p-topFaq__imgBox">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-faq-item.jpg" alt="お寿司" class="p-topFaq__img" width="780" height="434">
  </div>
</section>
<!-- ▲ p-topFaq -->

<!-- ▼ p-topFlow -->
<section class="p-topFlow">
  <div class="p-topFlow__inner">
    <div class="p-topFlow__titleBox">
      <div class="c-secondHeading--jp">
        <h2 class="c-secondHeading__title--white">ご利用の流れ</h2>
      </div>
    </div>
    <ul class="p-topFlow__list">
      <li class="p-topFlow__item">
        <div class="p-topFlow__numberBox">
          <span class="p-topFlow__en">STEP</span>
          <span class="p-topFlow__number">1</span>
        </div>
        <div class="p-topFlow__textBox">
          <h3 class="p-topFlow__title">お問い合わせ</h3>
          <p class="p-topFlow__text">
            まずはお気軽にお問い合わせください
          </p>
        </div>
      </li>
      <li class="p-topFlow__item">
        <div class="p-topFlow__numberBox">
          <span class="p-topFlow__en">STEP</span>
          <span class="p-topFlow__number">2</span>
        </div>
        <div class="p-topFlow__textBox">
          <h3 class="p-topFlow__title">予約確認</h3>
          <p class="p-topFlow__text">ご希望の内容、日時、場所についてヒアリングいたします。</p>
        </div>
      </li>
      <li class="p-topFlow__item">
        <div class="p-topFlow__numberBox">
          <span class="p-topFlow__en">STEP</span>
          <span class="p-topFlow__number">3</span>
        </div>
        <div class="p-topFlow__textBox">
          <h3 class="p-topFlow__title">予約確定</h3>
          <p class="p-topFlow__text">内容に問題がなければ、ご予約の確定となります。</p>
        </div>
      </li>
      <li class="p-topFlow__item">
        <div class="p-topFlow__numberBox">
          <span class="p-topFlow__en">STEP</span>
          <span class="p-topFlow__number">4</span>
        </div>
        <div class="p-topFlow__textBox">
          <h3 class="p-topFlow__title">当日の実施</h3>
          <p class="p-topFlow__text">開始の1時間前から準備～片付けまでさせて頂きます。自慢の鮨をお楽しみください。</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- ▲ p-topFlow -->

<!-- ▼ p-topNews -->
<section class="p-topNews">
  <div class="p-topNews__titleBox">
    <div class="c-secondHeading">
      <h2 class="c-secondHeading__title">ARTICLE</h2>
    </div>
  </div>
  <!-- ▼ topNews Slide Start -->
  <div class="p-topNews__swiperContainer">
    <div class="swiper js-swiperNews p-topNews__swiper">
      <div class="swiper-wrapper p-topNews__swiperWrapper">
        <!-- ▼ topNews Slide Contents Start -->

        <?php if (have_posts()): ?>
          <?php $post_count = wp_count_posts()->publish; ?>
          <?php while (have_posts()): the_post(); ?>

            <div class="swiper-slide p-topNews__swiperSlide">
              <a href="<?php the_permalink(); ?>" class="p-topNews__link">
                <span class="p-topNews__imgBox">
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="p-topNews__img" width="600" height="401">
                  <?php else: ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-image.jpg" alt="<?php the_title(); ?>" class="p-topNews__img" width="600" height="401">
                  <?php endif; ?>
                </span>
                <div class="p-topNews__textBox">
                  <span class="p-topNews__tag">
                    <?php foreach ((get_the_category()) as $category) {
                      echo $category->cat_name . ' ';
                    } ?>
                  </span>
                  <div class="p-topNews__box">
                    <span class="p-topNews__date">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </span>
                    <h3 class="p-topNews__title">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                </div>
              </a>
            </div>

          <?php endwhile; ?>
        <?php else: ?>
          <p class="c-noneTitle">記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>

      <?php if ($post_count > 1): ?>
        <div class="p-topNews__swiperController">
          <div class="swiper-button-prev js-swiperNews__prev p-topNews__swiperPrev"></div>
          <div class="p-topNews__swiperPaginationBox">
            <div class="swiper-pagination js-swiperNews__pagination p-topNews__swiperPagination"></div>
          </div>
          <div class="swiper-button-next js-swiperNews__next p-topNews__swiperNext"></div>
        </div>
      <?php endif; ?>
    </div>
    <!-- ▲ topNews Slide End -->
  </div>
  <div class="p-topNews__btnBox">
    <div class="c-btn--black">
      <a href="<?php echo esc_url(home_url('/archive')); ?>" class="c-btn__link">MORE</a>
    </div>
  </div>
</section>
<!-- ▲ p-topNews -->

<?php get_footer(); ?>