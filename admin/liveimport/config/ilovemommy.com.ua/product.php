<?php
$name = tag_text(' h1 ');
find_manufacturer();
$price = tag_text(' #product-price-56114_clone .price ');
$description = tag_html(' #extra_tabs_description_contents ');
$main_image = tag_image(' #image ');
$images = tags_image(' [itemprop=image] ');
