@extends('test.master_pages.master')
<title>Courses</title>
@section('content')
    <div class="row">
        <form method="get" action="{{env('APP_URL')}}/courses">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">{{trans('courses')}}</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input name="id" type="text" class="form-control" placeholder="#"
                                   value="{{array_key_exists('id', $data) ? $data['id'] : ''}}"></th>
                        <th><input name="name" type="text" class="form-control" placeholder=" Name"
                                   value="{{array_key_exists('name', $data) ? $data['name'] : ''}}"></th>
                        <th><input name="code" type="text" class="form-control" placeholder=" Code"
                                   value="{{array_key_exists('code', $data) ? $data['code'] : ''}}"></th>
                        <th><input name="reg_date" type="date" class="form-control" placeholder="Reg Date"></th>

                        <th>
                            Actions 
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->code}}</td>
                            <td>{{$course->created_at}}</td>
                            <td>
                                <a href="{{route('course-info', ['id' => $course -> id ]) }}" class="btn btn-primary">View Course </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
@endsection

