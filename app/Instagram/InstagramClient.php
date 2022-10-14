<?php

namespace App\Instagram;

use Illuminate\Http\Request;
use MetzWeb\Instagram\Instagram;

class InstagramClient
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

    public function authInstagram(Request $request)
    {
        $instagram = $this->instagram;
        $data = $instagram->getOAuthToken($request->get('code'));
        $instagram->setAccessToken($data);
        dd($instagram->getUser());
    }

    public function makeInstallLink() {
        return $this->instagram->getLoginUrl();
    }

    public function getUrl()
    {
        return $this->instagram->getLoginUrl()."&scope=user_profile,user_media";
    }
}
