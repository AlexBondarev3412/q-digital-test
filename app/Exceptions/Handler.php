<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function (AuthenticationException $exception, Request $request) {
            if ($request->is('api/*')) {
                if ($exception instanceof AuthenticationException) {
                    return $request->expectsJson() ?:
                        response()->json([
                            'message' => 'Unauthenticated.',
                            'status' => 401,
                            'Description' => 'Missing or Invalid Access Token'
                        ], 401);
                }
            }
        });
    }
}