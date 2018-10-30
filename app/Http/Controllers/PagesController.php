<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index() {
    return view('pages.index');
}
    function contact() {
        return view('pages.contact');
    }
    function info(Request $request) {
        $firstname = $request->firstname;
        return redirect()->route('thanks',['firstname'=>$firstname]);

    }
    function thanks($firstname, Request $request){
        return view('pages.thanks')->with(compact('firstname'));
    }
}