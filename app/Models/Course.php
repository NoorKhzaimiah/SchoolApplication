<?php
/**
 * Created by PhpStorm.
 * User: Ragheb
 * Date: 2019-03-07
 * Time: 9:56 AM
 */

namespace App\Models;


 use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use SoftDeletes;

    protected $table = "courses";
//    public $timestamps = false;
//    public $primaryKey = "code";

    public function students(){
        return $this->belongsToMany('App\Models\Student', 'courses_students',
            'course_id', 'student_id');
    }
}