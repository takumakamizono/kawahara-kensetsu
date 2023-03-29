<section class="news" >
            <div class="section-titles">
                  <h2 class="main-title">
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
                  <ul class="news__list appear right"> 
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
            <?php get_template_part('include/news-inside'); ?>
            <?php endwhile; ?>
                  </ul>
           <?php endif; ?>
             <?php wp_reset_postdata(); ?>                
                </div>
                <div class="news__btn appear up">
                <?php
                      $news = get_term_by('slug','news','category');
                      $news_link = get_term_link($news,'category')
                      ?>
                    <a href="<?= esc_url($news_link); ?>"  class="btn slide-bg item">more</a>
                  </div>
              </section>
