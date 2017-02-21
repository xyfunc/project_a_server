<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/9
 * Time: 16:15
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

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
        try{
            User::all();
        }catch (\Exception $e){
            $path = public_path()."/../";
            exec("cp $path.env.example $path.env");
            $data = [
                "init_url" => url("/init"),
                "error" => $e->getMessage(),
            ];
            return view('init.setup', compact('data'));
        }
        $data = [
            "register_url" => url("/user/register"),
        ];
        return view('init.setup-info', compact('data'));
    }

    public function login()
    {
        if( Auth::check()) {
            return redirect('admin/product');
        }
        $data = [
            "login_url" => url("/user/login"),
        ];
        return view('user.login', compact('data'));
    }

}