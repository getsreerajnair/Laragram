<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : '/profile/BEd4htfi4BllF9hJVS6eCqUA8AK5OkAOXXl4ADcB.jpeg';
        return '/storage/' .$imagePath;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
