@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Thêm Giáo Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên GV</label>
                    <input type="text" class="form-control" name="name_teacher" placeholder="Tên GV">
                  </div>
                  <label for="exampleInputEmail1">Giới tính</label>
                  <div class="form-check">
                  <select class="form-select" aria-label="Default select example" id="gender" name="gender">
  <option selected disabled>-Chọn giới tính-</option>
  <option value="Nam">Nam</option>
  <option value="Nữ">Nữ</option>
</select>
</div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Sinh</label>
                    <input type="date" class="form-control" name="birthday" placeholder="Ngày sinh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email add">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="SĐT">
                  </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Thêm</button>
  
                </div>
</div>
</form>
@stop