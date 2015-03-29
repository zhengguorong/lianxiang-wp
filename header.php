<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/bootstrap/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/swiper/idangerous.swiper.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css"/>
    <title>
        <?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?>
    </title>
</head>
<body>
<header>
    <div class="container">
        <div class="phone">
            <i class="glyphicon glyphicon-phone-alt"><span>全国业务咨询热线：<?php echo of_get_option("phone")?></span></i>
        </div>
        <div class="nav">
            <div class="row">
                <div class="logo col-md-2"><img alt="<?php bloginfo('name'); ?>" src=<?php echo of_get_option("logo")?>></div>
                <div class="menu col-md-9 col-md-offset-1">
                    <?php wp_nav_menu()?>
                </div>
            </div>
        </div>
        <div class="block"></div>
    </div>

</header>