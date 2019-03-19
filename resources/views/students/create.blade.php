@extends('test.master_pages.master')
<title>Create Student</title>
@section('content')
    <h3>Create Student</h3>
<form method="post" action="{{env('APP_URL')}}/students/save">
    {{csrf_field()}}
{{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="First Name">
    </div>

    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input name="last_name" type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Last Name">
    </div>


    <div class="form-group">
        <label for="birth_day">Birth Day</label>
        <input name="birth_day" type="date" class="form-control" id="birth_day" aria-describedby="emailHelp" placeholder="Birth Day">
    </div>

    <div class="form-group">
        <label for="courses">Courses</label>
        <select multiple name="courses[]" class="from-control">
            @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection