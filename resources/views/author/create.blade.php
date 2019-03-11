@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add-Author') }}</div>

        <div class="card-body">
        <form method="POST" action="{{ route('author.store') }}">
          {{ csrf_field() }}

            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="firstname">
                <br>

                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
