@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('schedule.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm mới Lịch Học</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Giáo viên</label>
                        <select class="form-control" name="id_teacher">
                        <option value="" selected disabled>Giáo viên</option>
                            @foreach ($teacher as $teacher)
                                <option value="{{$teacher->id_teacher}}">{{$teacher->name_teacher}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Môn học</label>
                        <select class="form-control" name="id_subject">
                        <option value="" selected disabled>Chọn môn</option>
                            @foreach ($subject as $subject)
                                <option value="{{$subject->id_subject}}">{{$subject->name_subject}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lớp</label>
                        <select class="form-control" name="id_classroom">
                        <option value="" selected disabled>Chọn lớp</option>
                            @foreach ($classroom as $classroom)
                                <option value="{{$classroom->id_classroom}}">{{$classroom->name_classroom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ca học</label>
                        <select class="form-control" name="id_studytime">
                        <option value="" selected disabled>Chọn ca học</option>
                            @foreach ($studytime as $studytime)
                                <option value="{{$studytime->id_studytime}}">{{$studytime->studytime}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
            <!-- /.card -->
        </div>
        </div>

    </div><!-- /.container-fluid -->
</form>
@stop