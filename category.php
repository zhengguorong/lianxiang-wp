<?php
if ( in_category("美食中心") ) {
    get_template_part('category-imgList' );
}else {
    get_template_part('category-postList' );
}
?>