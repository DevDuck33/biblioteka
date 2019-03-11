@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add-Book') }}</div>

        <div class="card-body">
        <form method="POST" action="{{ route('book.store') }}">
          {{ csrf_field() }}

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
                <br>

                <label>Author</label>
                <select class="form-control" name="author_id">
                  @foreach ($data['authors'] as $author)
                    <option value="{{$author->id}}">{{$author->firstname}} {{$author->lastname}}</option>
                  @endforeach
                </select>
                <br>

                <label>Type</label>
                <select class="form-control" name="type_id">
                  @foreach ($data['types'] as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                  @endforeach
                </select>
                <br><br>

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
