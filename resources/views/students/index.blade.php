@extends('test.master_pages.master')
<title>Students</title>
@section('content')
    <div class="row">
        <form method="get" action="{{env('APP_URL')}}/students">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">{{trans('students.students')}}</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th><input name="id" type="text" class="form-control" placeholder="#"
                               value="{{array_key_exists('id', $data) ? $data['id'] : ''}}"></th>
                    <th><input name="first_name" type="text" class="form-control" placeholder="First Name"
                               value="{{array_key_exists('first_name', $data) ? $data['first_name'] : ''}}"></th>
                    <th><input name="last_name" type="text" class="form-control" placeholder="Last Name"
                               value="{{array_key_exists('last_name', $data) ? $data['last_name'] : ''}}"></th>
                    <th><input name="reg_date" type="date" class="form-control" placeholder="Reg Date"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </form>
    </div>
@endsection

