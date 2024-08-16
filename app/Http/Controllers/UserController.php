<?php

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class UserController extends Controller{


      
     public function createContacts(){
     return view('create');
     }  


       public function allContacts(Request $request){

          return view("index");
    }

    public function showForms(){
         return view('show');
    }

    public function showSpecificContacts(Request $request){
       $result = $request->get('id')->getAll();
        return $result;
    }

    public function editForm(Request $request){
        if ($request->id() = ('id')){
            return view('edit');
}

    }


    public function updateContact(Request $request, $id){
        if ($request->id() = ('id')){
    
        return 'updated';
    }
}


public function deleteContact(Request $request){
    if ($request->id() = ('id')){
    
        return 'deleted';
    }

}




}

