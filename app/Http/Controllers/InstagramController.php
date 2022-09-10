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

    public function authInstagram() {
        return 0;
    }
}
