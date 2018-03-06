<?php
$name = tag_text(' .product_title_big ');
$price = tag_text(' b span ');
$description = tag_html(' #tab_description ');
$model = tag_text(' tr:nth-child(3) td:nth-child(2) ');
$manufacturer = tag_text(' .properties a span ');
$main_image = tag_image(' #image ');
$images = tags_image(' .pic:nth-child(1) img ');
$opts_names = tags_html(' .optname ');
$opts_values = tags_html(' .razmery ');
$options = pgroup($opts_names, $opts_values, '', 'Select');
