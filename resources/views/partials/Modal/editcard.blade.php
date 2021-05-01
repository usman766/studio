
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default-{{$card->id}}">
                  Edit
</button>

<div class="modal fade" id="modal-default-{{$card->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary ">
              <h4 class="modal-title ">Edit Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <form method="post" action="{{route('addmodals')}}" >
                  @csrf
                  <div class="row">
                    <input type="hidden" name="id" value="{{$card->id}}">
                  <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Card Name</label>
                   <input type="text" class="form-control" placeholder="Card Name" name="card_name" value="{{$card->card_name}}">
              </div>
               <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Card Description</label>
                   <input type="text" class="form-control" placeholder="Card Description" name="description" value="{{$card->description}}">
              </div>
               </div>
               <hr>
              
                  
                 <button class="btn btn-primary mt-3">Submit</button>
               
              </form>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>