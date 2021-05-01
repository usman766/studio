@extends('partials.layouts.datatablemaster')
@section('content')
<section class="content-wrapper">
      <div class="container-fluid">
     
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
                @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add List</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('insertlists')}}">
                @csrf
                <div class="card-body">
                       
                  <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">List Name</label>
                    <input type="text" class="form-control"  placeholder="List Name" name="list_name">
                  </div>
                 
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create List</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


 </section>
@endsection