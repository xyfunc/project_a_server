<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/9
 * Time: 16:15
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{

    public function getList()
    {
        return response([
            'data' => [
                'list' => UserService::getList(),
                'errcode' => 0,
                'errmsg' => 'ok',
            ]
        ]);
    }

}