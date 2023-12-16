<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;


class ProfileTampilanController extends Controller
{
    public function index()
    {
        return view('profile',[
            "users" => User::all()
        ]);

    }
   
   
   
   
    // public function index()
    // {
    //     $profiles = Profile::latest();

    //     if (request('search')) {
    //         $profiles->where('nama','like','%' . request('search').'%')
    //         ->orWhere('created_at','like','%' . request('search').'%')
    //         ->orWhere('nohp','like','%' . request('search').'%');
    //     }
    //     return view('profile',[
    //         "profiles"=> $profiles->get()
    //     ]);

    // }
        // if(request('author')){
        //     $author = User::firstWhere('username', request('author'));
        // }


        // return view ('profile',[
        //     "profiles" => Profile::latest()->filter(request(['search','author']))->withQueryString()

        // ]); 
    
    
    
    // public function index()
    // {      
    //     return view ('profile',[
    //         "profiles" => Profile::all()
    //      ]); 
    // }
    function cari(Request $req){
        $user['users'] = User::where('name','like','%' . request('cari').'%')
        ->orWhere('created_at','like','%' . request('cari').'%')
        ->orWhere('username','like','%' . request('cari').'%')
        ->orWhere('email','like','%' . request('cari').'%')->get();;
        return view('usercari',$user);
    }
    public function show($id)
    {
        $data['user'] = User::where('id',$id)->first();
        return view('profileshow',$data);
    }
    public function update(Request $request, $id)
    {
        if ($request->image) {
            User::where('id',$id)->update([
                'image'=>$request->file('image')->store('profile'),
                'name'=>$request->name,
                'info'=>$request->info,
                'nohp'=>$request->nohp,
            ]);
        }else{
            User::where('id',$id)->update([
                'name'=>$request->name,
                'info'=>$request->info,
                'nohp'=>$request->nohp,
            ]);
        }
        return back();
    }
}
