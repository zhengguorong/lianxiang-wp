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
                        <div class="col-md-4">
                            <div class="content">
                                <a href="<?php echo get_permalink()?>"><?php the_post_thumbnail('medium');?><div class="name"><?php the_title()?></div></a>
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