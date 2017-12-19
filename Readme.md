# Convert video sharing link to iframe in PHP

This repository provides the ability to convert video sharing link to html tag <iframe>.


## Usage

### The client

```
<?php

use src\videoiframe\VideoIframe;
use src\videoiframe\hosting\YouTube;
use src\videoiframe\hosting\Vimeo;
use src\videoiframe\hosting\Youku;


// YouTube.com
$link = 'https://www.youtube.com/watch?v=Svk3r0D4a8g';

$video = new VideoIframe();
$iframe = $video->link(new YouTube($link, 800, 450));

echo $iframe;
// <iframe width="800" height="450" src="https://www.youtube.com/embed/Svk3r0D4a8g" allowfullscreen=""></iframe>


// Vimeo.com
$link = 'https://vimeo.com/83913453';

$video = new VideoIframe();
$iframe = $video->link(new Vimeo($link, 800, 450));

echo $iframe;
// <iframe src="https://player.vimeo.com/video/83913453?color=288ec0&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="800" height="450" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>


// Youku.com
$link = 'https://v.youku.com/v_show/id_XMTU2NzE1MTQ1Ng==.html';

$video = new VideoIframe();
$iframe = $video->link(new Youku($link, 800, 450));

echo $iframe;
// <iframe src="https://player.youku.com/embed/XMTU2NzE1MTQ1Ng====" width="800" height="450" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

?>
```