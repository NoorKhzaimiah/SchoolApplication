<?php
/**
 * Created by PhpStorm.
 * User: Ragheb
 * Date: 2019-02-27
 * Time: 1:01 PM
 */

namespace App\Http\Controllers;



use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class StudentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data = request()->all();
        $students = new Student();
        if(array_key_exists('id', $data) AND $data['id']){
            $students = $students->where('id', '=', $data['id']);
        }

        if(array_key_exists('first_name', $data) AND $data['first_name']){
            $students = $students->where('first_name', 'like', '%'.$data['first_name'].'%');
        }

        if(array_key_exists('last_name', $data) AND $data['last_name']){
            $students = $students->where('last_name', 'like', '%'.$data['last_name'].'%');
        }

        $students = $students->get();
        return view('students.index', ['students'=>$students, 'data'=>$data]);

//        dd($students);
//        return "hello index 11" ;
//        $cities = City::get();
//        return view('students.index', ['message'=>'Index page', 'cities'=>$cities]);
    }

    public function info($id){
        return "received id: $id";
    }

    public function create(){
        $courses = Course::all();
        return view('students.create', ['courses'=>$courses]);
    }

    public function save(Request $request){
        $data = $request->all();
        $student = new Student();
        $student->first_name = $data['first_name'];
        $student->last_name = $data['last_name'];
        $student->birth_day = $data['birth_day'];

        $student->save();

        $student->courses()->attach($data['courses']);
        return "Done Successfully :D ";
    }

    public function view(student $studentInstance){
        return view('student.view', ['student'=>$studentInstance]);
    }

}

