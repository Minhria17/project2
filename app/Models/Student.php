<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    static function index(){
        return DB::table('student')
        ->join('classroom','student.id_classroom','=','classroom.id_classroom')
        ->select('student.*', 'classroom.*')
        ->get();
    }

    static function store($MSV,$name,$gender,$birthday,$email,$phone,$id_classroom){
        return DB::table('student')
        ->insert(['MSV'=>$MSV,'name'=>$name,'gender'=>$gender,'birthday'=>$birthday,'email'=>$email,'phone'=>$phone,'id_classroom'=>$id_classroom]);
    }

    static function get($id_student){
        $student = DB::table('student')
        ->where('id_student','=',$id_student)
        ->get();
        if(count($student) == 1) return $student[0];
        else return NULL;
    }

    static function studentupdate($id_student,$MSV,$name,$gender,$birthday,$email,$phone,$id_classroom){
        return DB::table('student')
        ->where('id_student','=',$id_student)
        ->update(['MSV'=>$MSV,'name'=>$name,'gender'=>$gender,'birthday'=>$birthday,'email'=>$email,'phone'=>$phone,'id_classroom'=>$id_classroom]);
    }
    static function destroy($id_student)
    {
        return DB::table('student')->where('id_student','=',$id_student)->delete();
    }
}
