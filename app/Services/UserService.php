<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/9
 * Time: 16:17
 */
namespace App\Services;

use App\User;

class UserService
{

    public static function getList()
    {
        return User::get();
    }

}