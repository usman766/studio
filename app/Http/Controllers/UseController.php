<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminList;
use Illuminate\Support\Facades\DB;
use App\Card;
class UseController extends Controller
{
    

    public function home(){

    	return view('userhome');
    }

    public function addcard(){

         $adminlist=AdminList::all();
    	return view('user.addcard',compact('adminlist'));
    }

    public function insertcard(Request $request){

    //	return $request;

    	       $data=$request->validate([
               'list_id'=>'max:255|required',
               'card_name'=>'required|unique:cards',
               'description'=>'max:255|required',
               'progress'=>'required',
               ]);
    	       Card::create( $data);
               return redirect()->back()->with('status', 'Crad Added'); 


    }

    public function viewcard(){

                $cards= DB::table('admin_lists')
                ->Join('cards', 'admin_lists.id', '=', 'cards.list_id')
                ->get();
    	        return view('user.viewcard',compact('cards'));
    }

    public function deletecard($id){

                $deletecard=Card::find($id);
                $deletecard->delete();
                return redirect()->back();
    }


    public function addmodal(Request $request){


                $id=$request['id'];
                $card=Card::where('id',$id)->first();
                $card->card_name=$request['card_name'];
                $card->description=$request['description'];
                $card->save();
                return redirect()->back();
    }
}
