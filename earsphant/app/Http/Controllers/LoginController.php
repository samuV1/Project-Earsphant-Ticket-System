<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\User;

class LoginController extends Controller
{
    public function login() {
        return view('index');
    }

    public function autenticator(Request $request) {

        // Regras de validação
        $validation = [
            'user' => 'required',
            'password' => 'required',
            'level_access' => 'required'
        ];

        // Mensagem de erro
        $feedback = [
            'user.required' => 'Usuário incorreto',
            'password.required' => 'Senha incorreta'
        ];

        $request->validate($validation, $feedback);

        $login = $request->get('user');
        $password = $request->get('password');
        $level_access = $request->get('level_access');

        $user = new User();

        $verification = $user->where('login', $login)->where('password', $password)->get()->first();

        if(isset($verification->name)){
            if($level_access == 'admin'){
                return redirect()->route('admin_home');
            } else {
                return redirect()->route('user_home');
            }
        } else {
            return redirect()->route('index');
        }

    }

    public function user_home(){
        return view('user_interfaces.home');
    }

    public function admin_home(){
        return view('admin_interfaces.home');
    }
}
