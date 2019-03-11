<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Type;
use App\Author;

class PageController extends Controller
{
    public function home()
    {
      $data['books'] = Book::All();
      $data['authors'] = Author::All();
      $data['types'] = Type::All();
      return view('index')->with('data', $data);
    }

    public function search(Request $request)
    {
      $searchauthor = $request->get('author_id');
      $searchtype = $request->get('type_id');
      
      if($searchauthor && $searchtype)
      $data['books'] = Book::where('author_id',$searchauthor)->where('type_id',$searchtype)->get();

      elseif($searchauthor){
      $data['books'] = Book::where('author_id',$searchauthor)->get();}

      elseif ($searchtype) {
        $data['books'] = Book::where('type_id',$searchtype)->get();}
      $data['authors'] = Author::All();
      $data['types'] = Type::All();
      return view('index')->with('data', $data);
    }

    public function searchtype(Request $request)
    {
      $search = $request->get('type_id');
      $data['books'] = Book::where('type_id',$search)->get();
      $data['authors'] = Author::All();
      $data['types'] = Type::All();
      return view('index')->with('data', $data);
    }

    public function userPanel()
    {
        return view('user.user');
    }
}
