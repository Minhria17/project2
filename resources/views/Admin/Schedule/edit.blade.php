@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('schedule.update',$schedule->id_schedule)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa lịch học</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputID">ID</label>
                                <input value="{{$schedule->id_schedule}}" readonly  type="number" class="form-control" id="exampleInputID" >
                            </div>
                            <div class="form-group">
                                <label>Giáo viên</label>
                                <select class="form-control" name="id_teacher">
                                  <option value="" selected disabled>Chọn giáo viên</option>
                                    @foreach ($teacher as $teacher)
                                        <option value="{{$teacher->id_teacher}}"
                                            @if ($teacher->id_teacher==$schedule->id_teacher) selected
                                            @endif>
                                            {{$teacher->name_teacher}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Môn học</label>
                                <select class="form-control" name="id_subject">
                                  <option value="" selected disabled>Chọn môn</option>
                                    @foreach ($subject as $subject)
                                        <option value="{{$subject->id_subject}}"
                                            @if ($subject->id_subject==$schedule->id_subject) selected
                                            @endif>
                                            {{$subject->name_subject}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lớp</label>
                                <select class="form-control" name="id_classroom">
                                  <option value="" selected disabled>Chọn lớp</option>
                                    @foreach ($classroom as $classroom)
                                        <option value="{{$classroom->id_classroom}}"
                                            @if ($classroom->id_classroom==$schedule->id_classroom) selected
                                            @endif>
                                            {{$classroom->name_classroom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ca học</label>
                                <select class="form-control" name="id_studytime">
                                  <option value="" selected disabled>Chọn ca học</option>
                                    @foreach ($studytime as $studytime)
                                        <option value="{{$studytime->id_studytime}}" 
                                            @if ($studytime->id_studytime==$schedule->id_studytime) selected
                                            @endif>
                                            {{$studytime->studytime}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>     
        </div>
        <!-- /.container-fluid -->
    </form>
@stop