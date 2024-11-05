<?php
/*
Template Name: Profile Page
*/
?>

<?php get_header();?>

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
              <img src="<?php echo get_template_directory_uri();?>/assets/images/profile-contents-item1.jpg" alt="" class="p-profileContents__headImg"
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
          <img src="<?php echo get_template_directory_uri();?>/assets/images/profile-contents-item2.jpg" alt="出張寿司で集う人々" class="p-profileContents__footerImg"
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

<?php get_footer(); ?>