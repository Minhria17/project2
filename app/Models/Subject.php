<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subject";
    static function index(){
        return DB::table('subject')
        ->get();
    }

    static function store($ma_subject,$name_subject,$total_hours){
        return DB::table('subject')
        ->insert(['ma_subject'=>$ma_subject,'name_subject'=>$name_subject,'total_hours'=>$total_hours]);
    }

    static function get($id_subject){
        $subject = DB::table('subject')
        ->where('id_subject','=',$id_subject)
        ->get();
        if(count($subject) == 1) return $subject[0];
        else return NULL;
    }

    static function subjectupdate($id_subject,$ma_subject,$name_subject,$total_hours){
        return DB::table('subject')
        ->where('id_subject','=',$id_subject)
        ->update(['ma_subject'=>$ma_subject,'name_subject'=>$name_subject,'total_hours'=>$total_hours]);
    }
    static function destroy($id_subject)
    {
        return DB::table('subject')->where('id_subject','=',$id_subject)->delete();
    }
}
