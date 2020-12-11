<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable = ['firstname','lastname','email','subject','description'];
    public function getReplyStatusAttribute()
    {
        if($this->status=='0'){
            return route('enquiry.reply',$this->id);
        }
    }
}
