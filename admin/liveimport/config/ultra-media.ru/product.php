<?php
$name = tag_text('h1');
find_manufacturer();
$price = tag_text(' .prod-price ');
$description = tag_html(' .descript ');
$main_image = tag_image(' #currentBigPic ');
$images = tags_image(' [itemprop=image] ');
