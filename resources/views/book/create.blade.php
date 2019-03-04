@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('book.store') }}">
  {{ csrf_field() }}
  <div class="container">
    <div class="form-group">
        <label>Book</label>
        <input type="text" class="form-control" placeholder="Title" name="title">
        <br><br>
        <select class="form-control" name="author_id">
          @foreach ($data['authors'] as $author)
            <option value={{$author->id}}>{{$author->firstname}} {{$author->lastname}}</option>
          @endforeach
        </select>
        <br><br>
        <select class="form-control" name="type_id">
          @foreach ($data['types'] as $type)
            <option value={{$type->id}}>{{$type->name}}</option>
          @endforeach
        </select>
        <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</form>
@endsection
