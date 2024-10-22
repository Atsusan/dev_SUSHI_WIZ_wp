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
  <link rel="stylesheet" href="./assets/css/article.css">
</head>

<body class="article">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--article u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">ARTICLE</p>
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
          <ul class="p-articleContents__filterList">
            <li class="p-articleContents__filterItem">
              <a href="#" class="p-articleContents__filterLink is-current">ALL</a>
            </li>
            <li class="p-articleContents__filterItem">
              <a href="#" class="p-articleContents__filterLink">NEWS</a>
            </li>
            <li class="p-articleContents__filterItem">
              <a href="#" class="p-articleContents__filterLink">CASE</a>
            </li>
            <li class="p-articleContents__filterItem">
              <a href="#" class="p-articleContents__filterLink">EVENT</a>
            </li>
          </ul>
        </div>
        <ul class="p-articleContents__list">
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item1.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">NEWS</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.11.10</span>年末年始のご予約について
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item2.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">NEWS</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.11.05</span>新コースが登場しました！
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item3.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">CASE</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.10.30</span>企業様の懇親会に出張してきました。
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item4.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">EVENT</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">東京グルメに出店いたします。</span>
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item5.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">NEWS</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.10.01</span>10月から新種の日本酒の取り扱いをはじめました。
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item6.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">CASE</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.9.28</span>お子様のイベントで握りました！
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item7.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">NEWS</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.9.22</span>新ネタ入荷しました！
                  </h2>
                </div>
              </div>
            </a>
          </li>
          <li class="p-articleContents__item">
            <a href="./article-single.html" class="p-articleContents__link">
              <div class="p-articleContents__imgBox">
                <img src="./assets/images/article-item8.jpg" alt="" class="p-articleContents__img" width="600"
                  height="400">
              </div>
              <div class="p-articleContents__container">
                <div class="p-articleContents__tagBox">
                  <span class="p-articleContents__tag">NEWS</span>
                </div>
                <div class="p-articleContents__textBox">
                  <h2 class="p-articleContents__title">
                    <span class="p-articleContents__date">2024.9.20</span>雑誌中央区カレンダーのインタビューを受けました。10月号に掲載されます。
                  </h2>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <div class="p-articleContents__paginationBox">
          <div class="c-pagination wp-pagenavi" role="navigation">
            <a class="c-pagination__prev previouspostslink" rel="prev" aria-label="Prev" href="/">Prev</a>
            <span aria-current="page" class="c-pagination__current current">1</span>
            <a class="c-pagination__page page smaller" title="ページ 2" href="/">2</a>
            <a class="c-pagination__page page larger" title="ページ 3" href="/3/">3</a>
            <span class="c-pagination__extend extend">…</span>
            <a class="c-pagination__page page larger" title="ページ 10" href="/10/">10</a>
            <a class="c-pagination__next nextpostslink" rel="next" aria-label="Next" href="/2/">Next</a>
          </div>
        </div>
      </div>
      <!-- ▲ p-articleContents -->

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
            <a href="#" class="c-cta__line">
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

  <script src="./assets/js/scroll.js"></script>
  <script src="./assets/js/drawer.js"></script>
  <script src="./assets/js/loopSlide.js"></script>
  <script src="./assets/js/swiper.js"></script>
  <script src="./assets/js/accordion.js"></script>
</body>

</html>