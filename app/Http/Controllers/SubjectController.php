<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Auth::guard('admin')->user();
        $subject = Subject::index();
        return view('admin.subject.index',['subject'=>$subject,'admin'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Auth::guard('admin')->user();
        return view('admin.subject.create',['admin'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $ma_subject = $request->input('ma_subject');
        $name_subject = $request->input('name_subject');
        $total_hours = $request->input('total_hours');
        $subject = Subject::store($ma_subject,$name_subject,$total_hours);

        if($subject == false){
            return "Insert thất bại";
        }
        else{
            return redirect('subject');
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
    public function edit($id_subject)
    {
        $users = Auth::guard('admin')->user();
        $subject = Subject::get($id_subject);
        if($subject == NULL){
            return "Không có subject có id_subject = ".$id_subject;
        }
        else return view('admin.subject.edit',['subject'=>$subject,'admin'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_subject)
    {
        $ma_subject = $request->input('ma_subject');
        $name_subject = $request->input('name_subject');
        $total_hours = $request->input('total_hours');
        $subject = Subject::subjectupdate($id_subject,$ma_subject,$name_subject,$total_hours);

        if($subject == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('subject');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_subject)
    {
        $subject = Subject::destroy($id_subject);
        if($subject == 0){
            return "Lỗi xoá";
        }
        else{
            return redirect('subject');
        }
    }
}
