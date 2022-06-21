@extends('layout')
@section('title','All Attendance')
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Attendance
            <a href="{{url('attendance/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif

            @if(Session::has('msg'))
                <p class="text-success">{{session('msg')}}</p>
            @endif
            <table id="datatablesSimple"  class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Employee</th>
                    <th>InTime</th>
                    <th>outTime</th>
                    <th>date</th>
                    <th>day</th>
                    <th>location</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Employee</th>
                    <th>InTime</th>
                    <th>outTime</th>
                    <th>date</th>
                    <th>day</th>
                    <th>location</th>
                </tr>
                </tfoot>
                <tbody>
                @if($data)
                    @foreach($data as $d)
                <tr>
                    <td>{{$d ->id}}</td>
                    <td>{{$d-> employee->full_name}}</td>
                    <td>{{$d ->inTime}}</td>
                    <td>{{$d ->outTime}}</td>
                    <td>{{$d ->date}}</td>
                    <td>{{$d ->day}}</td>
{{--                    <td>{{$d ->location}}</td>--}}
                    <td><button><a href="#" /> </button></td>
                </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('public')}}/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>
@endsection
