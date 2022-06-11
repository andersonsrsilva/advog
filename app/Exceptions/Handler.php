<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Mail\Message;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    public function report(Throwable $exception)
    {
        parent::report($exception);

        // send error to developers emails
        $this->sendReport($exception);
    }

    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => __('exception.unauthenticated')], 401);
        }

        return redirect()->guest(route('login'));
    }

    protected function sendReport(Throwable $exception)
    {
        if (parent::shouldntReport($exception)) return;

        $emails = config('app.debug_emails');

        if (!$emails) return;

        $emails = is_string($emails) ? explode(',', $emails) : $emails;

        \Mail::raw((string)$exception, function (Message $message) use ($exception, $emails) {
            $message->to($emails)->subject(config('app.name') . ' ' . config('app.env') . ' | Error ' . class_basename($exception));
        });
    }
}
