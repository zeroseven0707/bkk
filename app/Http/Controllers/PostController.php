<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index()
    {      
         return view ('posts',[
            "posts" => Post::latest()->paginate(5)

        ]);  
    }

    function cari(Request $req){
        $post['posts'] = Post::where('nama_perusahaan','like','%' . request('cari').'%')
        ->orWhere('tgl','like','%' . request('cari').'%')
        ->orWhere('alamat','like' ,'%' . request('cari').'%')
        ->orWhere('no_hp','like','%' . request('cari').'%')->get();
        return view('postscari',$post);
        
    }
    public function show(Post $post)
    {
        return view('showpost',[
            'post' => $post
        ]);
    }
    
               
    
    

            
// ('nama_pic',$req->cari)
//         ->orWhere('nama_costemer',$req->cari)->orWhere('tgl',$req->cari)
// $post['posts'] = Post::where('nama_pic','like','%' . request('cari').'%')
//         ->orWhere('tgl','like','%' . request('cari').'%')
//         ->orWhere ('petugasan_id','like' ,'%' . request('cari').'%')
//         ->orWhere('nama_costemer','like','%' . request('cari').'%')->get();
//         return view('postscari',$post);












    // $ticket = '';

        // if(request('category')){
        //     $category = Category::firstWhere('slug', request('category'));
        //     $ticket = 'in' . $category->name;
        // }

        // if(request('author')){
        //     $author = User::firstWhere('username', request('author'));
        //     $ticket = 'By' . $author->name;
        // }
        // if(request('perbaikan')){
        //     $perbaikan = Perbaikan::firstWhere('slug', request('perbaikan'));
        //     $ticket = 'in' . $perbaikan->name;
        //  }
        // if(request('petugasan')){
        //     $petugasan = petugasan::firstWhere('slug', request('petugasan'));
        //     $ticket = 'in' . $petugasan->name;
        //  }

           // "posts" =>  Post::latest()->filter(request(['search','category','author','perbaikan','petugasan']))
            //        ->withQueryString()






    // public function show(Post $post)
    // {
    //     return view('post',[
    //         "ticket" => "Singgle post",
    //         "active" => 'posts',
    //         "post" => $post
        
    //     ]);
    // }
   
}
