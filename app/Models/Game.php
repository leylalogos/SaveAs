<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'plays');
    }

    public function plays()
    {
        return $this->hasMany(Play::class);
    }

    public function getTotalPlayCountAttribute()
    {
        return $this->users()->count();
    }
    public function getUniqueUsersAttribute()
    {
        return $this->plays()->groupBy('user_id')->get()->count();
    }
}
