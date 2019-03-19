@extends('test.master_pages.master')
<title>create a course</title>

@section('content')

    <h3>Create a Course</h3>
    <form method="post" action="{{env('APP_URL')}}/courses/save">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$course->id}}">
        {{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        <div class="form-group">
            <label for="name">Name</label>
            <input required name="course_name" type="text" class="form-control"
                   id="name" aria-describedby="emailHelp" placeholder="Name"
                   value="{{$course->name}}">
        </div>

        <div class="form-group">
            <label for="code">Code</label>
            <input required name="code" type="text" class="form-control" id="code" aria-describedby="emailHelp" placeholder="Code" value="{{$course->code}}">
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="date" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description">{{$course->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection