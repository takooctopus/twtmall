<?php

/**
 * Created by PhpStorm.
 * User: Takoyaki
 * Date: 2016/7/17
 * Time: 2:05
 */
namespace App\Repositories;

use App\Model\User;

class UserRepository
{
    public function findByTwtidOrCreate($userData)
    {
        return User::firstOrCreate([
            'twtid' => $userData->twtid,
            'email' => $userData->email,
            'campus' => $userData->campus,
            'username'=> $userData->username,
            'realname' => $userData->realname,
            'stunumber' => $userData->stunumber,
            'phone' => $userData->phone,
            'wechat' => $userData->wechat,
            'qq' => $userData->qq,
            'avatar'=> $userData->avatar,
            'token' =>$userData->token,
        ]);
    }
}