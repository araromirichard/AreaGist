<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    
  
    
    // eloquent relationship for a post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    // eloquent relationship for a author
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
