<?php namespace App\Http\Controllers;

use Session;

class StartPage extends MyController {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        if (Session::has("user") === true) {
            // user is logged in
            return "You're logged in :)";
        } else {
            // use not logged in
            return view('StartPage.index', [
                "pageAdd"   =>  [
                    "title" => "My title"
                ]
            ]);
        }
    }

}
