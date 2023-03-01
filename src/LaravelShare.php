<?php

namespace Dipesh79\LaravelShare;

class LaravelShare
{

    public $url;

    public function __construct()
    {
        $this->url = url()->current();
    }

    public function facebook($url)
    {
        return "https://www.facebook.com/sharer/sharer.php?u=" . $url ? $url : $this->url;
    }

    public function twitter($url)
    {
        return "https://twitter.com/intent/tweet?url=" . $url ? $url : $this->url;
    }

    public function pinterest($url)
    {
        return "https://www.pinterest.com/pin/create/button/?url=" . $url ? $url : $this->url;
    }

    public function linkedin($url)
    {
        return "https://www.linkedin.com/sharing/share-offsite?mini=true&url=" . $url ? $url : $this->url;
    }

    public function whatsapp($url)
    {
        return "https://api.whatsapp.com/send?text=" . $url ? $url : $this->url;
    }

    public function reddit($url)
    {
        return "https://www.reddit.com/submit?url=" . $url ? $url : $this->url;
    }

    public function telegram($url)
    {
        return "https://t.me/share/url?url=" . $url ? $url : $this->url;
    }

    public function tumblr($url)
    {
        return "https://tumblr.com/widgets/share/tool?canonicalUrl=" . $url ? $url : $this->url;
    }

    public function viber($url)
    {
        return "viber://forward?text=" . $url ? $url : $this->url;
    }

    public function gmail($url)
    {
        return "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=&body=".$url ? $url : $this->url."&ui=2&tf=1&pli=1";
    }

    public function trello($url)
    {
        return "https://trello.com/add-card?mode=popup&url=".$url ? $url : $this->url."&desc=";
    }


}
