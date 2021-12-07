<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;
    static function index(){
        return DB::table('teacher')
        ->get();
    }

    static function store($name_teacher,$gender,$birthday,$email,$phone){
        return DB::table('teacher')
        ->insert(['name_teacher'=>$name_teacher,'gender'=>$gender,'birthday'=>$birthday,'email'=>$email,'phone'=>$phone]);
    }

    static function get($id_teacher){
        $teacher = DB::table('teacher')
        ->where('id_teacher','=',$id_teacher)
        ->get();
        if(count($teacher) == 1) return $teacher[0];
        else return NULL;
    }

    static function teacherupdate($id_teacher,$name_teacher,$gender,$birthday,$email,$phone){
        return DB::table('teacher')
        ->where('id_teacher','=',$id_teacher)
        ->update(['name_teacher'=>$name_teacher,'gender'=>$gender,'birthday'=>$birthday,'email'=>$email,'phone'=>$phone]);
    }
    static function destroy($id_teacher)
    {
        return DB::table('teacher')->where('id_teacher','=',$id_teacher)->delete();
    }
}
