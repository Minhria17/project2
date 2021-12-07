<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Schedule extends Model
{
    use HasFactory;
    static function index(){
        return DB::table('schedule')
        ->join('teacher','schedule.id_teacher','=','teacher.id_teacher')
        ->join('subject','schedule.id_subject','=','subject.id_subject')
        ->join('classroom','schedule.id_classroom','=','classroom.id_classroom')
        ->join('studytime','schedule.id_studytime','=','studytime.id_studytime')
        ->select('schedule.*' , 'teacher.*' , 'subject.*'  , 'classroom.*' , 'studytime.*')
        ->get();
    }

    static function store($id_teacher,$id_subject,$id_classroom,$id_studytime){
        return DB::table('schedule')
        ->insert([
            'id_teacher'=>$id_teacher,
            'id_subject'=>$id_subject,
            'id_classroom'=>$id_classroom,
            'id_studytime'=>$id_studytime
        ]);
    }

    static function get($id_schedule){
        $schedule = DB::table('schedule')
        ->where('id_schedule','=',$id_schedule)
        ->get();
        if(count($schedule) == 1) return $schedule[0];
        else return NULL;
    }

    static function scheduleupdate($id_schedule,$id_teacher,$id_subject,$id_classroom,$id_studytime){
        return DB::table('schedule')
        ->where('id_schedule','=',$id_schedule)
        ->update([
            'id_teacher'=>$id_teacher,
            'id_subject'=>$id_subject,
            'id_classroom'=>$id_classroom,
            'id_studytime'=>$id_studytime
        ]);
    }

    static function destroy($id_schedule)
    {
        return DB::table('schedule')->where('id_schedule','=',$id_schedule)->delete();
    }

}
