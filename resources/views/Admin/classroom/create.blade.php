@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('classroom.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Thêm Sinh Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mã Lớp Học</label>
                    <input type="text" class="form-control" name="ma_classroom" placeholder="MLH">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Lớp</label>
                    <input type="text" class="form-control" name="name_classroom" placeholder="Name">
                  </div>
                  
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Thêm</button>
  
                </div>
</div>
</form>
@stop