<?php

namespace App\Models\student;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
