@extends('layout')
@section('title','Add Employee')
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
            <form method="post"  action="{{url('employee')}}"  enctype="multipart/form-data">
                @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Department</th>
                    <td>
                        <select name="depart" class="form-control">
                            <option value="">-- Select Department --</option>
                            @foreach($departments as $depart)
                                <option value="{{$depart->id}}">{{$depart->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>
                        <input type="text" name="full_name" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td>
                        <input type="file" name="photo" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Peroid</th>
                    <td>
                        <input type="text" name="period" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>
                        <input type="text" name="mobile" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        <input type="text" name="password" class="form-control">
                    </td>
                </tr>
                <tr> <tr>
                    <th>Job</th>
                    <td>
                        <input type="text" name="job" class="form-control">
                    </td>
                </tr>
                     <tr>
                    <th>Age</th>
                    <td>
                        <input type="text" name="age" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <input type="radio" name="status" value="1">Active
                        <br>
                        <input type="radio" name="status" checked="checked" value="0" >DeActive
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="submit" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
@endsection
