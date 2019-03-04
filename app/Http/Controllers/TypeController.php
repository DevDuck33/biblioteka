<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
  public function index()
  {

  }

  public function create()
  {
      return view('type.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:100'
    ]);

    Type::Create($request->all());

      return redirect()->route('type.create');
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
