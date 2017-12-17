<?php
namespace src\videoiframe\hosting;

use src\videoiframe\Link;


class Youku implements Link
{
    private $link;
    private $width;
    private $height;

    public function __construct($link, $width, $height)
    {
        $this->link = $link;
        $this->width = $width;
        $this->height = $height;
    }

    public function getIframe()
    {
        return preg_replace(
            '#((https|http):\/\/([a-zA-Z0-9]+\.|)youku\.com\/v_show\/id_([a-zA-Z0-9=]+)\.html)#i',
            '<iframe src="https://player.youku.com/embed/\\4==" width="'.$this->width.'" height="'.$this->height.'" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
            $this->link
        );
    }
}

?>