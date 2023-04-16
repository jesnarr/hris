<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
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
    public function report(Throwable $exception)
    {
        //   if ($exception instanceof Throwable && !in_array(get_class($exception), $this->dontReport)) {
        //     $handler = new ErrorHandler(null, true);
        //     $handler->setExceptionHandler([$handler, 'renderException']);
        //     ob_start();
        //     $handler->handleException($exception);
        //     $html = ob_get_clean();

        //     $subject = $exception->getMessage() . " - " . env('APP_URL');
        //     Mail::send([], [], function ($message) use ($html, $subject) {
        //         $message->subject($subject . ' - url: ' . Request::fullUrl())
        //             ->from('test@gmail.com', 'Website Error')
        //             ->to('test@gmail.com', 'FilGlobal')
        //             ->setBody($html, 'text/html');
        //     });
        // }
        parent::report($exception);
    }
}
