@extends('layout')
@section('title','Update Employee')
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
            <form method="post"  action="{{url('employee',$data->id)}}"  enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Department</th>
                        <td>
                            <select name="depart" class="form-control">
                                <option value="">-- Select Department --</option>
                                @foreach($departs as $depart)
                                    <option @if($depart->id==$data->department_id) selected @endif value="{{$depart->id}}">{{$depart->title}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td>
                            <input type="text" value="{{$data->full_name}}" name="full_name" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <input type="file" name="photo" class="form-control">
                            <p>
                                <img src="{{asset('public/images/'. $data->photo)}}" width="200" />
                                <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>Peroid</th>
                        <td>
                            <input type="text" value="{{$data->period}}" name="period" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>
                            <input type="text" value="{{$data->mobile}}" name="mobile" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>
                            <input type="text" value="{{$data->password}}" name="password" class="form-control">
                        </td>
                    </tr>
                    <tr> <tr>
                        <th>Job</th>
                        <td>
                            <input type="text" value="{{$data->job}}" name="job" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>
                            <input type="text" value="{{$data->age}}" name="age" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <input  @if($data->status==1) checked @endif type="radio" name="status" value="1">Active
                            <br>
                            <input @if($data->status==0) checked @endif type="radio" name="status"  value="0" >DeActive
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
