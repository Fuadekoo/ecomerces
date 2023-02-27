<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use RealRashid\SweetAlert\Facades\Alert;

class admincontroller extends Controller
{
    //this code is used to view the catagory page
    public function view_catagory(){
        return view('admin.catagory');
    }

    //this is used for add catagory values 
    public function add_catagory(Request $req){
      $data= new catagory;
      $data->catagory_name = $req->catagory;
      $data->save();
      Alert::success('productadded successfully','we added the product into catagory cart');
      return redirect()->back(); 
    }
}
