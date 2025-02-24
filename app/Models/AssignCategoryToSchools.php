<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignCategoryToSchools extends Model
{
    protected $guarded=[];
    public function school()
    {
        return $this->hasMany(School::class, 'id');
    }
}
