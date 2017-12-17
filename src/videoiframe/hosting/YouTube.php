<?php
namespace src\videoiframe\hosting;

use src\videoiframe\Link;


class YouTube implements Link
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
            '#((https|http):\/\/([a-zA-Z0-9]+\.|)youtube\.com\/.*v=([a-zA-Z0-9_-]+).*)#i',
            '<iframe width="'.$this->width.'" height="'.$this->height.'" src="https://www.youtube.com/embed/\\4" allowfullscreen></iframe>',
            $this->link
        );
    }
}

?>