<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        return view('welcome');
    }
    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }



    public function blog(){

        $blogs = Blog::orderBy('id','desc')->paginate(10);
        return view('blog.index',['blogs'=>$blogs]);

    }

    public function viewblog($slug){

        $blog = Blog::where('slug',$slug)->get()->first();

        $recent_blogs = Blog::where('id','<>',$blog->id)->orderBy('created_at','desc')->get();

        return view('blog.view',['blog'=>$blog,'recent'=>$recent_blogs]);


    }



    public function search(){

        $keyword = isset($_GET['q']) ? $_GET['q'] : null;

        $search = Blog::where('title','LIKE',"%{$keyword}%")->get();

        $data['keyword']=$keyword;
        $data['results']=$search;

        return view('search',$data);


    }




}
