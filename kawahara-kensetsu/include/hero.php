<?php if(is_home()): ?>
<div class="hero">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます
                </div>
                  <img src="<?= get_template_directory_uri(); ?>/images/slider.png" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます</div>
                  <img src="<?= get_template_directory_uri(); ?>/images/slider.png" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々<br>そこに住む人々の環境を守りながら<br>皆さまとともに歩み続けます</div>
                  <img src="<?= get_template_directory_uri(); ?>/images/slider.png" alt="" />
                </div>
              </div>
              <div class="hero__footer">
                <img class="arrow-downarrow" src="<?= get_template_directory_uri(); ?>/images/arrow.svg" />
                <span class="arrow-scrolltext">scroll</span>
              </div>
            </div>
          </div>
   <?php elseif(is_single() ||  is_archive()):?>
    <?php 
$category = get_the_category();
$cat_name = $category[0]->cat_name;
$category_nicename = $category[0]->category_nicename;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?=  esc_html($category_nicename); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || $category_nicename === 'news'):  ?>      
                <img src="<?= get_template_directory_uri(); ?>/images/sub-topimage06.png" alt="ヘッダー画像" />  
                <?php elseif(is_category('works') || $category_nicename === 'works'): ?>
                <img src="<?= get_template_directory_uri(); ?>/images/sub-topimage06.png" alt="ヘッダー画像" />  
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_page()): ?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?= strtoupper($post->post_name); ?></h2>
              <p class="hero-sub__subtitle"><?php the_title(); ?></p>
              </div>
              <div class="hero-sub__img"> 
                   
              
                <img src="<?= get_template_directory_uri(); ?>/images/sub-topimage06.png" alt="ヘッダー画像" />  
    
            </div>     
        </div>
      </div>
      <?php endif; ?>