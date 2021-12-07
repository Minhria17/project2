@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('classroom.update',$classroom->id_classroom)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Sửa Thông Tin Sinh Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mã Lớp Học</label>
                    <input type="text" class="form-control" name="ma_classroom" placeholder="MLH" value="{{$classroom->ma_classroom}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Lớp</label>
                    <input type="text" class="form-control" name="name_classroom" placeholder="Name" value="{{$classroom->name_classroom}}">
                  </div>
                  
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Sửa</button>
  
                </div>
</div>
</form>
@stop