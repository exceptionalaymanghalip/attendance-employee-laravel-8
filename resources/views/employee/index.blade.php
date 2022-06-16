@extends('layout')
@section('title','All Departments')
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Employees
            <a href="{{url('employee/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
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
                    <th>#</th>
                    <th>Department</th>
                    <th>Full Name</th>
                    <th>photo</th>
                    <th>period</th>
                    <th>mobile</th>
                    <th>password</th>
                    <th>job</th>
                    <th>age</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Department</th>
                    <th>Full Name</th>
                    <th>photo</th>
                    <th>period</th>
                    <th>mobile</th>
                    <th>password</th>
                    <th>job</th>
                    <th>age</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                @if($data)
                    @foreach($data as $d)
                <tr>
                    <td>{{$d ->id}}</td>
                    <td>{{$d-> department -> title}}</td>
                    <td>{{$d ->full_name}}</td>
                    <td><img src="{{asset('public/images/'. $d->photo)}}" width="80" /></td>
                    <td>{{$d ->period}}</td>
                    <td>{{$d ->mobile}}</td>
                    <td>{{$d ->password}}</td>
                    <td>{{$d ->job}}</td>
                    <td>{{$d ->age}}</td>
                    <td>{{$d ->status}}</td>
                    <td>
                        <a href="{{url('employee/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                        <a href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                        <a onclick="return confirm('Are You Sure To Delete THis Data??')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
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
