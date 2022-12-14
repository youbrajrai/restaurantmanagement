<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\AboutStoreRequest;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$about_us = AboutUs::latest()->get();
		return view('about.index', compact('about_us'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
        $data = array(
            'title' => $request->title,
            'content' => $request->content,
            'is_current' => $request->is_current
        );
        $create = AboutUs::create($data);
		return redirect()->back()->with('message', 'About us added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        $teams = Team::latest()->get();
        $about = AboutUs::latest()->get();
        return view('about',compact('about','teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {   
        
        $about = AboutUs::findOrFail($id);
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = AboutUs::find($id);
        $data = array(
            'title'=> $request->title,
            'is_current' => $request->is_current,
            'content' => $request->content,
        );
        $create = AboutUs::where('id',$id)->update($data);
        
        return redirect()->back()->with('message', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
		AboutUs::findOrFail($id)->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
    }
}
