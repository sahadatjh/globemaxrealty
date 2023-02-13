<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::get();
        return view('admin.post.index')->with('posts', $posts);
    }

    
    public function create()
    {
        return view('admin.post.edit');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png',
        ]);
        $data = $request->all();
        if($request->file('image')){
            $coverPhoto = $request->image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/post-image/';
            $data['image'] = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );
        }
        $data['slug'] = Str::slug($data['title'].'-'.Str::random(5));
        $post_data = Post::create($data);
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        $product = Post::find($id);
        if($product){
            if($product->status ==1){
                $product->update([
                    'status' => 0,
                ]);
            }else{
                $product->update([
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
        $post = Post::find($id);
        if($post){
            return view('admin.post.edit')->with('post', $post);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            "image" => "nullable|mimes:jpeg,jpg,png",
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = Post::find($id);
        if($post){
            $data = $request->all();
            if($request->file('image')){
                if($post->image != ''  && $post->image != null){
                    $old_file = $post->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/post-image/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = $post->image;
            }
            $data['slug'] = $post->slug;
            $post->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/post')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post){
            if($post->image != ''  && $post->image != null){
                $old_file = $post->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $post->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}
