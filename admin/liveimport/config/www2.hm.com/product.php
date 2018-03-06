<?php
$name = tag_text(' [property=og:title] ');
find_manufacturer();
$price = tag_text(' .price-value ');
$description = tag_html(' .pdp-content ');
$main_image = tag_image(' .product-detail-main-image-container ');
$images = tags_image(' .placeholder ');
