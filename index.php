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
            <div class="content">盐城百信餐饮管理有限公司是一家倡导“绿色菜品、健康饮食”的现代餐饮企业，自2010年5月创立以来，遵循“创新美味、引领时尚、服务大众、美味到家”的核心理念，倾心打造“中式餐饮外送品牌”。 ...</div>
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
                            echo '<div class="col-md-3 col-sm-3 col-xs-6"><a href=""><img src="img/timthumb.jpeg" alt=""/><div class="name">6元粽子</div></a></div>';
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
                    <li><span class="time">12-06</span><a href="">谁才是蔬菜中的皇后</a></li>
                    <li><span class="time">12-06</span><a href="">谁才是蔬菜中的皇后</a></li>
                    <li><span class="time">12-06</span><a href="">谁才是蔬菜中的皇后</a></li>
                    <li><span class="time">12-06</span><a href="">谁才是蔬菜中的皇后</a></li>
                    <li><span class="time">12-06</span><a href="">谁才是蔬菜中的皇后</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<?php get_footer()?>