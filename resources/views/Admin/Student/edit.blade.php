@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('student.update',$student->id_student)}}" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">MSV</label>
                    <input type="text" class="form-control" name="MSV" placeholder="MGV" value="{{$student->MSV}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ten SV</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$student->name}}">
                  </div>
                  <label for="exampleInputEmail1">Giới tính</label>
                  <div class="form-check">
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="Nam"{{ $student->gender =="Nam" ? 'selected' : '' }}>Nam</option>
                                        <option value="Nữ" {{ $student->gender =="Nữ" ? 'selected' : '' }}>Nữ</option>
                                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Sinh</label>
                    <input type="date" class="form-control" name="birthday" value="{{$student->birthday}}" placeholder="Ngày sinh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$student->email}}" placeholder="Email add">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{$student->phone}}" placeholder="SĐT">
                  </div>
                  <div class="form-group">
                  <label>Lớp</label>
                  <select class="form-control" name="id_classroom">
                                    @foreach ($classroom as $classroom)
                                        <option value="{{$classroom->id_classroom}}" 
                                            @if ($classroom->id_classroom==$student->id_classroom) selected
                                            @endif>
                                            {{$classroom->name_classroom}}
                                        </option>
                                    @endforeach
                                </select>
                </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Sửa</button>
  
                </div>
</div>
</form>
@stop