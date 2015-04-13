<?php namespace App\Http\Controllers;

class StartController extends MyController {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('layout.index', ["title" => "My title"]);
    }

}
