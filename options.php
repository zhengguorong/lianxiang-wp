<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

    $options[] = array(
        'name' =>  '首页轮换广告设置',
        'type' => 'heading'
    );
    $options[] = array(
        'name' => __( '广告一', 'theme-textdomain' ),
        'desc' => __( '选择首页广告图', 'theme-textdomain' ),
        'id' => 'banner1',
        'type' => 'upload'
    );
    $options[] = array(
        'name' => __( '广告二', 'theme-textdomain' ),
        'desc' => __( '选择首页广告图', 'theme-textdomain' ),
        'id' => 'banner2',
        'type' => 'upload'
    );
    $options[] = array(
        'name' => __( '广告三', 'theme-textdomain' ),
        'desc' => __( '选择首页广告图', 'theme-textdomain' ),
        'id' => 'banner3',
        'type' => 'upload'
    );
    $options[] = array(
        'name' => __( '广告四', 'theme-textdomain' ),
        'desc' => __( '选择首页广告图', 'theme-textdomain' ),
        'id' => 'banner4',
        'type' => 'upload'
    );
    $options[] = array(
        'name' =>  '网站信息',
        'type' => 'heading'
    );
    $options[] = array(
        "name" => "网站logo",
        "id" => "logo",
        "type" => "upload");
    $options[] = array(
        "name" => "联系电话",
        "id" => "phone",
        "type" => "text");
    $options[] = array(
        "name" => "地址",
        "id" => "address",
        "type" => "text");


    return $options;
}