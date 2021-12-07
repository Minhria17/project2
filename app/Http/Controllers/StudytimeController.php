<?php

namespace App\Http\Controllers;

use App\Models\Studytime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudytimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Auth::guard('admin')->user();
        $studytime = Studytime::index();
        return view('admin.studytime.index',['studytime'=>$studytime,'admin'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Auth::guard('admin')->user();
        return view('admin.studytime.create',['admin'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studytime = $request->input('studytime');
        $studytime = Studytime::store($studytime);

        if($studytime == false){
            return "Insert thất bại";
        }
        else{
            return redirect('studytime');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_studytime)
    {
        $users = Auth::guard('admin')->user();
        $studytime = Studytime::get($id_studytime);
        if($studytime == NULL){
            return "Không có studytime có id_studytime = ".$id_studytime;
        }
        else return view('admin.studytime.edit',['studytime'=>$studytime,'admin'=>$users]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_studytime)
    {
        $studytime = $request->input('studytime');
        $studytime = Studytime::studytimeupdate($id_studytime,$studytime);

        if($studytime == 0){
            return "Lỗi cập nhật";
        }
        else{
            return redirect('studytime');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_studytime)
    {
        $studytime = Studytime::destroy($id_studytime);
        if($studytime == 0){
            return "Lỗi xoá";
        }
        else{
            return redirect('studytime');
        }
    }
}
