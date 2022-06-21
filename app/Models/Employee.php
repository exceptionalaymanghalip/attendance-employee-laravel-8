<?php

namespace App\Models;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

//    protected $table = "employees";
//    function department(){
//=======
     function department(){
        // relationship between emplloyees and department
        return $this->belongsTo(Department::class);
    }

 function attendance(){
//    return $this->hasMany(Attendance::class);
     return $this->hasMany('App\Models\Attendance','employee_id','id');
}
}
