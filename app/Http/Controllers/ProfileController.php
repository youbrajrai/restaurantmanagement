<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use File;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('auth.user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,user $profile)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($profile)],
        ]);
        
        if (request('avatar')) {
            $image_path = public_path('assets/img/profile/').$profile->avatar;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }                    
            $file = request()->file('avatar');
            $name = $file->getClientOriginalName();
            $filename = time() . '.' . trim($name);
            $file->move(public_path() . '/assets/img/profile/', $filename);
            $attributes['avatar'] = $filename;
        }
        $profile->update($attributes);
        return redirect()->back()->with('message', 'Profile updated.');
        // $id = $profile->id;
        // $user = User::find($id);
        // $data = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        // );
        
        // if($request->hasFile('avatar')){
        //     $image = $request->file('avatar');
        //     $name = $image->getClientOriginalName();
        //     $filename = time() . '.' . trim($name);
        //     $image->move(public_path('assets/img/profile/'),$filename);            
        //     $data['avatar'] = $filename;
        // }
        // $create = User::where('id',$id)->update($data);        
        
        return redirect()->back()->with('message', 'Profile updated successfully.') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
