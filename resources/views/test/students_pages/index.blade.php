@extends('test.master_pages.master')
<title>Students</title>
@section('content')
    <h3>Welcome to students index page</h3>
    <ul>
        @foreach($all_students as $std)
            <li>{{$std->first_name}}</li>
        @endforeach
    </ul>
@endsection