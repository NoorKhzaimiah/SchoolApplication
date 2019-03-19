<?php
/**
 * Created by PhpStorm.
 * User: Ragheb
 * Date: 2019-03-07
 * Time: 10:11 AM
 */

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * listing courses
     */
    public function index(){
        $data = request()->all();
        $courses = new Course();
        if(array_key_exists('id', $data) AND $data['id']){
            $courses = $courses->where('id', '=', $data['id']);
        }

        if(array_key_exists('name', $data) AND $data['name']){
            $courses = $courses->where('name', 'like', '%'.$data['name'].'%');
        }

        if(array_key_exists('code', $data) AND $data['code']){
            $courses = $courses->where('code', 'like', '%'.$data['code'].'%');
        }

        $courses = $courses->get();
        return view('courses.index', ['courses'=>$courses, 'data'=>$data]);



    }

    /**
     * @param Course $courseInstance = Course::find($id)
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Course $id){
        
        return view('courses.view', ['course'=>$id]);
    }

    public function create($id = null){
        $course = null;
        if($id){
            $course = Course::find($id);
        }

        if(!$course){
            $course = new Course();
        }

        return view('courses.create', ['course'=>$course]);
    }

    public function save(Request $request){
        $data = $request->all();
        $course = null;
        if($data['id']){
            $course = Course::find($data['id']);
        }else{
            $course = new Course();
        }

        $course->name = $data['course_name'];
        $course->code = $data['code'];
        $course->description = $data['description'];
        $course->save();
        return redirect()->route('courses-index');
    }

    public function update(){

    }

    public function delete($id){

        $result = Course::where('id', '=', $id)->delete();


    }
}