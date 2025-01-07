<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function homeAction()
    {
       return view('pages.home');
    }
}
