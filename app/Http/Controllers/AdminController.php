<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Card;
use App\AdminList;
class AdminController extends Controller
{
  


public function addlist(){

             return view('list.addlist');

}

public function insertlist(Request $request){

            	$id = Auth::id();
	            $data=$request->validate([
               'list_name'=>'max:255|required',		   
               ]);	

                $list = new  AdminList($data);
                $list->user_id=$id;
                $list->save(); 
                return redirect()->back()->with('status', 'List Added'); 

}

public function viewlist(){
    

               $adminlist=AdminList::all();
               $detail=[];
               return view('list.viewlist',compact('adminlist','detail'));
          	
}

    public function checkdetail(Request $request){


              $list_id=$request['list_id'];
              $adminlist=AdminList::all();
              $detail=Card::where('list_id',$list_id)->get();
              return view('list.viewlist',compact('detail','adminlist'));
    }



}
