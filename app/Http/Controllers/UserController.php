<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Post;

class UserController extends Controller
{

public function blog(){
  $posts = Post::all();
    return view('blog',compact('posts'));
}

public function edit_post($id) {
    $post = Post::findOrFail($id);
    return view('edit_post', compact('post'));
}
public function update(Request $request, $id) {
    $post = Post::findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];

    if ($request->file('image')) {
        // Delete previous image if exists
        if ($post->image) {
            Storage::delete('uploads/' . $post->image);
        }
        
        $file = $request->file('image');
        $uniqueName = uniqid().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('uploads', $uniqueName);
        $post->image = $uniqueName;
    }

    $post->save();

    return redirect()->route('dashboard')->with('success', 'Post updated successfully!');

}








  public function index(){
    $posts = Post::with('user')->latest()->get();
    return view('dashboard',compact('posts'));
  }

public function store(Request $request){
    // Validate the incoming data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file type and size restrictions as needed
    ]);

    // Create a new post instance
    $post = new Post;
    $post->author_id = auth()->user()->id;
    $post->author_name = auth()->user()->name;
    $post->authortype = "admin";
    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];

    if($request->file('image')){
        $file = $request->file('image');
        $uniqueName = uniqid().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('uploads', $uniqueName);
        $post->image = $uniqueName;  
    }

    $post->save();
    return redirect()->back()->with('success', 'Post created successfully!');
}


  public function delete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
