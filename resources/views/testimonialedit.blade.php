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
      <form method="post" action="{{ url('testimonialupdate', $testimonial->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Ownername</label>
              <input type="text" class="form-control" name="ownername" value="{{ $testimonial->ownername }}"/>
          </div>
          <div class="form-group">
              <label for="video">Video</label>
              <input type="file" class="form-control" name="video" value="{{ $testimonial->video }}"/>
              <iframe src="/uploads/{{$testimonial->video}}" alt="Current video"width="80px"></iframe>
          </div>
          <div class="form-group">
              <label for="url">Url</label>
              <input type="text" class="form-control" name="url" value="{{ $testimonial->url }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection