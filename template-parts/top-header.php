  <!-- ▼ PC FV Start -->
  <div class="l-fv u-displayNone--flexPU">

    <!-- ▼ Slide l-fvBg Start -->
    <div class="l-fvBg">
      <div class="swiper js-swiperFv l-fvBg__swiper">
        <div class="swiper-wrapper l-fvBg__wrapper">
          <div class="swiper-slide l-fvBg__slide">
            <img class="l-fvBg__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv.webp" alt="" width="2880" height="1774">
          </div>
          <div class="swiper-slide l-fvBg__slide">
            <img class="l-fvBg__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2.webp" alt="" width="2880" height="1774">
          </div>
          <div class="swiper-slide l-fvBg__slide">
            <img class="l-fvBg__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv3.webp" alt="" width="2880" height="1774">
          </div>
        </div>
      </div>
    </div>
    <!-- ▲ Slide l-fvBg END -->

    <div class="l-fv__loopTextContainer">
      <!-- ▼ Slide Loop Text Start -->
      <div class="c-loopText__textSwiperContainer">
        <div class="swiper js-swiperText c-loopText__textSwiper">
          <ul class="swiper-wrapper c-loopText__textWrapper">
            <?php for ($i = 0; $i < 10; $i++): ?>
              <li class="swiper-slide c-loopText__textSlide">議員出張寿司</li>
              <li class="swiper-slide c-loopText__textSlide--en">SUSHI WIZ</li>
              <li class="swiper-slide c-loopText__textSlide">東京湾岸出張寿司</li>
              <li class="swiper-slide c-loopText__textSlide--en">SUSHI WIZ</li>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
      <!-- ▲ Slide Loop Text End -->
    </div>
    <div class="l-fv__textBox">
      <p class="l-fv__mainText">
        今日、
        <br>
        あなた <span class="l-fv__mainText--mlSmallLittleFz">が</span><span class="l-fv__mainText--smallFz">いる</span>場所<span
          class="l-fv__mainText--littleSmallFz">が</span>
        <br>
        <span class="l-fv__mainText--bigFz">鮨屋</span><span class="l-fv__mainText--littleSmallFz">に</span>なる。
      </p>
    </div>
    <div class="l-fv__loopImagesContainer">
      <!-- ▼ Slide Loop Images Start -->
      <div class="c-loopImages__imagesSwiperContainer">
        <div class="swiper js-swiperImages c-loopImages__imagesSwiper">
          <ul class="swiper-wrapper c-loopImages__imagesWrapper">
            <?php for ($j = 0; $j < 3; $j++): ?>
              <?php for ($i = 1; $i <= 10; $i++): ?>
                <li class="swiper-slide c-loopImages__imagesSlide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-item<?php echo $i; ?>.jpg" alt="item-<?php echo $i; ?>" class="c-loopImages__ImagesSlideItem" width="404" height="404">
                </li>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
      <!-- ▲ Slide Loop Images End -->
    </div>
  </div>
  <!-- ▲ PC FV End-->

  <!-- ▼ contents Start -->
  <div class="l-bigWrapper">
    <!-- ▼ header -->
    <div class="l-header">
      <div class="l-header__inner">
        <h1 class="l-header__logo u-displayNone--PO">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logoLink">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69"
              height="64">
          </a>
        </h1>
        <!-- ▼ drawer -->
        <div id="js-headerBtn" class="l-header__hamburgerBtn" onclick="drawerToggle(event, 'drawerMenu')">
          <div id="drawerBtn" class="l-header__hamburgerBox">
            <span class="l-header__bar"></span>
            <span class="l-header__bar"></span>
            <span class="l-header__bar"></span>
          </div>
        </div>
        <!-- ▲ drawer -->
      </div>

      <!-- ▼ drawerContents -->
      <?php get_template_part('template-parts/drawerContents'); ?>
      <!-- ▲ drawerContetns -->

    </div>
    <!-- ▲ header -->

    <!-- ▼ main -->
    <main>
      <!-- ▼ p-topFv SP -->
      <section class="p-topFv">
        <!-- ▼ Slide p-topFv Start -->
        <div class="p-topFv__bg">
          <div class="swiper js-swiperFv p-topFv__swiper">
            <div class="swiper-wrapper p-topFv__wrapper">
              <div class="swiper-slide p-topFv__slide">
                <img class="p-topFv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv.webp" alt="" width="2880" height="1774">
              </div>
              <div class="swiper-slide p-topFv__slide">
                <img class="p-topFv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2.webp" alt="" width="2880" height="1774">
              </div>
              <div class="swiper-slide p-topFv__slide">
                <img class="p-topFv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/fv3.webp" alt="" width="2880" height="1774">
              </div>
            </div>
          </div>
        </div>
        <!-- ▲ Slide l-fvBg END -->

        <div class="p-topFv__textSwiperBox">
          <!-- ▼ Slide Loop Text Start -->
          <div class="c-loopText__textSwiperContainer">
            <div class="swiper js-swiperText c-loopText__textSwiper">
              <ul class="swiper-wrapper c-loopText__textWrapper">
                <?php for ($i = 0; $i < 10; $i++): ?>
                  <li class="swiper-slide c-loopText__textSlide">議員出張寿司</li>
                  <li class="swiper-slide c-loopText__textSlide--en">SUSHI WIZ</li>
                  <li class="swiper-slide c-loopText__textSlide">東京湾岸出張寿司</li>
                  <li class="swiper-slide c-loopText__textSlide--en">SUSHI WIZ</li>
                <?php endfor; ?>
              </ul>
            </div>
          </div>
          <!-- ▲ Slide Loop Text End -->
        </div>

        <div class="p-topFv__textContents">
          <div class="p-topFv__inner">
            <div class="p-topFv__textBox">
              <h2 class="p-topFv__mainText">
                今日、
                <br>
                あなた
                <span class="p-topFv__mainText--mlSmallLittleFz">が</span><span
                  class="p-topFv__mainText--smallFz">いる</span>場所<span class="p-topFv__mainText--littleSmallFz">が</span>
                <br>
                <span class="p-topFv__mainText--bigFz">鮨屋</span><span
                  class="p-topFv__mainText--littleSmallFz">に</span>なる。
              </h2>
            </div>
          </div>
        </div>
        <div class="p-topFv__imagesSwiperContainer">
          <!-- ▼ Slide Loop Images Start -->
          <div class="c-loopImages__imagesSwiperContainer">
            <div class="swiper js-swiperImages c-loopImages__imagesSwiper">
              <ul class="swiper-wrapper c-loopImages__imagesWrapper">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                  <li class="swiper-slide c-loopImages__imagesSlide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-item<?php echo $i; ?>.jpg" alt="item-<?php echo $i; ?>" class="c-loopImages__ImagesSlideItem" width="404" height="404">
                  </li>
                <?php endfor; ?>
              </ul>
            </div>
          </div>
          <!-- ▲ Slide Loop Images Start -->
        </div>
      </section>
      <!-- ▲ p-topFv SP -->