<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogHead;
use App\Models\Blog;
use App\Models\Intro;

class BlogController extends Controller
{
  public function index () {
    $blogHead = BlogHead::firstOrFail();
    $blogs = Blog::paginate(4);
    $intro = Intro::firstOrFail();

    return view('front.blog.index', ['blogHead' => $blogHead, 'blogs' => $blogs, 'intro' => $intro]);
  }

  public function getBlog($id) {
    $blog = Blog::findOrFail($id);

    return view('front.blog.detail', ['blog' => $blog]);
  }
}
