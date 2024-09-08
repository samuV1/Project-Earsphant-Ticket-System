<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function history(){
        return view('user_interfaces.history');
    }

    public function list_ticket_open(){
        return view('user_interfaces.list_ticket_open');
    }

    public function open_ticket(){
        return view('user_interfaces.open_ticket');
    }

    public function open_ticket_admin(){
        return view('admin_interfaces.open_ticket');
    }
}
