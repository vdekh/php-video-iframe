<?php
namespace src\videoiframe;

use src\videoiframe\Link;


class VideoIframe
{
    public function link(Link $link)
    {
        return $link->getIframe();
    }
}

?>