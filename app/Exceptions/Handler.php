<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
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
            exec("cp $path.env.example $path.env");
            $env_file = "$path.env";
            exec("echo 'DB_HOST=$host\r\nDB_PORT=$port\r\nDB_DATABASE=$database\r\nDB_USERNAME=$user\r\nDB_PASSWORD=$password' >> $env_file");
            exec("cd $path && php artisan migrate");
            return redirect("/user/register");
        }
        if( !file_exists( public_path()."/../.env") ){
           return redirect("/init.php");
        }
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}
