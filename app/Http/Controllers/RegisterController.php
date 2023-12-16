<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[

            'title' => 'Register',
            'active' => 'register'

        ]);
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'nisn' => 'required|max:255',
            'alumni' => 'required|max:255',
            'nohp' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|unique:users',
            'password' => 'required|min:3|max:255'

        ]);
        
            // $validateData['password'] = bycrypt($validateData['password']);

          $password =  $validateData['password'] = Hash::make($validateData['password']);
          $image = $validatedData['image'] = $request->file('image')->store('profile');

        User::create([
            'name'=>$validateData['name'],
            'image'=>$image,
            'nisn'=>$validateData['nisn'],
            'alumni'=>$validateData['alumni'],
            'nohp'=>$validateData['nohp'],
            'username'=>$validateData['username'],
            'email'=>$validateData['email'],
            'password'=>$password,
        ]);

        // $request->session()->flash('success','Registration succesfull! please login');
        
        return redirect('/')->with('success','Registration Berhasil, Silahkan Login!');
    }
}
