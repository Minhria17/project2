<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\classroom;
use App\Models\Student;
use App\Models\Studytime;
use App\Models\Subject;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendance');
    }

    public function checkIn() {
        $subjects = Subject::index();
        $classroom = Classroom::index();
        $studytime = Studytime::index();
        $student = Student::index();
        return view('User.attendance',['classroom' => $classroom,'studytime'=>$studytime,'subjects'=>$subjects]);
    }
 
    public function postCheckIn(Request $request) {
        $id_subject = $request->id_subject;
        $id_classroom = $request->id_classroom;
        $type= $request->type;
        $id_studytime = $request->id_studytime;
        
        foreach ($request->type as $id_student => $status) {
            $data = [
                'id_subject' =>$id_subject,
                'id_classroom' =>$id_classroom,
                'id_studytime' =>$id_studytime,
                'id_student' => $id_student,    
                'status' => $status
            ];
            //dd($data);
            Attendance::create($data);
        }
        //return Attendance::index()->toArray();
        return redirect()->back()->with(compact('id_classroom','type'));
    }

    public function getUserByClass(Request $request, $id_classroom) {
        // dd($request->all());
        $student = Student::where('id_classroom',$id_classroom)->get();
        return $student->toJson();
    }
}
