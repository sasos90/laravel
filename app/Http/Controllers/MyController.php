<?php namespace App\Http\Controllers;

use App;
use Session;

class MyController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // redirect to root if user is not logged in
        /*if (Session::has("user") === false) {
            // user is logged in
            return redirect("/");
        }*/
        // set environment from .env configuration
        App::detectEnvironment(function(){ return env("ENVIRONMENT", "dev"); });
    }
}
