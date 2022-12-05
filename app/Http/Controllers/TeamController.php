<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\TeamStoreRequest;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
        $team = Team::latest()->get();
		return view('team.index',compact('team'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('team.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(TeamStoreRequest $request)
	{
		$attributes = self::attributes($type = 'save');
		$attributes->save();
		return redirect()->back()->with('message', 'Team added successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Team  $team
	 * @return \Illuminate\Http\Response
	 */
	public function show(Team $team)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Team  $team
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Team $team)
	{
		return view('team.edit', compact('team'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Team  $team
	 * @return \Illuminate\Http\Response
	 */
	public function update($team,Request $request)
	{
		$team = Team::findOrFail($team);
        if($request->hasFile('image')){
            $image_path = public_path('assets/img/team/').$team->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }        
		$attributes = self::attributes();
		$team->update($attributes);
		return redirect()->back()->with('message', 'Record Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Team  $team
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Team $team)
	{
        $image_path = public_path('assets/img/team/').$team->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
		$team->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}

	/**
	 * @param bool $type
	 * @return Team
	 */
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new Team();
		}
		$attributes['name'] = request('name');
		$attributes['designation'] = request('designation');
		$attributes['facebook'] = request('facebook');
		$attributes['twitter'] = request('twitter');
		$attributes['instagram'] = request('instagram');
		$attributes['linkedin'] = request('linkedin');
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/assets/img//team/', $filename);
			$attributes['image'] = trim($filename);
		}
		return $attributes;
	}
}
