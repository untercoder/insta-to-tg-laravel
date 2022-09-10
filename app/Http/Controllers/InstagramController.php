<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram\InstagramToolsBox;

class InstagramController extends Controller
{
    protected InstagramToolsBox $instagramTools;

    public function __construct()
    {
        $this->instagramTools = new InstagramToolsBox();
    }

    public function redirectInstagram()
    {
        return redirect($this->instagramTools->getUrl());
    }

    public function authInstagram(Request $request)
    {
        $instagram = $this->instagramTools->getInstObj();
        $data = $instagram->getOAuthToken($request->get('code'));
        $instagram->setAccessToken($data);
        dd($instagram->getUser());
    }
}
