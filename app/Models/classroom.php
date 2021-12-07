<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class classroom extends Model
{
    use HasFactory;
    protected $table = "classroom";
    static function index(){
        return DB::table('classroom')
        ->get();
    }

    static function store($ma_classroom,$name_classroom){
        return DB::table('classroom')
        ->insert(['ma_classroom'=>$ma_classroom,'name_classroom'=>$name_classroom]);
    }

    static function get($id_classroom){
        $classroom = DB::table('classroom')
        ->where('id_classroom','=',$id_classroom)
        ->get();
        if(count($classroom) == 1) return $classroom[0];
        else return NULL;
    }

    static function classroomupdate($id_classroom,$ma_classroom,$name_classroom){
        return DB::table('classroom')
        ->where('id_classroom','=',$id_classroom)
        ->update(['ma_classroom'=>$ma_classroom,'name_classroom'=>$name_classroom]);
    }
    static function destroy($id_classroom)
    {
        return DB::table('classroom')->where('id_classroom','=',$id_classroom)->delete();
    }
}
