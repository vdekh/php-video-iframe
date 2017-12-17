## How to use:

```
<?php

use app\extensions\videoiframe\VideoIframe;
use app\extensions\videoiframe\YouTube;

$link = 'https://www.youtube.com/watch?v=Svk3r0D4a8g';

$video = new VideoIframe();
$iframe = $video->link(new YouTube($link, 320, 180));

echo $iframe;

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