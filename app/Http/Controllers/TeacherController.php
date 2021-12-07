<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teacher = Teacher::index();
        $users = Auth::guard('admin')->user();
        return view('admin.teacher.index',['admin'=>$users,'teacher'=>$teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Auth::guard('admin')->user();
        return view('admin.teacher.create',['admin'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name_teacher = $request->input('name_teacher');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $teacher = Teacher::store($name_teacher,$gender,$birthday,$email,$phone);

        if($teacher == false){
            return "Insert thất bại";
        }
        else{
            return redirect('teacher');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_teacher)
    {
        $users = Auth::guard('admin')->user();
        $teacher = Teacher::get($id_teacher);
        if($teacher == NULL){
            return "Không có teacher có id_teacher = ".$id_teacher;
        }
        else return view('admin.teacher.edit',['teacher'=>$teacher,'admin'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_teacher)
    {
        
        $name_teacher = $request->input('name_teacher');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $teacher = Teacher::teacherupdate($id_teacher,$name_teacher,$gender,$birthday,$email,$phone);

        if($teacher == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('teacher');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_teacher)
    {
        $teacher = Teacher::destroy($id_teacher);
        if($teacher == 0){
            return redirect('teacher');
        }
        else{
            return redirect('teacher'); 
        }
    }
}
