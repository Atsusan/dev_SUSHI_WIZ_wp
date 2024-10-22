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
  <link rel="stylesheet" href="./assets/css/profile.css">
</head>

<body class="profile">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--profile u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">PROFILE</p>
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
      <!-- ▼ p-profileFv SP -->
      <section class="p-profileFv">
        <div class="p-profileFv__textContents">
          <div class="p-profileFv__inner">
            <div class="p-profileFv__textBox">
              <h2 class="p-profileFv__enTitle">PROFILE</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- ▲ p-profileFv SP -->

      <!-- ▼ p-profileContents -->
      <section class="p-profileContents">
        <div class="p-profileContents__inner">
          <div class="p-profileContents__head">
            <div class="p-profileContents__headImgBox">
              <img src="./assets/images/profile-contents-item1.jpg" alt="" class="p-profileContents__headImg"
                width="660" height="440">
            </div>
            <div class="p-profileContents__headTextBox">
              <div class="p-profileContents__headTitleBox">
                <h2 class="p-profileContents__headTitle">
                  鮨も政治もまつりごと
                </h2>
                <p class="p-profileContents__headName">
                  高橋<span class="p-profileContents__headName--mlLarge">元気</span>
                  <span class="p-profileContents__headNameEn">TAKAHASHI<span
                      class="p-profileContents__headNameEn--mlLarge">GENKI</span></span>
                </p>
              </div>
              <p class="p-profileContents__headText">
                お鮨、日本酒が大好きで、様々なお店を巡り自分で作ってみたりと自炊が趣味。
                <br>
                築地や銀座を抱える中央区で働く身として、<span
                  class="p-profileContents__headText--bold">鮨文化を更に街の強みとして世界にアピールしたい、大好きなお鮨で人と人を繋げたいという想いから、2023年に東京すしアカデミーへ入学。鮨職人として必要な技術や心構えを体系的に学ぶ。</span>
                <br>
                在学中から本業の傍ら都内の寿司名店に籍を置き修行すると共に、友人の繋がりで個人宅や法人の記念パーティー等で出張寿司の経験を積む。
              </p>
            </div>
          </div>
        </div>
        <div class="p-profileContents__imgBox">
          <img src="./assets/images/profile-contents-item2.jpg" alt="出張寿司で集う人々" class="p-profileContents__footerImg"
            width="780" height="366">
        </div>
        <div class="p-profileContents__inner">
          <div class="p-profileContents__footer">
            <p class="p-profileContents__footerText">
              元来の明るい性格を武器にしつつ、幼少期から愛読していた漫画「将太の寿司」に登場した寿司ネタを再現するなど、<span
                class="p-profileContents__footerText--bold">既成概念に捉われない、独創的かつエンターテインメント性の高い寿司の提供を目標とする。</span>
            </p>
            <p class="p-profileContents__footerText">
              そして、鮨だけでなく政治や政治家をもっと身近に感じて貰いたいという想いから、多くの人とお鮨を通じて知り合うため東京湾岸出張寿司・議員出張寿司「SUSHI
              WIZARDS」を開業。
              <br>
              <span class="p-profileContents__footerText--bold">住民と鮨を食べながら街の課題も解決する、前代未聞の出張寿司職人/政治家として活動中。</span>
              <br>
              鮨の話題も、政治に関するご相談も何でも承ります。
            </p>
          </div>
        </div>
      </section>
      <!-- ▲ p-profileContents -->

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
              <a href="./reservation.html" class="c-cta__link--bgImage">
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