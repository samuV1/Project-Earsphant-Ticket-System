<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login
Route::get('/', 'LoginController@login')->name('index');
Route::post('/', 'LoginController@autenticator')->name('index');

// Fallback
Route::fallback(function(){
    echo "A página que você que você digitou não existe!";
}); 


// user

Route::get('/user/home', 'LoginController@user_home')->name('user_home');

Route::get('/user/history', 'TicketController@history')->name('history');

Route::get('/user/open_ticket','TicketController@open_ticket')->name('open_ticket');

Route::get('/user/list_tickets_open', 'TicketController@list_tickets_open')->name('list_ticket');


// admin

Route::get('/admin/home', 'LoginController@admin_home')->name('admin_home');

/*Interface Adicionar Usuário*/ 
Route::get('/admin_interfaces/add_user', 'UserController@get_view')->name('add_user');
Route::post('/admin_interfaces/add_user', 'UserController@add_user_db')->name('add_user');
/*Interface Adicionar Usuário*/ 

/*Interface Adicionar Active*/ 
Route::get('/admin_interfaces/add_active', 'ActiveController@get_view')->name('add_active');
Route::post('/admin_interfaces/add_active', 'ActiveController@add_active_db')->name('add_active');
/*Interface Adicionar Active*/ 

/*Interface Adicionar Setor*/ 
Route::get('/admin_interfaces/add_sector', 'SectorController@get_view')->name('add_sector');
Route::post('/admin_interfaces/add_sector', 'SectorController@add_sector_db')->name('add_sector');
/*Interface Adicionar Setor*/ 

/*Interface Adicionar Serviço*/ 
Route::get('/admin_interfaces/add_service', 'ServiceController@get_view')->name('add_service');
Route::post('/admin_interfaces/add_service', 'ServiceController@add_service_db')->name('add_service');
/*Interface Adicionar Serviço*/ 

/*Interface Editar Usuário*/ 
Route::get('/admin_interfaces/edit_user/{id?}/{user?}', 'UserController@get_view_edit')->name('edit_user');
Route::post('/admin_interfaces/edit_user', 'UserController@edit_user_db')->name('edit_user');
/*Interface Editar Usuário*/ 

/*Interface Editar Active*/ 
Route::get('/admin_interfaces/edit_active', 'ActiveController@get_view_edit')->name('edit_active');
Route::post('/admin_interfaces/edit_active', 'ActiveController@edit_active_db')->name('edit_active');
/*Interface Editar Active*/ 

/*Interface Editar Setor*/ 
Route::get('/admin_interfaces/edit_sector', 'SectorController@get_view_edit')->name('edit_sector');
Route::post('/admin_interfaces/edit_sector', 'SectorController@edit_sector_db')->name('edit_sector');
/*Interface Editar Setor*/ 

Route::get('/admin_interfaces/search_user', 'SearchController@get_view_search_user')->name('search_user');
Route::get('/admin_interfaces/search_ticket', 'SearchController@get_view_search_ticket')->name('search_ticket');
Route::get('/admin_interfaces/search_active', 'SearchController@get_view_search_active')->name('search_active');

Route::post('/admin_interfaces/search_user', 'SearchController@search_user')->name('search_user');





Route::get('/admin/open_ticket','TicketController@open_ticket_admin')->name('open_ticket_admin');
