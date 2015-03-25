<?php get_header()?>
<section id="banner">
    <div class="container">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <div class="swiper-slide"><img width="100%" src="img/ban3.jpg" alt=""/></div>
                <div class="swiper-slide"><img width="100%" src="img/ban3.jpg" alt=""/></div>
                <div class="swiper-slide"><img width="100%" src="img/ban3.jpg" alt=""/></div>
                <div class="swiper-slide"><img width="100%" src="img/ban3.jpg" alt=""/></div>
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
            <?php
            $post=get_page_by_title( '关于我们' );
            echo $post->post_content;
            ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="min">
                <div class="title">美食中心</div>
                <div class="content">
                    <?php $catId=get_cat_ID("美食中心");
                          $posts=get_posts(array('category'=>$catId,'numberposts'=>6));
                    ?>
                    <?php if($posts) {
                        foreach ($posts as $post) {
                            echo '<div class="col-md-3 col-sm-3 col-xs-6"><a href="">';
                            the_post_thumbnail('medium');
                            echo the_title('<div class="name">','</div>');
                            echo '</a></div>';
                        }
                    }?>
                    <span style="display:block; clear:both; height:0;"></span>
                </div>
            </div>

        </div>
        <div class="right col-md-3">
            <div class="title">新闻资讯</div>
            <div class="content">
                <ul>
                    <?php $catId=get_cat_ID("新闻咨询");
                    $posts=get_posts(array('category'=>$catId));
                    ?>
                    <?php
                        if($posts){
                            foreach($posts as $post){
                                the_title(' <li><span class="time">12-6</span><a href="">','</a></li>');
                            }
                        }
                    ?>

                </ul>
            </div>
        </div>

    </div>
</section>
<?php get_footer()?>