<?php

require '../vendor/autoload.php';

use vdekh\videoiframe\VideoIframe;
use vdekh\videoiframe\hosting\YouTube;
use vdekh\videoiframe\hosting\Vimeo;
use vdekh\videoiframe\hosting\Youku;


// YouTube.com
$link = 'https://www.youtube.com/watch?v=Svk3r0D4a8g';

$video = new VideoIframe();
$iframe = $video->link(new YouTube($link, 800, 450));

echo $iframe;


// Vimeo.com
$link = 'https://vimeo.com/83913453';

$video = new VideoIframe();
$iframe = $video->link(new Vimeo($link, 800, 450));

echo $iframe;


// Youku.com
$link = 'https://v.youku.com/v_show/id_XMTU2NzE1MTQ1Ng==.html';

$video = new VideoIframe();
$iframe = $video->link(new Youku($link, 800, 450));

echo $iframe;