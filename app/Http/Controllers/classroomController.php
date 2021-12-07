<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class classroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Auth::guard('admin')->user();
        $classroom = Classroom::index();
        return view('admin.classroom.index',['classroom'=>$classroom,'admin'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Auth::guard('admin')->user();
        return view('admin.classroom.create',['admin'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ma_classroom = $request->input('ma_classroom');
        $name_classroom = $request->input('name_classroom');
        $classroom = Classroom::store($ma_classroom,$name_classroom);

        if($classroom == false){
            return "Insert thất bại";
        }
        else{
            return redirect('classroom');
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
    public function edit($id_classroom)
    {
        $users = Auth::guard('admin')->user();
        $classroom = Classroom::get($id_classroom);
        if($classroom == NULL){
            return "Không có classroom có id_classroom = ".$id_classroom;
        }
        else return view('admin.classroom.edit',['classroom'=>$classroom,'admin'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_classroom)
    {
        $ma_classroom = $request->input('ma_classroom');
        $name_classroom = $request->input('name_classroom');
        $classroom = Classroom::classroomupdate($id_classroom,$ma_classroom,$name_classroom);

        if($classroom == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('classroom');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_classroom)
    {
        $classroom = classroom::destroy($id_classroom);
        if($classroom == 0){
            return "Lỗi xoá";
        }
        else{
            return redirect('classroom');
        }
    }
}
