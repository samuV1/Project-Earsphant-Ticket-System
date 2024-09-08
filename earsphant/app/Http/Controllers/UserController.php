<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function get_view(){
        return view('admin_interfaces.add_user');
    }

    public function add_user_db(Request $request){
        
        $user = new User();
        $user->create($request->all());

        echo 'Feito!';
    }

    public function get_view_edit(){
        return view('admin_interfaces.edit_user');
    }

    public function edit_user($id){
        // Recupera o usuário pelo ID
        $user = User::findOrFail($id);

        // Passa o usuário para a view
        return view('edit_user', compact('user'));
    }
}
