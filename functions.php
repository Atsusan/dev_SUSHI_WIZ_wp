<?php

/**
 * SUSHI＿WIZ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SUSHI＿WIZ
 */

if (! defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

//曖昧なURLを推測し、補完する機能を停止
add_filter('do_redirect_guess_404_permalink', '__return_false');

//過去のURLを元にリダイレクトする機能を停止
remove_action('template_redirect', 'wp_old_slug_redirect');

//WPのバージョン情報非表示
remove_action('wp_head', 'wp_generator');

/*------------------------------------------
 *  wordpress テーマ 機能有効化
 *----------------------------------------*/
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'my_setup');

/*------------------------------------------
 *  CSSとJS、CDNの読み込み
 *----------------------------------------*/
function add_files()
{
  // CSS読込み
  // GoogleFonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Sawarabi+Gothic&display=swap', array(), null);
  // Swiper CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');


  // Common CSS
  wp_enqueue_style('common-style', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0.0');
  // Top CSS
  if (is_front_page()) {
    wp_enqueue_style('top-css', get_template_directory_uri() . '/assets/css/top.css', array(), '1.0.0');
  }
  // Concept CSS
  if (is_page('concept')) {
    wp_enqueue_style('concept-css', get_template_directory_uri() . '/assets/css/concept.css', array('common-style'), '1.0.0');
  }
  // Plan CSS
  if (is_page('plan')) {
    wp_enqueue_style('plan-css', get_template_directory_uri() . '/assets/css/plan.css', array('common-style'), '1.0.0');
  }
  // Profile CSS
  if (is_page('profile')) {
    wp_enqueue_style('profile-css', get_template_directory_uri() . '/assets/css/profile.css', array('common-style'), '1.0.0');
  }
  // Chef CSS
  if (is_post_type_archive('chef')) {
    wp_enqueue_style('chef-css', get_template_directory_uri() . '/assets/css/profile-chef.css', array('common-style'), '1.0.0');
  }
  // FAQ CSS
  if (is_page('faq')) {
    wp_enqueue_style('faq-css', get_template_directory_uri() . '/assets/css/faq.css', array('common-style'), '1.0.0');
  }
  // Gallery CSS
  if (is_post_type_archive('gallery')) {
    wp_enqueue_style('gallery-css', get_template_directory_uri() . '/assets/css/gallery.css', array('common-style'), '1.0.0');
  }
  // Archive and Single amd 404 and PrivacyPolicy CSS
  if (is_archive() || is_single() || is_404() || is_page('privacypolicy')) {
    wp_enqueue_style('archive-css', get_template_directory_uri() . '/assets/css/article.css', array('common-style'), '1.0.0');
  }
  // Contact and Reservation CSS
  if (is_page('contact') || is_page('reservation')) {
    wp_enqueue_style('contact-css', get_template_directory_uri() . '/assets/css/contact.css', array('common-style'), '1.0.0');
  }



  // JS読込み
  // Smooth Scroll
  wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), '1.0.0', true);
  // Drawer
  wp_enqueue_script('drawer', get_template_directory_uri() . '/assets/js/drawer.js', array(), '1.0.0', true);
  if (is_front_page() || is_page('plan')) {
    // Loop Slide
    wp_enqueue_script('loop-slide', get_template_directory_uri() . '/assets/js/loopSlide.js', array(), '1.0.0', true);
    // Swiper JS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper.js', array(), '1.0.0', true);
  }
  // Accordion
  if (is_front_page() || is_page('faq')) {
    wp_enqueue_script('accordion-js', get_template_directory_uri() . '/assets/js/accordion.js', array(), '1.0.0', true);
  }
  // modal JS
  if (is_page('plan') || is_post_type_archive('chef')) {
    wp_enqueue_script('modal-js', get_template_directory_uri() . '/assets/js/modal.js', array(), '1.0.0', true);
  }
}
add_action('wp_enqueue_scripts', 'add_files');


/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archive';
    $args['label'] = '投稿';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*------------------------------------------
 *  カテゴリ絞り込み
 *----------------------------------------*/
add_action('pre_get_posts', function ($query) {
  if (!is_admin() && $query->is_main_query()) {

    // gallery アーカイブの絞り込み
    if ($query->is_post_type_archive('gallery')) {
      if (isset($_GET['gallery-cat']) && $_GET['gallery-cat'] !== 'all') {
        $query->set('tax_query', array(
          array(
            'taxonomy' => 'gallery-cat',
            'field'    => 'slug',
            'terms'    => sanitize_text_field($_GET['gallery-cat']),
          )
        ));
      }
      $query->set('posts_per_page', 10); // ギャラリーアーカイブの表示件数設定
    }

    // chef アーカイブのカテゴリ絞り込み
    if ($query->is_post_type_archive('chef')) {
      if (isset($_GET['chef-cat']) && $_GET['chef-cat'] !== 'all') {
        $query->set('tax_query', array(
          array(
            'taxonomy' => 'chef-cat',
            'field'    => 'slug',
            'terms'    => sanitize_text_field($_GET['chef-cat']),
          )
        ));
      }
      $query->set('posts_per_page', 5); // chef アーカイブの表示件数設定
    }

    // 投稿アーカイブのカテゴリ絞り込み
    if ($query->is_archive() && $query->get('post_type') === 'post') {
      if (isset($_GET['category']) && $_GET['category'] !== 'all') {
        $query->set('category_name', sanitize_text_field($_GET['category']));
      }
      $query->set('posts_per_page', 8); // 投稿アーカイブの表示件数設定
    }
  }
});


/*------------------------------------------
 *  投稿の名前を変更
 *----------------------------------------*/
/* 「投稿」ラベル変更 */
function change_post_menu_label()
{
  global $menu;
  global $submenu;
  $name = 'ARTICLE';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新規投稿の追加';
}
function change_post_object_label()
{
  global $wp_post_types;
  $name = 'ARTICLE';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

/*------------------------------------------
 *  カテゴリーが未設定の場合、デフォルトカテゴリーを設定
 *----------------------------------------*/
function assign_default_category($post_id, $post, $update)
{
  // 既存の投稿の更新時は何もしない
  if ($update) {
    return;
  }

  // カテゴリーが割り当てられていない場合は、デフォルトカテゴリーを割り当てる
  $default_category = get_term_by('name', 'その他', 'category');
  if ($default_category && ! has_category('', $post_id)) {
    wp_set_post_categories($post_id, array($default_category->term_id));
  }
}
add_action('save_post', 'assign_default_category', 10, 3);

/*------------------------------------------
 * URL設定項目を追加
 *----------------------------------------*/
// LINE URL設定項目を追加
function add_line_url_setting()
{
  add_settings_section(
    'line_url_section',
    'LINE URL設定',
    '__return_null',
    'general'
  );

  add_settings_field(
    'line_url',
    'LINE URL',
    'display_line_url_field',
    'general',
    'line_url_section'
  );

  register_setting('general', 'line_url', [
    'type' => 'string',
    'sanitize_callback' => 'esc_url',
    'default' => ''
  ]);
}
add_action('admin_init', 'add_line_url_setting');

// LINE URL入力フィールドの表示
function display_line_url_field()
{
  $line_url = get_option('line_url', '');
  echo '<input type="url" id="line_url" name="line_url" value="' . esc_attr($line_url) . '" class="regular-text" />';
}

// Instagram URL設定項目を追加
function add_instagram_url_setting()
{
  add_settings_section(
    'instagram_url_section',
    'Instagram URL設定',
    '__return_null',
    'general'
  );

  add_settings_field(
    'instagram_url',
    'Instagram URL',
    'display_instagram_url_field',
    'general',
    'instagram_url_section'
  );

  register_setting('general', 'instagram_url', [
    'type' => 'string',
    'sanitize_callback' => 'esc_url',
    'default' => ''
  ]);
}
add_action('admin_init', 'add_instagram_url_setting');

// Instagram URL入力フィールドの表示
function display_instagram_url_field()
{
  $instagram_url = get_option('instagram_url', '');
  echo '<input type="url" id="instagram_url" name="instagram_url" value="' . esc_attr($instagram_url) . '" class="regular-text" />';
}

/*------------------------------------------
 *　コメント機能を無効化
 *----------------------------------------*/

// 管理画面の「コメント」メニューを削除
function remove_comments_menu()
{
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu');

// コメント関連の機能を無効化
function disable_comments_features()
{
  // 投稿編集画面でコメント機能を無効化
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');

  // 管理バーから「コメント」を非表示に
  add_action('wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
  });
}
add_action('init', 'disable_comments_features', 100);
