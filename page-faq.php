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
  <link rel="stylesheet" href="./assets/css/faq.css">
</head>

<body class="contact">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--faq u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">FAQ</p>
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
      <!-- ▼ p-faqFv SP -->
      <section class="p-faqFv">
        <div class="p-faqFv__textContents">
          <div class="p-faqFv__inner">
            <div class="p-faqFv__textBox">
              <h2 class="p-faqFv__enTitle">FAQ</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- ▲ p-faqFv SP -->

      <!-- ▼ p-faqAccordion -->
      <section class="p-faqAccordion">
        <div class="p-faqAccordion__inner">
          <h2 class="p-faqAccordion__heading u-displayNone--PU">FAQ</h2>
          <div class="p-faqAccordion__accordionContainer">
            <!-- ▼ Accordion Start -->
            <dl class="c-accordion">
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    個人宅以外ではどこで開催が出来ますか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <p class="c-accordion__bodyText">
                      基本的にどこでも開催出来ます。マンションや公共施設のパーティールームのほか、屋外スペース、貸し切りバーや企業のオフィス（会議室）などでも開催実績があります。キッチンや水場があるのがベストですが、なくても実施可能です。先ずはお気軽にご相談ください。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    当日はどのような準備が必要ですか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      出張当日は、60分前を目安に職人が事前に準備をさせて頂きます。その際に調理を提供するスペースとして、キッチンスペースやテーブル等をお貸しください。その環境に応じて柔軟に対応致しますので、事前にご相談をお願い致します。お皿や箸等の食器を含めて全て職人が持参しますので、その他の準備は特にございません。
                    </div>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    開催時間は何時間になりますか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      原則2時間（人数によっては～3時間）でお食事の提供を完了し、職人は帰宅致します。お客様はその後も楽しんで頂いて構いません。
                    </div>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    飲み物は用意して貰えますか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      別料金となりますが、厳選日本酒のほか、事前にお客様のご要望をお伺いし持参も可能です。また、お客様側でご準備頂いても構いません。
                    </div>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    対応エリアは中央区のみですか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      ネタの鮮度の関係から東京都内および都内近郊を対象としています。また、交通費がかからないエリア（中央区内等）については出張交通費を割引させて頂きます。上記以外の場所をご希望であっても当日のネタを市場から直接宅配する等の方法により、ご相談頂ければ対応をさせて頂きます。
                    </div>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">
                    お支払方法は何がありますか？
                  </p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      【カード払い】【現金払い】のいずれかをお選び頂けます。法人様につきましては請求書払
                      いにも対応させて頂きます。）
                    </div>
                  </div>
                </dd>
              </div>
              <div class="c-accordion__item">
                <dt class="c-accordion__titleBox" data-accordion="header">
                  <p class="c-accordion__title">キャンセルは出来ますか？</p>
                  <span class="c-accordion__icon" data-accordion="icon"></span>
                </dt>
                <dd class="c-accordion__content">
                  <div class="c-accordion__body">
                    <div class="c-accordion__bodyText">
                      ご予約日の4日前までは無料でキャンセル可能ですが、ご予約日3日前を過ぎてのキャンセルには、下記のキャンセル料をお支払い頂きます。
                      <br>
                      <br>
                      3日前・・・・代金の30％
                      <br>
                      前日・・・・代金の50％
                      <br>
                      当日・・・・代金全額
                    </div>
                  </div>
                </dd>
              </div>
            </dl>
            <!-- ▲ Accordion End -->
          </div>
        </div>
        <div class="p-faqAccordion__imgBox">
          <img src="./assets/images/top-faq-item.jpg" alt="お寿司" class="p-faqAccordion__img" width="780" height="434">
        </div>
      </section>
      <!-- ▲ p-faqAccordion -->

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
  <script src="./assets/js/smooth-scroll.js"></script>
  <script src="./assets/js/drawer.js"></script>
  <script src="./assets/js/loopSlide.js"></script>
  <script src="./assets/js/swiper.js"></script>
  <script src="./assets/js/accordion.js"></script>
</body>

</html>