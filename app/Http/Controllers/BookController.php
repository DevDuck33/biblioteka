<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Type;
use App\Author;

class BookController extends Controller
{

  public function create()
  {
      $data['authors'] = Author::All();
      $data['types'] = Type::All();
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
      $data['book'] = Book::find($id);
      $data['authors'] = Author::All();
      $data['types'] = Type::All();
      return view('book.edit',compact('data'))->with('data', $data);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|string|max:100',
      'author_id' => 'required|integer',
      'type_id' => 'required|integer'
    ]);

    $book = Book::find($id);
    $book->title = $request->get('title');
    $book->author_id = $request->get('author_id');
    $book->type_id = $request->get('type_id');
    $book->save();

    return redirect('/')->with('success', 'Book has been updated');
  }

  public function destroy($id)
  {
      $book = Book::find($id);
      $book->delete();
      return back();
  }
}
