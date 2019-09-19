<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $guarded = [];
    /*
        or protected $fillable = [
        'title', 'description'
    ];
    */

    public function tasks(){

        return $this->hasMany(Task::class);
    }
}
