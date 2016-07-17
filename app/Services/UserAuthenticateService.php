<?php
/**
 * Created by PhpStorm.
 * User: Takoyaki
 * Date: 2016/7/17
 * Time: 12:42
 */

namespace App\Services;

use App\Repositories\UserRepository;
use App\UserAuthenticateInterface;
use Illuminate\Contracts\Auth\Guard as Authenticator;

class UserAuthenticateService
{
    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var Authenticator
     */
    private $auth;
    /**
     * @var TwtSsoService
     */
    private $twtSsoService;

    public function __construct(UserRepository $users ,TwtSsoService $twtSsoService, Authenticator $auth)
    {
        $this->users = $users;
        $this->auth = $auth;
        $this->twtSsoService = $twtSsoService;
    }

    public function execute($hasCode,UserAuthenticateInterface $listener)
    {
        if(!hasCode) return $this->getAuthorizationFirst();

        $user = $this->users->findByTwtidOrCreate($this->getUser());
    }

    private function getAuthorizationFirst()
    {
        
    }

    private function getUser()
    {

    }

}