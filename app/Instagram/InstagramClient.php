<?php

namespace App\Instagram;

use Illuminate\Http\Request;
use App\Instagram\InstagramValid;

class InstagramClient
{
    private InstagramValid $instagram;

    public function __construct()
    {
        $this->instagram = new InstagramValid([
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
        $this->instagram->getLoginUrl();
    }
}
