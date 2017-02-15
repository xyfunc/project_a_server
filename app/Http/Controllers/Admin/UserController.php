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

    public function create()
    {
        $data = [
            "register_url" => url("/user/register"),
        ];
        return view('user.register', compact('data'));
    }

    public function login()
    {
        $data = [
            "login_url" => url("/user/login"),
        ];
        return view('user.login', compact('data'));
    }

}