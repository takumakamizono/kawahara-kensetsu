<div id="post-<?php the_ID(); ?>"<?php post_class('works__item ') ?>>
    
<a href="<?php the_permalink(); ?>">
    <div class="works__img">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>    
            <?php else: ?>       
                <img src="<?= get_template_directory_uri(); ?>/images/company.png" alt=""> 
                <?php endif; ?>
            </div>
        </a>
        <div class="works__contents">
                <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    <p class="works__title"><?php the_title(); ?></p>
                    <!-- <div class="works__desc">
                      <p><?php //the_excerpt(); ?></p>
                    </div> -->
        </div>
</div>

