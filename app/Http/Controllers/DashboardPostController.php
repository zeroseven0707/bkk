<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index(){
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'nama_perusahaan' => 'required',
            'image' => 'image|file|max:1024',
            'alamat' => 'required',
            'no_hp' => 'required|max:13',
            'tgl' => 'required'

        ]);

        $slug = Str::random(10);
        $validatedData['user_id'] = auth()->user()->id;
        $image = $validatedData['image'] = $request->file('image')->store('loker');
            Post::create([
                    'slug'=>$slug,
                    'user_id'=>$validatedData['user_id'],
                    'nama_perusahaan'=>$validatedData['nama_perusahaan'],
                    'image'=>$validatedData['image'],
                    'alamat'=>$validatedData['alamat'],
                    'no_hp'=>$validatedData['no_hp'],
                    'tgl'=>$validatedData['tgl']
                ]);
            return redirect('/dashboard/posts')->with('success', 'Inputan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [

            
            'nama_perusahaan' => 'required',
            'image' => 'image|file|max:1024',
            'alamat' => 'required',
            'no_hp' => 'required|max:13',
            'tgl' => 'required'
            
        ];
    
        $validatedData = $request->validate($rules);
        $slug = Str::random(10);
        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('loker');
            Post::where('id', $post->id)->update([
                    'slug'=>$slug,
                    'user_id'=>$validatedData['user_id'],
                    'nama_perusahaan'=>$validatedData['nama_perusahaan'],
                    'image'=>$validatedData['image'],
                    'alamat'=>$validatedData['alamat'],
                    'no_hp'=>$validatedData['no_hp'],
                    'tgl'=>$validatedData['tgl']
                    
            ]); 
                }else{
                }
            
            Post::where('id', $post->id)->update($validatedData);
            
        return redirect('/dashboard/posts')->with('success', 'Inputan Berhasil Di Update!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
    
}