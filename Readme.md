## Converts video host links to an iframe tag in PHP.

How to use:

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


## License

http://www.gnu.org/licenses/lgpl-3.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License as
published by the Free Software Foundation; either version 3 of
the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, see <http://www.gnu.org/licenses>.