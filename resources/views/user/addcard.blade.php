@extends('partials.layouts.usertablemaster')
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Card</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('insertcards')}}">
                @csrf
                <div class="card-body">
                       <div class="row">
                  <div class="form-group col-md-6">
                  <select class="form-control " name="list_id">
                    <option>Select#</option>


                   @foreach($adminlist as $admin)
                   <option value="{{$admin->id}}">{{$admin->list_name}}</option>
                    @endforeach
                  </select>
                    
                  </div>
                 
                 </div>
               <div class="row">
                  <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Card Name</label>
                   <input type="text" class="form-control" placeholder="Card Name" name="card_name">
              </div>
               <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Card Description</label>
                   <input type="text" class="form-control" placeholder="Card Description" name="description">
              </div>
               </div>
               <hr>
               <div class="row pl-4">
                  <div class="form-group col-md-6 ">
                
                   <input type="checkbox" class="form-check-input" name="progress" value="complete">
                   <label for="exampleInputPassword1">Complete</label>
              </div>
               <div class="form-group col-md-6 ">
                  
                   <input type="checkbox" class="form-check-input" name="progress" value="incomplete" >
                   <label for="exampleInputPassword1">In-Complete</label>
              </div>
               </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Card</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


 </section>
@endsection