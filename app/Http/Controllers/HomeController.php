<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // query builder
        // $categories = DB::table('categories')->get();

        $categories = Category::all();
        // $posts = Post::orderby('id','desc')->get();
        // $posts = Post::latest()->get();
        $posts = Post::when(request('category_id'), function ($query){
        $query->where('category_id', request('category_id'));
    })->latest()->get();

        // return view('home', ['categories' => $categories , 'posts' => $posts]);
        return view('home' , compact('categories' , 'posts'));
    }
}
