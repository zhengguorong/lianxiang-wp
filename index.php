<?php get_header()?>
<section id="banner">
    <div class="container">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if(of_get_option("banner1")):?>
                    <div class="swiper-slide"><img width="100%"  src="<?php echo of_get_option("banner1")?>" alt=""/></div>
               <?php endif?>
                <?php if(of_get_option("banner2")):?>
                    <div class="swiper-slide"><img width="100%"   src="<?php echo of_get_option("banner2")?>" alt=""/></div>
               <?php endif?>
                <?php if(of_get_option("banner3")):?>
                    <div class="swiper-slide"><img width="100%"   src="<?php echo of_get_option("banner3")?>" alt=""/></div>
               <?php endif?>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="left col-md-3">
            <div class="title">关于我们</div>
            <div class="content">
                <div class="col-md-12">
                    <?php
                    $post=get_page_by_title( '关于我们' );
                    echo $post->post_content;
                    ?>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="min">
                <div class="title">美食中心</div>
                <div class="content">
                        <?php $catId=get_cat_ID("美食中心");
                        $posts=get_posts(array('category'=>$catId,'numberposts'=>6));
                        foreach ($posts as $post) :?>
                            <div class="col-md-3 col-sm-3 col-xs-6"><a href="<?php echo get_permalink()?>"><?php the_post_thumbnail('medium');?><?php the_title()?></a></div>
                        <?php endforeach?>
                    <span style="display:block; clear:both; height:0;"></span>
                </div>
            </div>

        </div>
        <div class="right col-md-3">
            <div class="title">促销活动</div>
            <div class="content">
                <div class="col-md-12">
                <ul>
                    <?php $catId=get_cat_ID("促销活动");
                    $posts=get_posts(array('category'=>$catId));
                    foreach($posts as $post):?>
                    <li><span class="time"><?php echo get_post_time('m-d')?></span><a href="<?php echo get_permalink()?>"><?php echo $post->post_title?></a></li>
                    <?php endforeach;?>
                </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer()?>