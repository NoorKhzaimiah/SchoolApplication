@extends('test.master_pages.master')
<title>Course information </title>
@section('content')
    <form>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="name" value="{{$course->name}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Code</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="code" value="{{$course->code}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="Description" readonly class="form-control-plaintext" id="description" value="{{$course->description}}">
            </div>
        </div>
        <a class="btn btn-outline-primary" href="{{env('APP_URL')}}/courses/update/{{$course->id}}" role="button">Update</a>
        <a class="btn btn-outline-danger" href="{{env('APP_URL')}}/courses/{{$course->id}}/delete" role="button">Delete</a>

    </form>
@endsection