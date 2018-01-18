<?php

namespace vdekh\videoiframe;

class VideoIframe
{
    public function link(Link $link)
    {
        return $link->getIframe();
    }
}