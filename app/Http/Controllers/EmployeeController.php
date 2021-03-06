<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::orderBy('id','desc')->get();
        return view('employee.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Department::orderBy('id','desc')->get();
        return view('employee.create',['departments'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' =>'required',
            'period' =>'required',
            'photo' =>'required|image|mimes:jpeg,png,gif',
            'password' =>'required',
            'mobile' =>'required',
            'job' =>'required',
            'status' =>'required',
        ]);
        $photo = $request->file('photo');
        $renamePhoto = time().'.'.$photo->getClientOriginalExtension();
        $dest = public_path('/images');
        $photo->move($dest,$renamePhoto);

        $data = new Employee();
        $data->department_id=$request->depart;
        $data->full_name=$request->full_name;
        $data->period=$request->period;
        $data->photo=$request->photo;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->job=$request->job;
        $data->age=$request->age;
        $data->status=$request->status;
        $data->save();

        return redirect('employee/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Employee::find($id);
        return view('employee.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departs = Department::orderBy('id','desc')->get(); // to get deopartments
        $data = Employee::find($id);
        return view('employee.edit',['departs'=>$departs, 'data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' =>'required',
            'period' =>'required',
            'password' =>'required',
            'mobile' =>'required',
            'job' =>'required',
            'status' =>'required',
        ]);
//<<<<<<< HEAD
//        $data =  Employee::find($id);
//        $renamePhoto = '';
//=======
//        $data = Employee::find($id);
//        $renamePhoto = "";
//>>>>>>> 2e83b72f9b3135f249f8175c01938332d2f9bdc4
//
//        if($request->hasFile('photo')){
//            $photo = $request->file('photo');
//            $renamePhoto = time().'.'.$photo->getClientOriginalExtension();
//            $dest = public_path('/images');
//            $photo->move($dest,$renamePhoto);
//
//            $data->photo=$request->photo;
//        }
//
//        $data->department_id=$request->depart;
//        $data->full_name=$request->full_name;
//        $data->period=$request->period;
//        $data->photo=$renamePhoto;
//        $data->password=$request->password;
//        $data->mobile=$request->mobile;
//        $data->job=$request->job;
//        $data->age=$request->age;
//        $data->status=$request->status;
//        $data->save();

        return redirect('employee/'.$id.'/edit')->with('msg','Data has been submitted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect('employee')->with('msg','Data has been deleted');
    }
}
