<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class AssignSchoolToUser extends Model
{
    protected $guarded=[];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function school()
{
    return $this->belongsTo(School::class);
}
 
}
