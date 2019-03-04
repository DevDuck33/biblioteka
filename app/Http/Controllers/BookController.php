<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Type;
use App\Author;

class BookController extends Controller
{
  public function index()
  {

  }

  public function create()
  {
      $data['authors'] = Author::Get();
      $data['types'] = Type::Get();
      return view('book.create')->with('data', $data);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:100',
      'author_id' => 'required|integer',
      'type_id' => 'required|integer'
    ]);

    Book::Create($request->all());

      return redirect()->back();
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
      $book = Book::find($id);
      $book->delete();
      return back();
  }
}
