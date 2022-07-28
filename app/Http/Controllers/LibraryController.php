<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $message = "welcome in your library!";
        return view('library', ['message' => $message]);
    }
}
