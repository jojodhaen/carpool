<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function __invoke()
    {
        auth('web')->logout();
        return redirect()->route('login');
    }
}
