<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;

class RegisterController extends Controller
{
    public function index()
    {
        TestJob::dispatch(['test' => 123]);
    }
}
