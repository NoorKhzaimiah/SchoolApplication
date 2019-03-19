<?php
/**
 * Created by PhpStorm.
 * User: Ragheb
 * Date: 2019-03-06
 * Time: 11:18 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
//    public $primaryKey = "id";
//    public $timestamps = false;


    public function courses(){
        return $this->belongsToMany('App\Models\Course', 'courses_students',
            'student_id', 'course_id');
    }
}

