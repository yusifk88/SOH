<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class adminController extends Controller
{
    public function index(){

        $blogs = Blog::paginate(10);

        return view('dashboard',['blogs'=>$blogs]);

    }


    public function newblog(){

        return view('blog.create');

    }


    public function storeblog(Request $request){

        $request->validate(['title'=>'required','body'=>'required']);
        $slug = Str::slug($request->title).'_'.Carbon::now()->timestamp;
        $featured_image_url = $request->hasFile('featured_image') ?
            Storage::url($request->file('featured_image')->store('public/blog_images')):\url('/').'/public/images/placeholder.png';

        $newblog = new Blog([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>$request->user()->id,
            'slug'=>$slug,
            'featured_image_url'=>$featured_image_url
        ]);

        $newblog->save();
        return redirect()->back();

    }

    public function destroyblog($id){

        $blog = Blog::find($id);

        if ($blog){

            $blog->delete();

        }

        return redirect()->route('dashboard');

    }




}
