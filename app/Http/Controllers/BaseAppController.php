<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram\InstagramClient;

class BaseAppController extends Controller
{

    public InstagramClient $instagramClient;

    public function __construct()
    {
        $this->instagramClient = new InstagramClient();
    }

    public function install()
    {
       return  view('install', [
          'install_link' => $this->instagramClient->makeInstallLink()
       ]);
    }

    public function uninstall()
    {
        //code
    }
}
