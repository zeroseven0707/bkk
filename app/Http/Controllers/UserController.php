<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Perbaikan;
use App\Models\area;
use App\Models\Petugasan;

class UserController extends Controller
{
    public function index()
    {     
    
        return view ('user',[
            "users" => User::latest()->paginate(10)
            // "users" => User::all()
         ]); 
    }

    function cari(Request $req){
        $user['users'] = User::where('name','like','%' . request('cari').'%')
        ->orWhere('created_at','like','%' . request('cari').'%')
        ->orWhere('username','like','%' . request('cari').'%')
        ->orWhere('email','like','%' . request('cari').'%')->get();;
        return view('usercari',$user);
    }

}
