<?php
namespace App\Http\Controllers;

class ContactController extends Controller {
    public function index() {
        $name = "ニンジャスレイヤー";
        return view('contact')->with('name', $name);
    }
}
