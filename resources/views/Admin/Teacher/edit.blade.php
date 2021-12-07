@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('teacher.update',$teacher->id_teacher)}}" method="POST" >
  @method('PUT')
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Sửa Thông Tin Giáo Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input  type="number" class="form-control" readonly name="id_teacher" value="{{$teacher->id_teacher}}"  placeholder="ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên GV</label>
                    <input type="text" class="form-control" name="name_teacher" value="{{$teacher->name_teacher}}"  placeholder="Tên GV">
                  </div>
                  <label for="exampleInputEmail1">Giới tính</label>
                  <div class="form-check">
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="Nam"{{ $teacher->gender =="Nam" ? 'selected' : '' }}>Nam</option>
                                        <option value="Nữ" {{ $teacher->gender =="Nữ" ? 'selected' : '' }}>Nữ</option>
                                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Sinh</label>
                    <input type="date" class="form-control" name="birthday" value="{{$teacher->birthday}}"  placeholder="Ngày sinh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$teacher->email}}"  placeholder="Email add">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{$teacher->phone}}"  placeholder="SĐT">
                  </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Cập Nhật</button>
  
                </div>
</div>
</form>
@stop