<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUSHI WIZ</title>
  <!-- GoogleFonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Sawarabi+Gothic&display=swap"
    rel="stylesheet">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <link rel="stylesheet" href="./assets/css/plan.css">
</head>

<body class="plan">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--plan u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">PLAN</p>
    </div>
  </div>
  <!-- ▲ PC FV End-->

  <!-- ▼ contents Start -->
  <div class="l-bigWrapper">
    <!-- ▼ header -->
    <div class="l-header">
      <div class="l-header__inner">
        <h1 class="l-header__logo u-displayNone--PO">
          <a href="./index.html" class="l-header__logoLink">
            <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69"
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

      <!-- ▼ drawer contents -->
      <div id="drawerMenu" class="c-drawerMenu">
        <div class="c-drawerMenu__wrap">
          <a href="./index.html" class="c-drawerMenu__logoLink u-displayNone--PU">
            <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="c-drawerMenu__logoImg" width="69"
              height="64">
          </a>
          <div class="c-drawerMenu__inner">
            <div class="c-drawerMenu__headingBox">
              <p class="c-drawerMenu__heading">MENU</p>
            </div>
            <nav class="c-drawerMenu__nav">
              <ul class="c-drawerMenu__menu">
                <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
                  <a href="./concept.html" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                      class="c-drawerMenu__subText">コンセプト</span>CONCEPT</a>
                </li>
                <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
                  <a href="./plan.html" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                      class="c-drawerMenu__subText">プラン</span>PLAN</a>
                </li>
                <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
                  <a href="./profile.html" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                      class="c-drawerMenu__subText">シェフについて</span>PROFILE</a>
                </li>
                <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
                  <a href="./faq.html" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                      class="c-drawerMenu__subText">よくある質問</span>FAQ</a>
                </li>
                <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
                  <a href="./article.html" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                      class="c-drawerMenu__subText">トピックス</span>ARTICLE</a>
                </li>
                <li class="c-drawerMenu__menuItem u-displayNone--PO">
                  <img src="./assets/images/common/drawer-item.jpg" alt="出張 寿司" class="c-drawerMenu__img" width="390"
                    height="166">
                </li>
              </ul>
            </nav>
            <div class="c-drawerMenu__bottomContents">
              <div class="c-drawerMenu__btnWrap">
                <div class="c-drawerMenu__btnContact">
                  <a href="./contact.html" class="c-drawerMenu__btnLink">
                    <span class="c-drawerMenu__btnSubText">お問い合わせ</span>
                    <span class="c-drawerMenu__btnMainText">CONTACT</span>
                  </a>
                </div>
                <div class="c-drawerMenu__btnResevation">
                  <a href="./reservation.html" class="c-drawerMenu__btnLink--bgImage">
                    <span class="c-drawerMenu__btnSubText">予約</span>
                    <span class="c-drawerMenu__btnMainText">RESERVATION</span>
                  </a>
                </div>
              </div>
              <ul class="c-drawerMenu__snsBox">
                <li class="c-drawerMenu__snsItem">
                  <a href="" class="c-drawerMenu__snsLink">
                    <img class="c-drawerMenu__snsImg" src="./assets/images/common/sns-line.png" alt="LINE" width="118"
                      height="118">
                  </a>
                </li>
                <li class="c-drawerMenu__snsItem">
                  <a href="" class="c-drawerMenu__snsLink">
                    <img class="c-drawerMenu__snsImg" src="./assets/images/common/sns-Instagram.svg" alt="Instagram"
                      width="20" height="19">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- ▲ drawer contents -->
    </div>
    <!-- ▲ header -->

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
            <a href="#plan1" class="p-planCourse__link">
              <p class="p-planCourse__price">
                3,000<span class="p-planCourse__price--fzSmall">円</span>
              </p>
              <p class="p-planCourse__plan">
                <span class="p-planCourse__plan--en">1-8</span>名様プラン
              </p>
            </a>
          </li>
          <li class="p-planCourse__item">
            <a href="#plan2" class="p-planCourse__link">
              <p class="p-planCourse__price">
                5,000<span class="p-planCourse__price--fzSmall">円</span>
              </p>
              <p class="p-planCourse__plan">
                <span class="p-planCourse__plan--en">1-8</span>名様プラン
              </p>
            </a>
          </li>
          <li class="p-planCourse__item">
            <a href="#plan3" class="p-planCourse__link">
              <p class="p-planCourse__price">
                7,000<span class="p-planCourse__price--fzSmall">円</span>
              </p>
              <p class="p-planCourse__plan">
                <span class="p-planCourse__plan--en">1-8</span>名様プラン
              </p>
            </a>
          </li>
          <li class="p-planCourse__item">
            <a href="#plan4" class="p-planCourse__link">
              <p class="p-planCourse__price">
                10,000<span class="p-planCourse__price--fzSmall">円</span>
              </p>
              <p class="p-planCourse__plan">
                <span class="p-planCourse__plan--en">1-8</span>名様プラン
              </p>
            </a>
          </li>
          <li class="p-planCourse__item">
            <a href="#plan5" class="p-planCourse__link">
              <p class="p-planCourse__price">
                20,000<span class="p-planCourse__price--fzSmall">円</span>
              </p>
              <p class="p-planCourse__plan">厳選日本酒とペアリング</p>
            </a>
          </li>
          <li class="p-planCourse__item">
            <a href="#plan6" class="p-planCourse__link--party">
              <p class="p-planCourse__price">パーティープラン</p>
              <p class="p-planCourse__plan">
                <span class="p-planCourse__plan--en">8</span>名様～
              </p>
            </a>
          </li>
        </ul>
      </section>
      <!-- ▲ p-planCourse -->

      <!-- ▼ p-planPersonal -->
      <section class="p-planPersonal">
        <div class="p-planPersonal__inner">
          <h2 class="p-planPersonal__title">個人宅プラン</h2>
          <div id="plan1" class="p-planPersonal__planContainer">
            <div class="p-planPersonal__headingBox">
              <h3 class="p-planPersonal__heading">
                3,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
              </h3>
              <span class="p-planPersonal__sub">1名様あたり</span>
            </div>
            <ul class="p-planPersonal__textList">
              <li class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#modal1">
                  豪華バラちらしコース
                </button>
              </li>
              <li class="p-planPersonal__textItem">
                <button class="p-planPersonal__textButton" data-modal-target="#modal2">
                  おまかせ10貫（5種類）+ 巻き寿司コース
                </button>
              </li>
            </ul>
            <!-- ▼ Slide Stat -->
            <div class="p-planPersonal__swiperContainer">
              <div id="planPersonal1" class="swiper p-planPersonal__swiper">
                <ul class="swiper-wrapper p-planPersonal__wrapper">
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item1.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item1.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                </ul>
                <div class="p-planPersonal__paginationBox">
                  <div class="swiper-pagination p-planPersonal__pagination"></div>
                </div>
              </div>
            </div>
            <!-- ▲ Slide End -->

            <!-- ▼ Modal Stat -->
            <div id="modal1" class="c-modal js-modal" data-modal-target="#modal1">
              <div class="c-modal__flex">
                <!-- ▼ Modal Contents Stat -->
                <div class="c-modal__card">
                  <button class="c-modal__close js-close">
                    <img src="./assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                  </button>
                  <div class="c-modal__container">
                    <p class="c-modal__tag">3,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                    <div class="c-modal__titleBox">
                      <p class="c-modal__title">豪華バラちらしコース</p>
                    </div>
                    <div class="c-modal__imgBox">
                      <img src="./assets/images/plan-personal-item1.jpg" alt="" class="c-modal__img" width="660"
                        height="440">
                    </div>
                    <div class="c-modal__textBox">
                      <p class="c-modal__text">本鮪の大トロやサーモン、ホタテ、光物や甘い玉子焼きを散りばめた豪華バラちらしコース</p>
                    </div>
                  </div>
                </div>
                <!-- ▲ Modal Contents End -->
              </div>
            </div>
            <!-- ▲ Modal End -->

            <!-- ▼ Modal Stat -->
            <div id="modal2" class="c-modal js-modal" data-modal-target="#modal2">
              <div class="c-modal__flex">
                <!-- ▼ Modal Contents Stat -->
                <div class="c-modal__card">
                  <button class="c-modal__close js-close">
                    <img src="./assets/images/common/icon-close.svg" alt="" class="c-modal__closeIcon" width="63" height="63">
                  </button>
                  <div class="c-modal__container">
                    <p class="c-modal__tag">3,000<span class="c-modal__tag--fzSmall">円プラン</span></p>
                    <div class="c-modal__titleBox">
                      <p class="c-modal__title">おまかせ10貫（5種類）＋<br>
                        巻き寿司コース</p>
                    </div>
                    <div class="c-modal__imgBox">
                      <img src="./assets/images/plan-personal-item1.jpg" alt="" class="c-modal__img" width="660"
                        height="440">
                    </div>
                    <div class="c-modal__textBox">
                      <p class="c-modal__text">その日の特選のネタ（マグロやサーモン、光物など）を入れたコスパがいいコース</p>
                    </div>
                  </div>
                </div>
                <!-- ▲ Modal Contents End -->
              </div>
            </div>
            <!-- ▲ Modal End -->

          </div>
          <div id="plan2" class="p-planPersonal__planContainer">
            <div class="p-planPersonal__headingBox">
              <h3 class="p-planPersonal__heading">
                5,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
              </h3>
              <span class="p-planPersonal__sub">1名様あたり</span>
            </div>
            <ul class="p-planPersonal__textList">
              <li class="p-planPersonal__textItem">サーモン尽くしコース</li>
              <li class="p-planPersonal__textItem">ヒカリモノ尽くしコース</li>
              <li class="p-planPersonal__textItem">おまかせ梅コース</li>
              <li class="p-planPersonal__textItem">親子コース</li>
            </ul>
            <!-- ▼ Slide Stat -->
            <div class="p-planPersonal__swiperContainer">
              <div id="planPersonal2" class="swiper p-planPersonal__swiper">
                <ul class="swiper-wrapper p-planPersonal__wrapper">
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item2.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item2.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item2.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item2.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
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
                7,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
              </h3>
              <span class="p-planPersonal__sub">1名様あたり</span>
            </div>
            <ul class="p-planPersonal__textList">
              <li class="p-planPersonal__textItem">マグロ尽くしコース</li>
              <li class="p-planPersonal__textItem">おまかせ竹コース</li>
              <li class="p-planPersonal__textItem">親子コース上</li>
            </ul>
            <!-- ▼ Slide Stat -->
            <div class="p-planPersonal__swiperContainer">
              <div id="planPersonal3" class="swiper p-planPersonal__swiper">
                <ul class="swiper-wrapper p-planPersonal__wrapper">
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item3.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item3.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item3.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
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
                10,000<span class="p-planPersonal__heading--fzSmall">円プラン</span>
              </h3>
              <span class="p-planPersonal__sub">1名様あたり</span>
            </div>
            <ul class="p-planPersonal__textList">
              <li class="p-planPersonal__textItem">おまかせ松コース</li>
              <li class="p-planPersonal__textItem">最強インスタ映えコース</li>
              <li class="p-planPersonal__textItem">将太の寿司コース</li>
              <li class="p-planPersonal__textItem">
                当日獲れたて新鮮寿司コース
              </li>
              <li class="p-planPersonal__textItem">親子コース特上</li>
              <li class="p-planPersonal__textItem">
                グローバル国際寿司コース
              </li>
            </ul>
            <!-- ▼ Slide Stat -->
            <div class="p-planPersonal__swiperContainer">
              <div id="planPersonal4" class="swiper p-planPersonal__swiper">
                <ul class="swiper-wrapper p-planPersonal__wrapper">
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planPersonal__slide">
                    <img src="./assets/images/plan-personal-item4.jpg" alt="出張寿司" class="p-planPersonal__imgBox"
                      width="660" height="440">
                  </li>
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
      <!-- ▲ p-planPersonal -->

      <!-- ▼ p-planAlcohol -->
      <section class="p-planAlcohol">
        <div class="p-planAlcohol__inner">
          <h2 class="p-planAlcohol__title">日本酒</h2>
          <p class="p-planAlcohol__read">
            厳選日本酒とお好きな10,000円コースとペアリングプラン
          </p>
          <div id="plan5" class="p-planAlcohol__planContainer">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading">
                20,000<span class="p-planAlcohol__heading--fzSmall">円</span>
              </h3>
              <span class="p-planAlcohol__sub">1名様あたり</span>
            </div>
            <p class="p-planAlcohol__planRead">
              SAKE
              DIPLOMAの資格を持つスタッフが厳選した日本酒をお持ちします。寿司のコースは下記からお選びいただけます。
            </p>
            <ul class="p-planAlcohol__textList">
              <li class="p-planAlcohol__textItem">おまかせ松コース</li>
              <li class="p-planAlcohol__textItem">最強インスタ映えコース</li>
              <li class="p-planAlcohol__textItem">将太の寿司コース</li>
              <li class="p-planAlcohol__textItem">
                当日獲れたて新鮮寿司コース
              </li>
              <li class="p-planAlcohol__textItem">親子コース特上</li>
              <li class="p-planAlcohol__textItem">
                グローバル国際寿司コース
              </li>
            </ul>
            <!-- ▼ Slide Stat -->
            <div class="p-planAlcohol__swiperContainer">
              <div id="planAlcohol1" class="swiper p-planAlcohol__swiper">
                <ul class="swiper-wrapper p-planAlcohol__wrapper">
                  <li class="swiper-slide p-planAlcohol__slide">
                    <img src="./assets/images/plan-alcohol-item1.jpg" alt="出張寿司" class="p-planAlcohol__imgBox"
                      width="660" height="440">
                  </li>
                  <li class="swiper-slide p-planAlcohol__slide">
                    <img src="./assets/images/plan-alcohol-item1.jpg" alt="出張寿司" class="p-planAlcohol__imgBox"
                      width="660" height="440">
                  </li>
                </ul>
                <div class="p-planAlcohol__paginationBox">
                  <div class="swiper-pagination p-planAlcohol__pagination"></div>
                </div>
              </div>
            </div>
            <!-- ▲ Slide End -->
          </div>
          <div id="plan6" class="p-planAlcohol__planContainer">
            <div class="p-planAlcohol__headingBox">
              <h3 class="p-planAlcohol__heading--fzJp">パーティープラン</h3>
              <span class="p-planAlcohol__sub--mtSmall">8名様～</span>
            </div>
            <p class="p-planAlcohol__planRead--mtSmall">
              お一人様3000円〜にてオリジナルプランのご相談をさせて頂きます。
              <br>
              何品にするか、ご希望のネタなどを相談の上、料金を決定いたします。
              <br>
              なお、個人宅プランと同じメニューもご提供は可能です。
            </p>
            <div class="p-planAlcohol__planImgBox">
              <img src="./assets/images/plan-alcohol-item2.jpg" alt="パーティープラン" class="p-planAlcohol__planImg"
                width="660" height="440">
            </div>
          </div>
        </div>
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

      <!-- ▼ CTA -->
      <section class="c-cta">
        <div class="c-cta__inner">
          <div class="c-cta__textBox">
            <h2 class="c-cta__title">RESERVATION</h2>
            <p class="c-cta__read">
              無料でお見積りやご相談を承ります。
              <br>
              お気軽にご連絡ください。
            </p>
          </div>
          <div class="c-cta__btnWarap">
            <div class="c-cta__btnContact">
              <a href="./contact.html" class="c-cta__link">
                <span class="c-cta__subText">お問い合わせ</span>
                <span class="c-cta__mainText">CONTACT</span>
              </a>
            </div>
            <div class="c-cta__btnResevation">
              <a href="#" class="c-cta__link--bgImage">
                <span class="c-cta__subText">予約</span>
                <span class="c-cta__mainText">RESERVATION</span>
              </a>
            </div>
          </div>
          <div class="c-cta__snsBox">
            <a href="./reservation.html" class="c-cta__line">
              <img src="./assets/images/common/sns-line.png" alt="LINE" class="c-cta__lineImg" width="118"
                height="118">
            </a>
            <p class="c-cta__snsText">
              <span class="c-cta__snsText--en">LINE</span>でのお問合せも承っております
            </p>
          </div>
        </div>
      </section>
      <!-- ▲ CTA -->
    </main>
    <!-- ▲ main -->

    <!-- ▼ footer -->
    <footer class="l-footer">
      <div class="l-footer__inner">
        <ul class="l-footer__list">
          <li class="l-footer__item">
            <a href="./index.html" class="l-footer__link">TOP</a>
          </li>
          <li class="l-footer__item">
            <a href="./concept.html" class="l-footer__link">CONCEPT</a>
          </li>
          <li class="l-footer__item">
            <a href="./profile.html" class="l-footer__link">PROFILE</a>
          </li>
          <li class="l-footer__item">
            <a href="./plan.html" class="l-footer__link">PLAN</a>
          </li>
          <li class="l-footer__item">
            <a href="./article.html" class="l-footer__link">ARTICLE</a>
          </li>
          <li class="l-footer__item">
            <a href="./contact.html" class="l-footer__link">CONTACT</a>
          </li>
          <li class="l-footer__item">
            <a href="./reservation.html" class="l-footer__link">RESERVATION</a>
          </li>
        </ul>
        <div class="l-footer__bottom">
          <p class="l-footer__text">プライバシーポリシー</p>
          <p class="l-footer__copyRightBox">
            <small class="l-footer__copyRight">© 2024 SUSHI WIZ</small>
          </p>
        </div>
      </div>
    </footer>
    <!-- ▲ footer -->
  </div>
  <!-- ▲ contents End -->

  <script src="./assets/js/modal.js"></script>
  <script src="./assets/js/scroll.js"></script>
  <script src="./assets/js/smooth-scroll.js"></script>
  <script src="./assets/js/drawer.js"></script>
  <script src="./assets/js/loopSlide.js"></script>
  <script src="./assets/js/swiper.js"></script>
  <script src="./assets/js/accordion.js"></script>
</body>

</html>