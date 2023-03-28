<?php if(is_home()): ?>
<div class="hero">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます
                </div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top-image01.png" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます</div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top-image01.png" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます</div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top-image01.png" alt="" />
                </div>
              </div>
             
            </div>
          </div>
   <?php elseif(is_archive()):?>
    <?php 
    $category = get_queried_object();
    $cat_slug = $category->category_nicename;
    $cat_name = $category->cat_name;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>           
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>      
                <img src="<?= get_template_directory_uri(); ?>/images/subtop-image01.png" alt="ヘッダー画像" />  
                <?php elseif(is_category('works') || in_category('works') ): ?>
                <img src="<?= get_template_directory_uri(); ?>/images/subtop-image07.png" alt="ヘッダー画像" />  
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_single()):?>
    <?php 
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
    $cat_name = $category[0]->name;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>           
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>      
                <img src="<?= get_template_directory_uri(); ?>/images/subtop-image01.png" alt="ヘッダー画像" />  
                <?php elseif(is_category('works') || in_category('works') ): ?>
                <img src="<?= get_template_directory_uri(); ?>/images/subtop-image07.png" alt="ヘッダー画像" />  
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_page()) : ?>
        <?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?= strtoupper($post->post_name); ?></h2>
              <p class="hero-sub__subtitle"><?php the_title(); ?></p>
              </div>
              <div class="hero-sub__img">    
             <?php if($slug === "company"): ?>
        <img src="<?= get_template_directory_uri(); ?>/images/subtop-image06.png" alt="ヘッダー画像" />  
        <?php elseif($slug === "recruit"): ?>
        <img src="<?= get_template_directory_uri(); ?>/images/subtop-image02.png" alt="ヘッダー画像" />  
        <?php elseif($slug === "contact" || $slug === "thanks"): ?>
        <img src="<?= get_template_directory_uri(); ?>/images/subtop-image03.png" alt="ヘッダー画像" />  
        <?php elseif($slug === "privacy"): ?>
        <img src="<?= get_template_directory_uri(); ?>/images/subtop-image05.png" alt="ヘッダー画像" />  
        <?php elseif($slug === "sitemap"): ?>
        <img src="<?= get_template_directory_uri(); ?>/images/subtop-image04.png" alt="ヘッダー画像" />  
       <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_404()): ?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle ">404 NOT FOUND</h2>
              </div>
              <div class="hero-sub__img">        
        <img src="<?= get_template_directory_uri(); ?>/images/sub-topimage04.png" alt="ヘッダー画像" />  
            </div>     
        </div>
      </div>


        <?php endif; ?>