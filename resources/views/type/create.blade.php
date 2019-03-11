@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add-Type') }}</div>

          <div class="card-body">
          <form method="POST" action="{{ route('type.store') }}">
            {{ csrf_field() }}
              <div class="form-group">
                  <label>Type</label>
                  <input type="text" class="form-control" placeholder="Type" name="name">
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
