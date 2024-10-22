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
  <link rel="stylesheet" href="./assets/css/contact.css">
</head>

<body class="contact">
  <!-- ▼ PC FV Start -->
  <div class="l-fv--contact u-displayNone--PU">
    <h1 class="l-header__logoPc">
      <a href="./index.html" class="l-header__logoLink">
        <img src="./assets/images/common/logo.svg" alt="SUSHI WIZ" class="l-header__logoImg" width="69" height="64">
      </a>
    </h1>
    <div class="l-fv__textBox">
      <p class="l-fv__enTitle">CONTACT</p>
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
      <!-- ▼ p-contactFv SP -->
      <section class="p-contactFv">
        <div class="p-contactFv__textContents">
          <div class="p-contactFv__inner">
            <div class="p-contactFv__textBox">
              <h2 class="p-contactFv__enTitle">CONTACT</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- ▲ p-contactFv SP -->

      <!-- ▼ p-contactForm -->
      <div class="p-contactForm">
        <div class="p-contactForm__head">
          <div class="p-contactForm__inner">
            <p class="p-contactForm__read">
              当サイトをご覧いただきありがとうございます。<br>
              下記フォームよりお気軽にお問い合わせください。
            </p>
          </div>
        </div>
        <div class="p-contactForm__container">
          <div class="p-contactForm__inner">
            <form action="post" class="p-contactForm__form">
              <dl class="p-contactForm__list">
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">お名前</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <input class="p-contactForm__input" type="text" name="name" required placeholder="山田　太郎">
                  </dd>
                </div>
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">メールアドレス</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <input class="p-contactForm__input" type="email" name="email" required placeholder="abcd@aa.com">
                  </dd>
                </div>
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">電話番号</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <input class="p-contactForm__input" type="tel" name="telephone" required
                      placeholder="000-1234-5678">
                  </dd>
                </div>
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">住所</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <input class="p-contactForm__input" type="text" name="address" required placeholder="東京都中央区00-0">
                  </dd>
                </div>
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">ご要件</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <div class="p-contactForm__radioBox">
                      <label class="p-contactForm__radioLabel"><input class="p-contactForm__radioInput" type="radio"
                          name="radio" required >出張寿司について</label>
                      <label class="p-contactForm__radioLabel"><input class="p-contactForm__radioInput" type="radio"
                          name="radio">その他</label>
                    </div>
                  </dd>
                </div>
                <div class="p-contactForm__item">
                  <dt class="p-contactForm__dt">
                    <span class="p-contactForm__mast">必須</span>
                    <p class="p-contactForm__name">お問い合わせ内容</p>
                  </dt>
                  <dd class="p-contactForm__dd">
                    <textarea class="p-contactForm__textarea" name="message" required
                      placeholder="お問い合わせ内容をご入力ください。"></textarea>
                  </dd>
                </div>
              </dl>
              <div class="p-contactForm__submitBox">
                <input class="p-contactForm__submit" type="submit" value="入力内容をする">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ▲ p-contactForm -->
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