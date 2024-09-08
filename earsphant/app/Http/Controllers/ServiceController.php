<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function get_view(){
        return view('admin_interfaces.add_service');
    }

    public function add_service_db(Request $request){
        
        $service = new Service();
        $service->create($request->all());
    }     

    public function get_view_edit(){
        return view('admin_interfaces.edit_service');
    }
}
