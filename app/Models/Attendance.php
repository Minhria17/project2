<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    use HasFactory;
    protected $table = "attendance";
    protected $fillable = [
        'id_subject',
        'id_classroom',
        'id_studytime',
        'id_student',
        'status',
    ];
    static function index(){
        return DB::table('attendance')
        ->get();
    }
}
