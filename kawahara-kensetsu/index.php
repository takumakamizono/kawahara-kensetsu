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
            <aside class="side left">
              <div class="side__inner">
                <a href="#" class="twitter icon tween-animate-title">Twitter</a>
                <a href="#" class="fb icon tween-animate-title">Facebook</a>
              </div>
            </aside>
            <main>
            <section class="news" >
            <div class="section-titles">
                  <h2 class="main-title tween-animate-title">
                    NEWS
                  </h2>
                </div>
                <div  class="news__inner">
                <?php
                     $args=[
                       'post_type'=> 'post',
                       'posts_per_page' => 5,
                       
                     ];
                     $the_query = new WP_Query($args);
                    ?>
                  <?php if($the_query->have_posts()): ?>                    
                  <ul class="news__list"> 
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
            <?php get_template_part('include/news'); ?>
            <?php endwhile; ?>
                  </ul>
           <?php endif; ?>
             <?php wp_reset_postdata(); ?>                
                </div>
                <div class="news__btn appear up">
                    <a href=""  class="btn slide-bg item">more</a>
                  </div>
              </section>

        
             
              <section class="company">
                <div class="company__inner">
                  <div class="company__img cover-slide">
                    <img class="img-zoom" src="<?= get_template_directory_uri(); ?>/images/company01.png" />
                  </div>
                  <div class="company__texts appear left">
                    <div class="company__texts-inner">
                      <div class="company__title main-title item">
                        COMPANY
                      </div>
                      <div class="company__sub sub-title item">人とのつながりを大事に</div>
                      <div class="company__description item">
                        <p>
                        地域の発展に寄与できる<br />企業を目指して
                        </p>
                       
                      </div>
                      <div class="company__btn item">
                        <a class="btn02" href="">more</a>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="houses">
                <div>
                  <h2 class="main-title tween-animate-title">
                    Find Your House
                  </h2>
                  <p class="sub-title tween-animate-title">
                    お気に入りの宿泊先を見つけましょう
                  </p>
                </div>
                <div class="houses__inner">
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-1.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 1</p>
                  </div>
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-2.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 2</p>
                  </div>
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-3.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 3</p>
                  </div>
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-4.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 4</p>
                  </div>
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-5.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 5</p>
                  </div>
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">
                      <div
                        class="bg-img-zoom img-bg50"
                        style="background-image: url(<?= get_template_directory_uri(); ?>/images/villa-6.jpg)"
                      ></div>
                    </div>
                    <p class="houses__title">House 6</p>
                  </div>
                  <div class="houses__btn appear up">
                    <button class="btn slide-bg item">もっと詳しく</button>
                  </div>
                </div>
              </section>
              <section class="popular">
                <div class="popular__header">
                  <h2 class="main-title tween-animate-title">Popular Place</h2>
                  <p class="sub-title tween-animate-title">
                    人気の観光地で宿泊先を見つけましょう
                  </p>
                </div>
                <div class="popular__inner appear up">
                  <div class="popular__container">
                    <div class="popular__item item">
                      <div class="popular__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/image-p1.jpg" alt="" />
                      </div>
                      <p class="popular__title">パリ</p>
                    </div>
                    <div class="popular__item item">
                      <div class="popular__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/image-p2.jpg" alt="" />
                      </div>
                      <p class="popular__title">ニューヨーク</p>
                    </div>
                    <div class="popular__item item">
                      <div class="popular__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/image-p3.jpg" alt="" />
                      </div>
                      <p class="popular__title">香港</p>
                    </div>
                    <div class="popular__item item">
                      <div class="popular__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/image-p4.jpg" alt="" />
                      </div>
                      <p class="popular__title">大阪</p>
                    </div>
                    <div class="popular__btn appear up">
                      <button class="btn cover-3d item">
                        <span>一覧から探す</span>
                      </button>
                    </div>
                  </div>
                </div>
              </section>
            </main>
            <aside class="side right">
              <div class="side__inner">
                <span class="tween-animate-title">&copy; Code Mafia</span>
              </div>
            </aside>
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
            <div class="footer__copyright item">&copy; Code Mafia</div>
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
