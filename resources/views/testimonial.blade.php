@extends('layouts.app')
@section('content')
<style>
    .push-top {
      margin-top: 50px;
    }
  </style>
<div class="push-top">
   
<div class="wrapper">
  <div class="page-content-wrapper">

      <div class="container-fluid">

         
              <div class="col-sm-12">
                  <div class="page-title-box">
                      <div class="float-right">
                          <div class="dropdown">
                              
                             
                          </div>
                      </div>
                      <h4 class="page-title">Form Validation</h4>
                  </div>
              </div>
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
              <div class="col-md-12">
                  <div class="card m-b-30">
                      <div class="card-body">

                          <h4 class="mt-0 header-title">Validation type</h4>
                          @if(session()->get('success'))
                          <div class="alert alert-success">
                            {{ session()->get('success') }}  
                          </div>
                        @endif

                          <form method="post" action="{{ url('testimonialstore') }}" enctype="multipart/form-data">
                            @csrf
                         
                              <div class="form-group">
                                  <label>URL</label>
                                  <div>
                                      <input parsley-type="url" type="url" class="form-control"
                                              required placeholder="URL" name="url"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Video</label>
                                  <div>
                                      <input data-parsley-type="file" type="file"
                                              class="form-control" required name="video"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>OwnerNamer</label>
                                  <div>
                                      <input data-parsley-type="ownername" type="text"
                                              class="form-control" required
                                              placeholder="Enter owner name" name="ownername"/>
                                  </div>
                              </div>
                              
                              <div class="form-group mb-0">
                                  <div>
                                      <button type="submit" class="btn btn-secondary waves-effect waves-light">
                                          Submit
                                      </button>
                                      <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                          Cancel
                                      </button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>
             

                  
                </div>

      </div><!-- container -->

  </div> <!-- Page content Wrapper -->
  </div>
</div>

@endsection