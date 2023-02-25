<?php

namespace Dipesh79\LaravelShare;

class LaravelShare{

    public $url;

    public function __construct()
    {
        $this->url=url()->current();
    }

    public function facebook()
    {
        return "https://www.facebook.com/sharer/sharer.php?u=".$this->url;
    }

    public function twitter()
    {
        return "https://twitter.com/intent/tweet?url=".$this->url;
    }

    public function pinterest()
    {
        return "https://www.pinterest.com/pin/create/button/?url=".$this->url;
    }

    public function linkedin()
    {
        return "https://www.linkedin.com/sharing/share-offsite?mini=true&url=".$this->url;
    }

      public function whatsapp()
    {
        return "https://api.whatsapp.com/send?text=".$this->url;
    }

    public function reddit()
    {
        return "https://www.reddit.com/submit?url=".$this->url;
    }

    public function telegram()
    {
        return "https://t.me/share/url?url=".$this->url;
    }


}
