<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/3/11
 * Time: 下午10:18
 */
register_nav_menus(array(
    'top-menu'=>'顶部菜单',
));
//修改导航当前页面的class名字
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

//文章开启特色图片功能
//add post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'customized-post-thumb', 100, 120 );
}

?>
