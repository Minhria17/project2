<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        
        $classroom = Classroom::index();
        $users = Auth::guard('admin')->user();
        $student1=DB::table('student')
                    ->join('classroom','student.id_classroom','=','classroom.id_classroom');
        
        $class=$request->Lop !=null ? $request->Lop:'';
        if($class != null){
            $student1->where('student.id_classroom',$class);
        }
        
        $student=$student1->select('student.*', 'classroom.*')->get();
        // dd($student);
        return view('admin.student.index',['admin' => $users,'student'=>$student,'classroom'=>$classroom,'class'=>$request->Lop]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Auth::guard('admin')->user();
        $classroom = classroom::index();
        return view('admin.student.create',['admin' => $users,'classroom'=>$classroom]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $MSV = $request->input('MSV');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $id_classroom = $request->input('id_classroom');

        $student = Student::store($MSV,$name,$gender,$birthday,$email,$phone,$id_classroom);

        if($student == false){
            return "Insert thất bại";
        }
        else{
            return redirect('student');
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
    public function edit($id_student)
    {
        $users = Auth::guard('admin')->user();

        $student = Student::get($id_student);
        $classroom = Classroom::index();
        $data = ['admin' => $users,'student'=>$student,'classroom'=>$classroom];
        if($student == NULL){
            return "Không có student có id_student = ".$id_student;
        }
        else return view('admin.student.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_student)
    {
        
        $MSV = $request->input('MSV');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $id_classroom = $request->input('id_classroom');

        $student = Student::studentupdate($id_student,$MSV,$name,$gender,$birthday,$email,$phone,$id_classroom);

        if($student == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('student');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_student)
    {
        $student = Student::destroy($id_student);
        if($student == 0){
            return "Lỗi xoá";
        }
        else{
            return redirect('student');
        }
    }
}
