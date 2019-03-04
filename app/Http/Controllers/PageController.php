<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
      $data['books'] = \App\Book::Get();
      return view('index')->with('data', $data);
    }

    public function userPanel()
    {
        return view('user.user');
    }
}
