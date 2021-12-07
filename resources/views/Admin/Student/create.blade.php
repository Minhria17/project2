@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Thêm Sinh Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MSV</label>
                    <input type="text" class="form-control" name="MSV" placeholder="MGV">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ten SV</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
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
                  <div class="form-group">
                  <label>Lớp</label>
                  <select class="form-control" name="id_classroom">
                    <option value="" selected disabled>-Chọn lớp-</option>
                      @foreach ($classroom as $classroom)
                          <option value="{{$classroom->id_classroom}}">{{$classroom->name_classroom}}</option>
                      @endforeach
                  </select>
                </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Thêm</button>
  
                </div>
</div>
</form>
@stop