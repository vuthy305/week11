<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function category()
    {
        $category = Category::all();
        return view('categories.category',['category'=>$category]);
    }
    public function post()
    {
        $posts = Post::paginate(10);
        return view('posts.post',['posts'=>$posts]);
    }
    public function create()
    {
        $category = Category::all();
        return view('posts.create',['category'=>$category]);
    }
}
