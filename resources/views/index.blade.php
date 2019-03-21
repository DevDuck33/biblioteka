@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="GET" action="{{ route('page.search') }}">
            <div class="form-group">
                <label>Search Author</label>
                <select class="form-control" name="author_id">
                  <option disabled selected value> -- select an option -- </option>
                  @foreach ($data['authors'] as $author)
                    <option value="{{$author->id}}">{{$author->firstname}} {{$author->lastname}}</option>
                  @endforeach
                </select>

                <label>Search Type</label>
                <select class="form-control" name="type_id">
                  <option disabled selected value> -- select an option -- </option>
                  @foreach ($data['types'] as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                  @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

      <div class="row">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Type</th>
              @if(Auth::check())
                @if(Auth::user()->admin)
                <th scope="col">Action</th>
                @endif
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach($data['books'] as $book)
              <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->firstname }} {{ $book->author->lastname }}</td>
                <td>{{ $book->type->name }}</td>
                @if(Auth::check())
                  @if(Auth::user()->admin)
                  <td>
                    <div class="row">
                      <div class="col-2">
                        <form method="POST" action="{{ route('book.destroy', $book->id) }}">
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button class="btn btn-danger">Delete</button>
                        </form>
                      </div>
                      <div class="col">
                        <form method="GET" action="{{ route('book.edit', $book->id) }}">
                            <button class="btn btn-primary">Edit</button>
                        </form>
                      </div>
                    </div>
                  </td>
                  @endif
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
