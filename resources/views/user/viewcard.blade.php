@extends('partials.layouts.usertablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">

    <div class="row pt-5">
    @foreach($cards as $card)
       <div class="col-md-4">
         <div class="card" style="width: 18rem;">
  <div class="card-body">
   <span><label>List Name: </label></span> <span  style="font-size: 20px">{{$card->list_name}}</span><br>
     <span><label>Card Name: </label></span> <span  style="font-size: 20px">{{$card->card_name}}</span><br>
     <span><label>Description: </label></span> <span  style="font-size: 20px">{{$card->description}}</span><br>
     <span><label>Progress: </label></span> <span  style="font-size: 20px">{{$card->progress}}</span><br>
    
<table>
  <tr>
    <td>@include('partials.Modal.editcard')</a></td>
    <td>@include('partials.Modal.deletecard')</td>
  </tr>
</table>
  </div>
</div>

       </div>
       @endforeach

    </div>
   

           
    </section>
</div>
 
@endsection