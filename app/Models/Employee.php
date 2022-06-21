<?php

namespace App\Models;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "employees";
    function department(){
=======
     function department(){
>>>>>>> 2e83b72f9b3135f249f8175c01938332d2f9bdc4
        // relationship between emplloyees and department
        return $this->belongsTo(Department::class);
    }

 function attendance(){
//    return $this->hasMany(Attendance::class);
     return $this->hasMany('App\Models\Attendance','employee_id','id');
}
}
