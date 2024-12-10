<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'name','slug'
    ];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function members(){
        return $this->belongsToMany(User::class);
    }
}
