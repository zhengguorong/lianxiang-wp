<?php
/**
 * Created by PhpStorm.
 * User: zgr
 * Date: 2015/3/29
 * Time: 16:06
 */
get_header();
?>
    <section id="banner">
        <div class="container-fluid">
            <div class="greyBg">
                <img src="<?php echo of_get_option("catbanner")?>"  alt=""/>
            </div>

        </div>
    </section>
    <section id="aboutContent">
        <div class="container">
            <div class="leftmenu">

                <ul>
                    <?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu(array( 'theme_location' => 'left-menu','container_id'=>'左侧菜单') );
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-9">

                <div class="contextTitle">
                    <div class="title col-md-3"><?php echo single_cat_title()?></div>
                    <div class="map col-md-9"></div>
                </div>

                <div class="listContent">
                    <?php foreach($posts as $post):?>
                    <div class="newslist col-md-12">
                            <div class=" col-md-2">
                                <div class="newsTime">
                                    <span class="nt01"><?php echo get_post_time('Y-m')?></span>
                                    <span class="nt02"><?php echo get_post_time('d')?></span>
                                </div>

                            </div>
                        <div class="newsContain col-md-10">
                            <a href="<?php echo get_permalink()?>"><h3><?php the_title()?></h3></a>
                            <p><?php echo wp_trim_words($post->post_content,70)?></p>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>