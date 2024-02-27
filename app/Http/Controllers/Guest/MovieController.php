<?php
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //dd($movies);
        return view('movies.index',compact('movies'));
    }
    public function show($id){
        $movie = Movie::where('id',$id)->first();
        return view('movies.show',compact('movie'));
    }
}