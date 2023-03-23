<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <?php get_template_part('include/side-left'); ?>
            <main>
              <?php get_template_part('include/news'); ?>
              <?php get_template_part('include/company'); ?>
              <?php get_template_part('include/works'); ?>
              <?php get_template_part('include/recruit'); ?>

            </main>
            <?php get_template_part('include/side-right'); ?>
          
          </div>
        </div>
        <div class="footer appear up">
          <div class="logo item">
            <img class="logo__img" src="<?= get_template_directory_uri(); ?>/images/logo.svg" />
            <span class="logo__stay">Stay</span>
            <span class="logo__world">World</span>
          </div>
          <nav class="footer__nav">
            <ul class="footer__ul">
              <li class="footer__li item"><a href="#">Service</a></li>
              <li class="footer__li item"><a href="#">Contact</a></li>
              <li class="footer__li item"><a href="#">Company</a></li>
              <li class="footer__li item"><a href="#">Sitemap</a></li>
            </ul>
            <div class="footer__copyright item">Copyright&copy; 株式会社 川原建設 All Rights Reserved. </div>
          </nav>
        </div>
      </div>
      <nav class="mobile-menu">
        <div class="logo">
          <img class="logo__img" src="<?= get_template_directory_uri(); ?>/images/logo.svg" />
          <span class="logo__stay">Stay</span>
          <span class="logo__world">World</span>
        </div>
        <ul class="mobile-menu__main">
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="#">
              <span class="main-title">Our Service</span>
              <span class="sub-title">サービスについて</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="#">
              <span class="main-title">About Us</span>
              <span class="sub-title">私たちについて</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="#">
              <span class="main-title">Contact Us</span>
              <span class="sub-title">コンタクト方法</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
