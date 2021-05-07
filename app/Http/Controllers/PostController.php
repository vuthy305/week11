<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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
    public function edit($id){
        $category = Category::all();
        $data = Post::findOrFail($id);
        if($data){
            return view('posts.edit',['data'=>$data,'category'=>$category]);
        }
        else{
            return [404];
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required|unique:posts',
                'description'=>'required',
                'category'=>'required',
                'user_email'=>'required'
            ]
        );
 
        $post = Post::findorFail($id);

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
    public function delete($id){
        $data = Post::find($id);
        if($data){
            return view('posts.delete',['data'=>$data]);
        }
        else{
            return ['404'];
        }
    }
    public function destroy($id){
        $result = Post::destroy($id);
        if($result){
            return redirect(route('post'));
        }
        else{
            return ['404'];
        }
    }
}
