<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = []; //mass assignment
    
   protected $with= ['category', 'author'];
    
    //eloquent relationship...
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    //eloquent relationship...
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
