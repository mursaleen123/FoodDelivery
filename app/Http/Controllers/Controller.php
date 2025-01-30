<?php

namespace App\Http\Controllers;
use App\Http\Middleware\EnsureUserIsAdmin;

abstract class Controller
{
    protected $middleware = [
        EnsureUserIsAdmin::class,  // Registering the custom middleware
    ];
}
