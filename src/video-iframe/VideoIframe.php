<?php
namespace vdekh\videoiframe;

use vdekh\videoiframe\Link;


class VideoIframe
{
    public function link(Link $link)
    {
        return $link->getIframe();
    }
}