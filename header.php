<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/bootstrap/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/lib/swiper/idangerous.swiper.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css"/>

</head>
<body>
<header>
    <div class="container">
        <div class="phone">
            <i class="glyphicon glyphicon-phone-alt"><span>全国业务咨询热线：0766-2884896</span></i>
        </div>
        <div class="nav">
            <div class="row">
                <div class="logo col-md-2"><img alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></div>
                <div class="menu col-md-10">
                    <?php wp_nav_menu()?>
                </div>
            </div>
        </div>
        <div class="block"></div>
    </div>

</header>