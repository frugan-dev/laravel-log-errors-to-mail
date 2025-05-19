<?php

return [
    'log_errors_to_mail' => [
        'driver' => 'monolog',
        'handler' => \Portavice\Laravel\LogErrorsToMail\Monolog\EmailHandler::class,
        'with' => [
            'driver' => config('laravel_log_errors_to_mail.email_driver'),
            'recipient' => config('laravel_log_errors_to_mail.recipient'),
            'deduplicate' => config('laravel_log_errors_to_mail.deduplicate', true),
            'deduplicate_path' => config('laravel_log_errors_to_mail.deduplicate_path', storage_path('logs/deduplicate.log')),
            'level' => config('laravel_log_errors_to_mail.log_level', \Psr\Log\LogLevel::ERROR),
        ],
    ],
];
