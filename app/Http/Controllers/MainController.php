<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Movie;

class MainController extends Controller
{
    public function index(){
        $movies=Movie::all();
        return view('index/movie_info',compact('movies'));
    }
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function show_movie_info($request){
        $movie_info=Movie::find($request);
        return view('movie.movie_info',compact('movie_info'));
    }
}
