<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $allPosts = Post::all();
        // $post = Post::find(1);
        $post = new Post;
        $post->title ='bài viết 3';
        $post->content ="Nội dung 3";
        $post->status = 1; 
        
    }
}
