<?php

namespace App\Instagram;

use MetzWeb\Instagram\Instagram;

class MakeAuthUrl
{
    private Instagram $instagram;

    public function __construct()
    {
        $this->instagram = new Instagram([
            'apiKey'      => env('FACEBOOK_APP_ID'),
            'apiSecret'   => env('FACEBOOK_APP_SECRET'),
            'apiCallback' => env('INSTAGRAM_CALLBACK_URL')
        ]);
    }

    public function getUrl(): string
    {
        return $this->instagram->getLoginUrl();
    }
}
