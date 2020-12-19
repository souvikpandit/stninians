<?php

namespace App\Models\website;

use App\Models\website\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostMeta extends Model
{
    use HasFactory;
    protected $fillable = ['post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
