<?php
namespace StanleyMSACommon\MSACommon\Services;

use StanleyMSACommon\MSACommon\Clients\AuthUserClient;

class AuthUserService
{

    /* @var $authUserClient AuthUserClient*/
    private $authUserClient;

    public function __construct() {
        $this->authUserClient = resolve(AuthUserClient::class);
    }

    public function getUser(){
        return $this->authUserClient->getUser()['results']['user'];
    }

}