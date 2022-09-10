<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram\MakeAuthUrl;

class InstagramController extends Controller
{
    public function auth() {
        return redirect((new MakeAuthUrl())->getUrl());
    }
}
