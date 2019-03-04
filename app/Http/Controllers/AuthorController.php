<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'firstname' => 'required|string|max:100',
        'lastname' => 'required|string|max:100'
      ]);

      Author::Create($request->all());

        return redirect()->route('author.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
