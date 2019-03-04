@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('type.store') }}">
  {{ csrf_field() }}
  <div class="container">
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" placeholder="Type" name="name">

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</form>
@endsection
