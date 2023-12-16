<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.home.index',[
            "dashboards" => Dashboard::latest()->paginate(10)
            // 'dashboards' => Dashboard::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        
    ]);

   
        $request->file('image');
        $validatedData['image'] = $request->file('image')->store('dashboard-images');
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 70);
        $validatedData['id'] = auth();
        Dashboard::create([
                
                'id'=>$validatedData['id'],
                'nama'=>$validatedData['nama'],
                'image'=>$validatedData['image'],
                'excerpt'=>$validatedData['excerpt'],
                'body'=>$validatedData['body']

        ]);
    
 return redirect('/dashboard/dashboards')->with('success', 'Inputan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        return view('dashboard.home.show',[
            'dashboard' => $dashboard
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        return view('dashboard.home.edit', [
            'dashboard' => $dashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {   
        $rules = [
            'nama' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        

        $validatedData = $request->validate($rules);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 70);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('dashboard-images');
            Dashboard::where('id',$dashboard->id)->update([
                'nama'=>$validatedData['nama'],
                'body'=>$validatedData['body'],
                'excerpt'=>$validatedData['excerpt'],
                'image'=>$validatedData['image']
            ]);
            
            }else{
            }
        Dashboard::where('id',$dashboard->id)->update($validatedData);
        return redirect('/dashboard/dashboards')->with('success', 'Postingan Berhasil di Update!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        if ($dashboard->image){
            Storage::delete($dashboard->image);
        }
        Dashboard::destroy($dashboard->id );
        return redirect('/dashboard/dashboards')->with('success', 'Postingan Dashboard Telah Di Hapus!');
    }
    
}


