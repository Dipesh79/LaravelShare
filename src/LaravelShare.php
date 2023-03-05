<?php

namespace Dipesh79\LaravelShare;

class LaravelShare
{

    public $url;

    public function __construct()
    {
        $this->url = url()->current();
    }

    public function facebook($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://www.facebook.com/sharer/sharer.php?u=" . $url;
    }

    public function twitter($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://twitter.com/intent/tweet?url=" . $url;
    }

    public function pinterest($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://www.pinterest.com/pin/create/button/?url=" . $url;
    }

    public function linkedin($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://www.linkedin.com/sharing/share-offsite?mini=true&url=" . $url;
    }

    public function whatsapp($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://api.whatsapp.com/send?text=" . $url;
    }

    public function reddit($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://www.reddit.com/submit?url=" . $url;
    }

    public function telegram($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://t.me/share/url?url=" . $url;
    }

    public function tumblr($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://tumblr.com/widgets/share/tool?canonicalUrl=" . $url;
    }

    public function viber($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "viber://forward?text=" . $url;
    }

    public function gmail($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=&body=" . $url . "&ui=2&tf=1&pli=1";
    }

    public function trello($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://trello.com/add-card?mode=popup&url=" . $url . "&desc=";
    }

    public function messenger($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://www.facebook.com/dialog/send?link=" . $url;
    }

    public function skype($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://web.skype.com/share?url=" . $url;
    }

    public function qq($url = null)
    {
        if ($url == null) {
            $url = $this->url;
        }
        return "https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=" . $url;
    }


}
