<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller {
    public function index(){
        //$value = session('email');
        $value = Auth::id();
        $users = DB::select('select * from users where id='.$value);
        return view('dashboard',['users'=>$users]);
    }
}
