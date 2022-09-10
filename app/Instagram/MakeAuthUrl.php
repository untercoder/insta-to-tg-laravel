<?php

namespace App\Instagram;

use Amirsarhang\Instagram;

class MakeAuthUrl
{
    private array $permissions;
    private Instagram $instagram;

    public function __construct()
    {
        $this->permissions = [
            'instagram_basic'
        ];
        $this->instagram = new Instagram();
    }

    public function getUrl(): string
    {
        return $this->instagram->getLoginUrl($this->permissions);
    }
}
