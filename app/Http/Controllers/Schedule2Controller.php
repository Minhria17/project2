<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Models\Schedule;
use App\Models\Studytime;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class Schedule2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::index();
        return view('user.schedule.index',['schedule'=>$schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $teacher = Teacher::index();
        $subject = Subject::index();
        $classroom = classroom::index();
        $studytime = Studytime::index();
        $data = ['teacher'=>$teacher,'subject'=>$subject,'classroom'=>$classroom,'studytime'=>$studytime,'admin'=>$users];
        return view('admin.schedule.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_teacher = $request->input('id_teacher');
        $id_subject = $request->input('id_subject');
        $id_classroom = $request->input('id_classroom');
        $id_studytime = $request->input('id_studytime');

        $schedule = Schedule::store($id_teacher,$id_subject,$id_classroom,$id_studytime);

        if($schedule == false){
            return "Insert thất bại";
        }
        else{
            return redirect('schedule');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_schedule)
    {
        $schedule = Schedule::get($id_schedule);
        $teacher = Teacher::index();
        $subject = Subject::index();
        $classroom = classroom::index();
        $studytime = Studytime::index();
        $data = ['schedule'=>$schedule,'teacher'=>$teacher,'subject'=>$subject,'classroom'=>$classroom,'studytime'=>$studytime,'admin'=>$users];
        if($schedule == NULL){
            return "Không có schedule có id_schedule = ".$id_schedule;
        }
        else return view('admin.schedule.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_schedule)
    {
        
        $id_teacher = $request->input('id_teacher');
        $id_subject = $request->input('id_subject');
        $id_classroom = $request->input('id_classroom');
        $id_studytime = $request->input('id_studytime');

        $schedule = Schedule::scheduleupdate($id_schedule,$id_teacher,$id_subject,$id_classroom,$id_studytime);

        if($schedule == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('schedule');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_schedule)
    {
        $schedule = Schedule::destroy($id_schedule);
        if($schedule == 0){
            return "Lỗi xoá";
        }
        else{
            return redirect('schedule');
        }
    }
}
