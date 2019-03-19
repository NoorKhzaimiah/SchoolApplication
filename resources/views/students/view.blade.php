@extends('test.master_pages.master')
<title>Student information </title>
@section('content')
    <form>
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">first name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="name" value="{{$student->first_name}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="code" value="{{$student->last_name}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="birth_day" class="col-sm-2 col-form-label">Birth day</label>
            <div class="col-sm-10">
                <input type="date" readonly class="form-control-plaintext" id="birth_day" value="{{$student->birth_day}}">
            </div>
        </div>
        <a class="btn btn-outline-primary" href="{{env('APP_URL')}}/student/update/{{$student->id}}" role="button">Update</a>
        <a class="btn btn-outline-danger" href="{{env('APP_URL')}}/student/{{$student->id}}/delete" role="button">Delete</a>

    </form>
@endsection