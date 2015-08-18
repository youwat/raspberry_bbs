<?php namespace App\Http\Controllers;

class BbsController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $header = new \stdClass();
        $header->title = "test";
        return view('bbs')->with('header',$header);
    }
    public function ajax()
    {
        return 'hogehoge';
    }
}
