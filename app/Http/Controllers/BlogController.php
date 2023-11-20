<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getIndex(){
        $blogs = Blog::orderBy('id', 'DESC')->simplePaginate(10);//simplePaginate returns array
        return view('blog', compact('blogs'));//blog.blade.php ( folder - resourses/veiws)
        // return view('blog',['blogs'->$blogs]); this raw does the same as previous one with compact

    }
    public function getOne(Blog $blog){
        return view('blog_one', compact('blog'));
    }
}
