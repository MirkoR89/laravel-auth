<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    //Homepage
    public function index()
    {
        return view('guests.index');
    }

    //About
    public function about()
    {
        return view('guests.about');
    }

    //Contacts
    public function contacts()
    {
        return view('guests.contacts');
    }
    
}
