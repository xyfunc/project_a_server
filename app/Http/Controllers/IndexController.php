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
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    const ADMIN_LOGIN_URL = "/user/login";
    const ADMIN_REGISTER_URL = "/user/register";
    const INIT_DATABASE = "/init";
    const WELCOME_URL = "/welcome";

    public function index()
    {
        try{
            if(UserService::count() > 0){
                return redirect( self::ADMIN_LOGIN_URL );
            }else{
                return redirect( self::ADMIN_REGISTER_URL );
            }
        }catch (\Exception $e){
            return redirect( self::WELCOME_URL );
        }
    }

    public function welcome()
    {
        $data = [
            'init_url' => url(self::INIT_DATABASE),
        ];
        return view('init.welcome', compact('data'));
    }

    public function init()
    {
        $data = [
            "init_url" => url("/init"),
        ];
        return view('init.setup', compact('data'));
    }

    public function initDatabase(Request $request)
    {
        $host = $request->input("host");
        $port = $request->input("port", 3306);
        $database = $request->input("database");
        $user = $request->input("user");
        $password = $request->input("password");
        if(!$host || !$port || !$database || !$user || !$password){
            redirect("/init.php");
        }
        $path = public_path()."/../";
        $env_file = "$path.env";
        exec("echo 'DB_HOST=$host\r\nDB_PORT=$port\r\nDB_DATABASE=$database\r\nDB_USERNAME=$user\r\nDB_PASSWORD=$password' >> $env_file");
        exec("php {$path}artisan migrate");
        return redirect("/user/register");
    }

}