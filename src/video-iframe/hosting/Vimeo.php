<?php
namespace vdekh\videoiframe\hosting;

use vdekh\videoiframe\Link;


class Vimeo implements Link
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
            '#((https|http):\/\/([a-zA-Z0-9]+\.|)vimeo\.com.*[/=:]([0-9]+))#i',
            '<iframe src="https://player.vimeo.com/video/\\4?color=288ec0&title=0&byline=0&portrait=0&badge=0" width="'.$this->width.'" height="'.$this->height.'" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
            $this->link
        );
    }
}