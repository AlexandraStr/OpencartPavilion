<?php
$name = tag_text(' [property=og:title] ');
find_manufacturer();
$description = tag_html(' .product-name-id-wrap ');
$new_price = tag_text(' .new-price ');
$model = tag_text(' .vendor-code ');
$main_image = tag_text(' [property=og:image] ');
$images = tags_image(' .landscape ');
$opts_names = tags_html(' .table-size-button ');
$opts_values = tags_html(' .btn:nth-child(1) span ');
$options = pgroup($opts_names, $opts_values, '', 'Select');
