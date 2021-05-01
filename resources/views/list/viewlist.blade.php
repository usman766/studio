@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Progress List</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('checkdetails')}}" method="post">
                @csrf
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Salect List Name</label>
                    <select class="form-control" name="list_id">
                    <option>Select#</option>


                   @foreach($adminlist as $admin)
                   <option value="{{$admin->id}}">{{$admin->list_name}}</option>
                    @endforeach
                  </select>

                  </div>
                  
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Patient History</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2q" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>No</th>
                    <th>List Name</th>
                    <th>Card Name </th>
                     <th>Description</th>
                    <th>Progress</th>
                  </tr>
                  </thead>                 
                  <tbody>

             @foreach($detail as $key => $del)
                     <tr>
                     <td>{{++$key}}</td>
                     <td>{{App\AdminList::where('id',$del->list_id)->first()->list_name}}</td>
                      <td>{{$del->card_name}}</td>
                      <td>{{$del->description}}</td>
                      <td class="bg-primary">{{$del->progress}}</td>


  
                  </tr>
                
@endforeach


                   


                  </tbody>
                 


                </table>
              </div>
              <!-- /.card-body -->
                </div>
            </div>
            </div>
            </div>


           
    </section>
</div>
 
@endsection