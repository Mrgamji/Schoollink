<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $guarded=[];
    public function assignedUsers()
{
    return $this->hasMany(AssignSchoolToUser::class);
}

public function users()
{
    return $this->hasManyThrough(User::class, AssignSchoolToUser::class, 'school_id', 'id', 'id', 'user_id');
}
public function alumnus()
{
    return $this->hasMany(Alumnus::class);
}
}
