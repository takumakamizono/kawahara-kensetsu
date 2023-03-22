<?php
define("DIRE", get_template_directory_uri());
function add_async_defer_script($url) {
    if (strpos($url, '#async'))
    return str_replace('#async', '', $url)."' async='async";
    elseif (strpos($url, '#defer'))
      return str_replace('#defer', '', $url)."' defer='defer";
    else
      return $url;
  }
  add_filter('clean_url', 'add_async_defer_script', 11, 1);
   

  function enqueue_scripts() {
    $version = '2023';
    wp_enqueue_style('css-reset',DIRE.'/styles/vendors/css-reset.css',array(), $version);
    wp_enqueue_style('fonts-adobi','https://use.typekit.net/bkx0sau.css', false);
    wp_enqueue_style('fonts-googleapis','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700|family=Noto+Serif+JP:wght@300;500;700&display=swap', false);
    wp_enqueue_style('swiper-bundle.min.css',DIRE.'/styles/vendors/swiper-bundle.min.css',array(), $version);
    wp_enqueue_style('style.css',DIRE.'/style.css?v2',array(), $version);
    wp_enqueue_script('fontawesome','https://kit.fontawesome.com/2bf622374b.js', false);
    wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', false);
    wp_enqueue_script('jquery.js', DIRE.  '/scripts/libs/jquery.js#defer', array(), $version);
    wp_enqueue_script('scroll-polyfill.js', DIRE.  '/scripts/vendors/scroll-polyfill.js#defer', array(), $version);
    wp_enqueue_script('gsap.min.js', DIRE.  '/scripts/vendors/gsap.min.js#defer', array(), $version);
    wp_enqueue_script('swiper-bundle.min.js', DIRE.  '/scripts/vendors/swiper-bundle.min.js#defer', array(), $version);
    wp_enqueue_script('hero-slider.js', DIRE.  '/scripts/libs/hero-slider.js#defer', array(), $version);
    wp_enqueue_script('scroll.js', DIRE.  '/scripts/libs/scroll.js#defer', array(), $version);
    wp_enqueue_script('text-animation.js', DIRE.  '/scripts/libs/text-animation.js#defer', array(), $version);
    wp_enqueue_script('mobile-menu.js', DIRE.  '/scripts/libs/mobile-menu.js#defer', array(), $version);
    wp_enqueue_script('main.js', DIRE.  '/scripts/main.js#defer', array(), $version);
  }
  add_action('wp_enqueue_scripts', 'enqueue_scripts');
  
  

add_theme_support('title-tag');
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($sepatator){
    $sepatator = '|';
    return $sepatator;
}
add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
 if(is_home()){
  unset($title['tagline']);
  $title['title']= '株式会社川原建設';
 }
 return $title;
}



add_theme_support('menus');
add_theme_support('post-thumbnails');

//category-label
function categories_label() {
  $cats = get_the_category();
foreach($cats as $cat){
        echo '<li>';
        // echo 'class="'.esc_attr($cat->slug).'">';
        echo esc_html($cat->name);
        echo '</li>';

    }

}
