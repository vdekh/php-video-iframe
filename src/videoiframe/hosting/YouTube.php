<?php
namespace vdekh\videoiframe\hosting;

use vdekh\videoiframe\Link;

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
        $this->link = preg_replace(
            '#((https|http):\/\/([a-zA-Z0-9]+\.|)youtube\.com\/.*v=([a-zA-Z0-9_-]+).*)#i',
            '<iframe width="'.$this->width.'" height="'.$this->height.'" src="https://www.youtube.com/embed/\\4" allowfullscreen></iframe>',
            $this->link
        );
        $this->link = preg_replace(
            '#((https|http):\/\/youtu\.be\/([a-zA-Z0-9_-]+).*)#i',
            '<iframe width="'.$this->width.'" height="'.$this->height.'" src="https://www.youtube.com/embed/\\3" allowfullscreen></iframe>',
            $this->link
        );

        return $this->link;
    }
}