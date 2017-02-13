<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 21:57
 */

namespace App\Http\Controllers;


use App\Services\UserService;

class IndexController
{
    public function index()
    {
        $data = [
            'status' => 0,
        ];
        if(UserService::count() > 0){
            $data['status'] = 1;
        }
        return view('welcome',['data' => $data]);
    }
}