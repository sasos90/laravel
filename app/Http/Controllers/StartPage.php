<?php namespace App\Http\Controllers;

class StartPage extends MyController {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('StartPage.index', [
            "pageAdd"   =>  [
                "title" => "My title"
            ]
        ]);
    }

}
