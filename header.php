<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php
      $body_classes = array(
        'top' => is_front_page(),
        'concept' => is_page('page-concept'),
        'plan' => is_page('page-plan'),
        'profile' => is_page('page-profile'),
        'faq' => is_page('page-faq'),
        'archive' => is_archive() || is_single() || is_404() || is_page('page-privacypolicy'),
      );
      foreach ($body_classes as $class => $condition) {
        if ($condition) {
          body_class($class);
          break;
        }
      }
      ?>>
  <?php if (is_front_page()) : ?>
    <?php get_template_part('template-parts/top-header'); ?>
  <?php else : ?>
    <?php wp_body_open(); ?>
    <!-- ▼ PC FV Start -->
    <div class="l-fv--<?php
                    $page_slugs = array(
                      'concept' => 'concept',
                      'plan' => 'plan',
                      'profile' => 'profile',
                      'faq' => 'faq',
                      'contact' => 'contact',
                      'reservation' => 'contact',
                      'privacypolicy' => 'article',
                    );
                    $class_output = false; // ここで変数を初期化
                    foreach ($page_slugs as $page => $class) {
                      if (is_page($page)) {
                        echo esc_html($class);
                        $class_output = true;
                        break;
                      }
                    }
                    if (!$class_output) {
                      if (is_archive() || is_single() || is_404()) {
                        echo esc_html('article');
                      }
                    }
                    ?> u-displayNone--PU">
      <h1 class="l-header__logoPc">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logoLink">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg" alt="<?php bloginfo('name'); ?>" class="l-header__logoImg" width="69" height="64">
        </a>
      </h1>
      <div class="l-fv__textBox">
        <p class="l-fv__enTitle<?php if(is_page('privacypolicy') || is_page('reservation')) {echo esc_html('--fzSmall');} ?>">
        <?php
          $page_titles = array(
            'concept' => 'CONCEPT',
            'plan' => 'PLAN',
            'profile' => 'PROFILE',
            'faq' => 'FAQ',
            'contact' => 'CONTACT',
            'reservation' => 'RESERVATION',
            'privacypolicy' => 'PRIVACY POLICY',
          );
          $title_output = false;
          foreach ($page_titles as $page => $title) {
            if (is_page($page)) {
              echo esc_html($title);
              $title_output = true;
              break;
            }
          }
          if (!$title_output) {
            if (is_archive() || is_single()) {
              echo esc_html('ARTICLE');
            } elseif(is_404()) {
              echo esc_html('404 PAGE');
            }
          }
        ?>
        </p>
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
    <?php endif; ?>