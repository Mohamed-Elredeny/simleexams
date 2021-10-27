<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {

        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest(route('login'));
        }

        if ($request->is('instructor') || $request->is('instructor/*')) {
            return redirect()->guest(route('login'));
        }

        // if ($request->is('vendor') || $request->is('vendor/*')) {
        //     return redirect()->guest(route('login'));
        // }

        if ($request->is('web') || $request->is('user/*')) {
            return redirect()->guest(route('login'));
        }

        return redirect()->guest(route('login'));
    }
}
