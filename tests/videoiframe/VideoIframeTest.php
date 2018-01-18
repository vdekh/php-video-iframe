<?php

namespace Tests\videiframe;

use PHPUnit\Framework\TestCase;
use vdekh\videoiframe\VideoIframe;
use vdekh\videoiframe\hosting\YouTube;
use vdekh\videoiframe\hosting\Vimeo;
use vdekh\videoiframe\hosting\Youku;

class VideoIframeTest extends TestCase
{
    public function testYouTube()
    {
        $link = 'https://www.youtube.com/watch?v=Svk3r0D4a8g';

        $video = new VideoIframe();
        $iframe = $video->link(new YouTube($link, 800, 450));

        $result = '<iframe width="800" height="450" src="https://www.youtube.com/embed/Svk3r0D4a8g" allowfullscreen></iframe>';

        self::assertEquals($result, $iframe);
    }

    public function testVimeo()
    {
        $link = 'https://vimeo.com/83913453';

        $video = new VideoIframe();
        $iframe = $video->link(new Vimeo($link, 800, 450));

        $result = '<iframe src="https://player.vimeo.com/video/83913453?color=288ec0&title=0&byline=0&portrait=0&badge=0" width="800" height="450" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

        self::assertEquals($result, $iframe);
    }

    public function testYouku()
    {
        $link = 'https://v.youku.com/v_show/id_XMTU2NzE1MTQ1Ng==.html';

        $video = new VideoIframe();
        $iframe = $video->link(new Youku($link, 800, 450));

        $result = '<iframe src="https://player.youku.com/embed/XMTU2NzE1MTQ1Ng====" width="800" height="450" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

        self::assertEquals($result, $iframe);
    }
}