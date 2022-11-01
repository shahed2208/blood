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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', EmployeeController::class)
;
Route::get('user2', function () {
    return view('user2');
}); 

route::get('post/create',[postcontroller::class,'insert']);
class postcontroller extends controller 
{
    public function insert (request $request)
    {
        
    }
};