<?php
/**
 * Created by PhpStorm.
 * User: zgr
 * Date: 2015/3/29
 * Time: 16:07
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
                <?php foreach($posts as $post):?>
                    <div class="contextTitle">
                        <div class="title col-md-3"><?php echo $post->post_title?></div>
                        <div class="map col-md-9"></div>
                    </div>
                    <div class="textContent">
                        <?php echo $post->post_content?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php get_footer()?>