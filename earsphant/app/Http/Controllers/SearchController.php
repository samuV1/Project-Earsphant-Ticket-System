<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Active;
use App\Ticket;
use App\User;

class SearchController extends Controller
{

    //get views
    public function get_view_search_ticket(){
        return view('admin_interfaces.search_ticket');
    }

    public function get_view_search_user(){
        $users = collect(); // Cria uma coleção vazia para a view
        return view('admin_interfaces.search_user', compact('users'));
    }

    public function get_view_search_active(){
        return view('admin_interfaces.search_active');
    }

    // pesquisas
    public function search_user(Request $request)
    {
        // Validação opcional dos campos de entrada
        $request->validate([
            'name' => 'nullable|string|max:255',
            'sector_code' => 'nullable|string|max:255',
            'access_level' => 'nullable|string|in:user,admin',
            'login' => 'nullable|string|max:255',
        ]);

        // Construção da query com base nos parâmetros fornecidos
        $query = User::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('sector_code')) {
            $query->where('sector_code', 'like', '%' . $request->sector_code . '%');
        }

        if ($request->filled('access_level')) {
            $query->where('access_level', $request->access_level);
        }

        if ($request->filled('login')) {
            $query->where('login', 'like', '%' . $request->login . '%');
        }

        // Execução da query e obtenção dos resultados
        $users = $query->get();

        // Retorno da view com os resultados da busca
        return view('admin_interfaces.search_user', compact('users'));
    }
}
