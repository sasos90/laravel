<?php namespace App\Http\Controllers;

use App;

class MyController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // set environment from .env configuration
        App::detectEnvironment(function(){ return env("ENVIRONMENT", "dev"); });
    }
}
