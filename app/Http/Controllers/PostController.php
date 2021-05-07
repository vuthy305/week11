<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'title'=>'required|unique:posts',
                'description'=>'required',
                'category'=>'required',
                'user_email'=>'required'
            ]
        );
        $posts = new Post;
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->category = $request->category;
        $posts->user_email = $request->user_email;
        $posts->save();

        return redirect(route('post'));
    }
    public function edit(Post $post){
        $this->authorize('update', $post);

        $category = Category::all();
        $data = Post::findOrFail($post->id);
        if($data){
            return view('posts.edit',['data'=>$data,'category'=>$category]);
        }
        else{
            return [404];
        }
    }
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $request->validate(
            [
                'title'=>'required|unique:posts',
                'description'=>'required',
                'category'=>'required',
                'user_email'=>'required'
            ]
        );
 
        $post = Post::findorFail($post->id);

        if($post){
            $post->title = $request->title;
            $post->description = $request->description;
            $post->category = $request->category;
            $post->user_email = $request->user_email;
            $result = $post->save();
            if($result){
                return redirect(route('post'));
            }
            else{
                return [404];
            }
        }
        else{
            return [404];
        }
    }
    public function delete(Post $post){
        $this->authorize('delete', $post);
        $data = Post::find($post->id);
        if($data){
            return view('posts.delete',['data'=>$data]);
        }
        else{
            return ['404'];
        }
    }
    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $result = Post::destroy($post->id);
        if($result){
            return redirect(route('post'));
        }
        else{
            return ['404'];
        }
    }
}
