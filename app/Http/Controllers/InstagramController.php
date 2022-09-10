<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram\InstagramTolsBox;

class InstagramController extends Controller
{
    protected InstagramTolsBox $instagram;

    public function __construct()
    {
        $this->instagram = new InstagramTolsBox();
    }

    public function redirectInstagram() {
        return redirect($this->instagram->getUrl());
    }

    public function authInstagram(Request $request) {
        $profile = $this->instagram->getToken($request->get('code'));
        return $profile->user;
    }
}
