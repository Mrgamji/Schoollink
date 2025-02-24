<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function storeupload(Request $request)
{
    if ($request->hasFile(key:'profile_picture')) {
        $file = $request->file('profile_picture');

        // Generate a unique filename
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Store the file in the 'public/profile-pics' directory
        $path = $file->storeAs('pics', $filename, 'public');

        // Create the profile after storing the file
        profile::create(
            [
                'name' => $request->name,
                'profile_picture' => $path,
            ]
        );

       return redirect()->route('profile.show');
    }
}

public function upload()
{
    return view('filetest');
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(profile $profile)
    {
        $data['profiles']=profile::all();
       return view('filetestshow',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        //
    }
}
