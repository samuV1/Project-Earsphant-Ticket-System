<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Active;

class ActiveController extends Controller
{

    public function get_view(){
        return view('admin_interfaces.add_active');
    }

    public function add_active_db(Request $request){
        
        $active = new Active();
        $active->create($request->all());
        
    }

    public function get_view_edit(){
        return view('admin_interfaces.edit_active');
    }
}
