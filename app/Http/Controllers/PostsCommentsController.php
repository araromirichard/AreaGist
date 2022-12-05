<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsCommentsController extends Controller
{
    //
    
    public function store(Post $post)
    {
       //validate the request
       request()->validate([
        'body' => 'required'
       ]);
       
         //create a new comment 
         $post->comments()->create([
              'user_id' => auth()->id(),
              'body' => request('body')
            ]);
            
            return back();
       
    }
}
