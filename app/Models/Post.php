<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','slug','user_id','active'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->slugify($value);
    }
    private function slugify($title){
        $slug = Str::slug($title);
        $count = Post::whereSlug($slug)->count();
        $countTotal = $count? $count+1:'';
        $slug .= $countTotal;
        return $slug;
    }

}
