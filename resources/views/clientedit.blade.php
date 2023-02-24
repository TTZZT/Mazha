@extends('layouts.app')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul> 
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ url('clientupdate', $clients->id) }}" enctype="multipart/form-data">
        @csrf
          
          <div class="form-group">
              <label for="image">image</label>
              <input type="file" class="form-control" name="image" value="{{ $clients->image }}"/>
              <img src="/uploads/{{$clients->image}}" alt="Current Image"width="50px">
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection