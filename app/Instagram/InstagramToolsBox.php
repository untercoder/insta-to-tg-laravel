<?php

namespace App\Instagram;

use MetzWeb\Instagram\Instagram;

class InstagramToolsBox
{
    private Instagram $instagram;

    public function __construct()
    {
        $this->instagram = new Instagram([
            'apiKey'      => env('FACEBOOK_APP_ID'),
            'apiSecret'   => env('FACEBOOK_APP_SECRET'),
            'apiCallback' => env('INSTAGRAM_CALLBACK_URL'),
        ]);
    }

    public function getInstObj() {
       return $this->instagram;
    }

    public function getUrl() {
        return $this->instagram->getLoginUrl()."&scope=user_profile,user_media";
    }
}
