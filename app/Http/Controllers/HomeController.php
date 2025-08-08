<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // query builder
        // $categories = DB::table('categories')->get();

        $categories = Category::all();
        return view('home', ['categories' => $categories]);
    }
}
