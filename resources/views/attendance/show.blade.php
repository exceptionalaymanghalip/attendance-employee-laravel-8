@extends('layout')
@section('title','Show Employee')
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create New Department
            <a href="{{url('employee')}}" class="float-end btn btn-sm btn-success" >View All</a>
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
            <form method="post"  action="{{url('employee/.$data->id')}}"  enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Department</th>
                        <td>
                          {{$data->department->title}}
                        </td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td>
                            {{$data->full_name}}
                        </td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            {{$data->photo}}
                        </td>
                    </tr>
                    <tr>
                        <th>Peroid</th>
                        <td>
                            {{$data->period}}
                        </td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>
                            {{$data->mobile}}
                        </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>
                            {{$data->password}}
                        </td>
                    </tr>
                    <tr> <tr>
                        <th>Job</th>
                        <td>
                            {{$data->job}}
                        </td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>
                            {{$data->age}}
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data->status==1) Activated @else DeActivated @endif
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>
@endsection
