<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 21:57
 */

namespace App\Http\Controllers;


use App\Services\UserService;
use Illuminate\Http\Request;

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

    public function init()
    {
        return view('init.init', ['data' => []]);
    }

    public function initDatabase(Request $request)
    {
        $init = $request->input("init_database");
        if( $init ){
            $host = $request->input("host");
            $port = $request->input("port");
            $database = $request->input("database");
            $user = $request->input("user");
            $password = $request->input("password");
            if(!$host || !$port || !$database || !$user || !$password){
                redirect("/init.php");
            }
            $path = public_path()."/../";
            $env_file = "$path.env";
            exec("echo 'DB_HOST=$host\r\nDB_PORT=$port\r\nDB_DATABASE=$database\r\nDB_USERNAME=$user\r\nDB_PASSWORD=$password' >> $env_file");
            exec("cd $path && php artisan migrate");
            return redirect("/user/register");
        }
        return redirect('/init');
    }

}