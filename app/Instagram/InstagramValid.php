<?php

namespace App\Instagram;
use MetzWeb\Instagram\Instagram;

class InstagramValid extends Instagram
{
    private $_scopes = array('user_profile','user_media');

    public function getLoginUrl($scope = array('basic'))
    {
        if (is_array($scope) && count(array_intersect($scope, $this->_scopes)) === count($scope)) {
            return self::API_OAUTH_URL . '?client_id=' . $this->getApiKey() . '&redirect_uri=' . urlencode($this->getApiCallback()) . '&scope=' . implode('+', $scope) . '&response_type=code';
        } else {
            throw new \Exception("Error: getLoginUrl() - The parameter isn't an array or invalid scope permissions used.");
        }
    }
}
