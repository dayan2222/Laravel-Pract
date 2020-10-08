<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function user()
    {
        # code...
        return $this->belongsTo(User::class); // Select * from  user where project_id = id
    }

}

// hasOne
// hasmany
// belongsTo
// belongsToMany