<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector;

class SectorController extends Controller
{
    public function get_view(){
        return view('admin_interfaces.add_sector');
    }

    public function add_sector_db(Request $request){
        
        $sector = new Sector();
        $sector->create($request->all());
    }     

    public function get_view_edit(){
        return view('admin_interfaces.edit_sector');
    }
}
