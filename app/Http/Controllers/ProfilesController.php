<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.profile.index',[
            // 'profiles' => Profile::all()
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:1024',    
    ]);
    $request->file('image');
        $validatedData['image'] = $request->file('image')->store('profile-images');
        $validatedData['user_id'] = auth()->user()->id;
        Profile::create([
            'user_id'=>$validatedData['user_id'],
                'image'=>$validatedData['image'],
        ]);
    
 return redirect('/profile/profiles')->with('success', 'Inputan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view('dashboard.profile.show',[
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('dashboard.profile.edit', [
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'image' => 'image|file|max:1024',
        ];
        

        $validatedData = $request->validate($rules);  
        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profile-images');
            Profile::where('id',$profile->id)->update([
            
                'user_id'=>$validatedData['user_id'],
                'image'=>$validatedData['image']
            ]);
            
            }else{

            }
        Profile::where('id',$profile->id)->update($validatedData);
        return redirect('/profile/profiles')->with('success', 'Post has been update!');

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        if ($profile->image){
            Storage::delete($profile->image);
        }
        Profile::destroy($profile->id );
        return redirect('/profile/profiles')->with('success', 'dashboard has been deleted!');
    }
}
