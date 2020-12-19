<?php

namespace App\Models\website;

use Illuminate\Support\Str;
use App\Models\website\PostMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['type'];
    public function setSlugAttribute($value)
    {
        //$this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function postmetas()
    {
        return $this->hasMany(PostMeta::class);
    }

    public function getMetaDetails($id,$key)
    {
        return PostMeta::where([['key',$key],['post_id',$id]])->pluck('value')->first();
    }

    public function getStatusCheckAttribute()
    {
        if ($this->status == 0) {
            return "Inactive";
        }
            return "Active";
    }
}
