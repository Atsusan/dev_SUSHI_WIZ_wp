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
  <link rel="stylesheet" href="./assets/css/concept.css">
</head>

<body class="concept">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--concept u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">CONCEPT</p>
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
      <!-- ▼ p-conceptFv SP -->
      <section class="p-conceptFv">
        <div class="p-conceptFv__textContents">
          <div class="p-conceptFv__inner">
            <div class="p-conceptFv__textBox">
              <h2 class="p-conceptFv__enTitle">CONCEPT</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- ▲ p-conceptFv SP -->

      <!-- ▼ p-concept1 -->
      <section class="p-concept1">
        <p class="p-concept1__bigText">
          CONCEPT<span class="p-concept1__bigNumber">1</span>
        </p>
        <div class="p-concept1__imgBox">
          <img src="./assets/images/concept1-item.jpg" alt="鮨で人を笑顔にしたい 鮨で人を繋げたい" class="p-concept1__img" width="620"
            height="468">
        </div>
        <div class="p-concept1__inner">
          <div class="p-concept1__textBox">
            <h2 class="p-concept1__title">
              鮨で人を笑顔にしたい
              <br>
              鮨で人を繋げたい
            </h2>
            <p class="p-concept1__text">
              日本人はお鮨が大好きです。
              <br>
              お祝い事やお祭りの席で必ずお鮨は楽しまれます。
            </p>
            <p class="p-concept1__text">
              今の時代だからこそ、誰もがご自宅で気軽に美味しいお鮨を食べて欲しい。
              <br>
              鮨は日本人にとって宝であり、魔法のようなもの。
              <br>
              <span class="p-concept1__text--bold">
                鮨は人を笑顔にし、人と人を繋げます。
              </span>
            </p>
            <p class="p-concept1__text">
              SUSHI WIZ
              という名前には、どこへでも寄り添うという意味（WITH）と、寿司職人は魔法のようなお鮨と時間をお届けする魔法使い（WIZARDS）であるという意味を込めています。
              <br>
              大切な人と魔法のような時間を過ごして頂くため、皆様の心を幸せで満たすため、
              <br>
              今日もあなたのご自宅で飛びっきりのお鮨を楽しく握ります。
            </p>
          </div>
        </div>
      </section>
      <!-- ▲ p-concept1 -->

      <!-- ▼ p-concept2 -->
      <section class="p-concept2">
        <p class="p-concept2__bigText">
          CONCEPT<span class="p-concept2__bigNumber">2</span>
        </p>
        <div class="p-concept2__imgBox">
          <img src="./assets/images/concept2-item.jpg" alt="新鮮で美味しいお鮨を お手軽な価格で" class="p-concept2__img" width="546"
            height="508">
        </div>
        <div class="p-concept2__inner">
          <div class="p-concept2__textBox">
            <h2 class="p-concept2__title">
              新鮮で美味しいお鮨を
              <br>
              お手軽な価格で
            </h2>
            <p class="p-concept2__text">
              新鮮で美味しいお鮨を出来る限りリーズナブルなお値段で提供するため、ご予約の当日に築地や豊洲市場で新鮮な魚を調達し、職人が仕込みます。
              <br>
              鮨の生命線である酢飯にもこだわり、赤酢、米酢、黒酢などを独自にブレンド、ネタに合わせた最適の味付けを追求しています。
            </p>
            <p class="p-concept2__text">
              利益よりも味を追及する、をモットーに必ずひと手間を加えて、日々究極の美味しさを求め、進化する出張寿司を目指しています。
            </p>
          </div>
        </div>
      </section>
      <!-- ▲ p-concept2 -->

      <!-- ▼ p-concept3 -->
      <section class="p-concept3">
        <p class="p-concept3__bigText">
          CONCEPT<span class="p-concept3__bigNumber">3</span>
        </p>
        <div class="p-concept3__imgBox">
          <img src="./assets/images/concept3-item.jpg" alt="いつでも、どこでも、どなたでも" class="p-concept3__img" width="620"
            height="508">
        </div>
        <div class="p-concept3__inner">
          <div class="p-concept3__textBox">
            <h2 class="p-concept3__title">
              いつでも、どこでも、
              <br>
              どなたでも
            </h2>
            <p class="p-concept3__text">
              小さなお子様を子育て中で外食が難しい。足腰が不安で外出が出来ない。会社の大切な仲間達とお祝いパーティーを開きたいけど、人数が多くてお店に入れない。お寿司は食べたいが高級寿司はハードルが高い。それでも今日はお寿司が食べたい、というお客様の声にお応えします。
            </p>
            <p class="p-concept3__text">
              お子様が大好きなツナや玉子焼き、いくらなどに特化した親子プランや、生ものが苦手な場合は火を通したお寿司メニュー、外国の方向けプラン、大人数パーティー向けプランなど、お一人おひとりのニーズに合わせながら、<span
                class="p-concept3__text--bold">リーズナブルで美味しいお鮨をいつでも、どこでも、どなたでも楽しめるように。</span>
            </p>
            <p class="p-concept3__text">
              <span class="p-concept3__text--bold">こんな出張寿司は全国どこにもありません。</span>
            </p>
          </div>
        </div>
      </section>
      <!-- ▲ p-concept3 -->

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