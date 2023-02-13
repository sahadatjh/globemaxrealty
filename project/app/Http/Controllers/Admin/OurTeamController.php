<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\OurTeam;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class OurTeamController extends Controller
{
    
    public function index()
    {
        $teamMembers = OurTeam::get();
        return view('admin.our-team.index')->with('teamMembers', $teamMembers);
    }

    
    public function create()
    {
        return view('admin.our-team.edit');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png',
        ]);
        $data = $request->all();
        if($request->file('image')){
            $coverPhoto = $request->image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/team-member-image/';
            $data['image'] = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );
        }
        $data['slug'] = Str::slug($data['name'].'-'.Str::random(5));
        $team_data = OurTeam::create($data);
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        $team = OurTeam::find($id);
        if($team){
            if($team->status ==1){
                $team->update([
                    'status' => 0,
                ]);
            }else{
                $team->update([
                    'status' => 1,
                ]);
            }
            return back()->with('message', 'Status Updated');
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function edit($id)
    {
        $team = OurTeam::find($id);
        if($team){
            return view('admin.our-team.edit')->with('team', $team);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            "image" => "nullable|mimes:jpeg,jpg,png",
            'name' => 'required',
            'description' => 'required',
        ]);
        $team = OurTeam::find($id);
        if($team){
            $data = $request->all();
            if($request->file('image')){
                if($team->image != ''  && $team->image != null){
                    $old_file = $team->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/team-member-image/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = $team->image;
            }
            $data['slug'] = Str::slug($data['name'].'-'.Str::random(5));
            $team->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/about-us/our-team')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $team = OurTeam::find($id);
        if($team){
            if($team->image != ''  && $team->image != null){
                $old_file = $team->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $team->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}

