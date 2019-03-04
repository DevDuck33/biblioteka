@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('author.store') }}">
  {{ csrf_field() }}
  <div class="container">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="firstname">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="lastname">

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</form>
@endsection
