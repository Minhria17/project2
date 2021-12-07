<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Studytime extends Model
{
    use HasFactory;
    
    protected $table = "studytime";
    static function index(){
        return DB::table('studytime')
        ->get();
    }

    static function store($studytime){
        return DB::table('studytime')
        ->insert(['studytime'=>$studytime]);
    }     

    static function get($id_studytime){
        $studytime = DB::table('studytime')
        ->where('id_studytime','=',$id_studytime)
        ->get();
        if(count($studytime) == 1) return $studytime[0];
        else return NULL;
    }

    static function studytimeupdate($id_studytime,$studytime){
        return DB::table('studytime')
        ->where('id_studytime','=',$id_studytime)
        ->update(['studytime'=>$studytime]);
    }
    static function destroy($id_studytime)
    {
        return DB::table('studytime')->where('id_studytime','=',$id_studytime)->delete();
    }
}
