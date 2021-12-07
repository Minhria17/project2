@extends('welcome')

@section('title', 'Thêm Mới Môn')



@section('content')
<form action="{{route('subject.update',$subject->id_subject)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa môn học</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputID">ID</label>
                                <input value="{{$subject->id_subject}}" readonly type="number" class="form-control" id="exampleInputID" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMaSubject">Mã môn học</label>
                                <input value="{{$subject->ma_subject}}" type="text" name="ma_subject" class="form-control" id="exampleInputMaSubject" >
                              </div> 
                            <div class="form-group">
                              <label for="exampleInputSubject">Môn học</label>
                              <input value="{{$subject->name_subject}}" type="text" name="name_subject" class="form-control" id="exampleInputSubject" >
                            </div>  
                            <div class="form-group">
                              <label for="exampleInputTime">Tổng số giờ</label>
                              <input value="{{$subject->total_hours}}" type="number" name="total_hours" class="form-control" id="exampleInputTime" >
                            </div>
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>                                                           
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
@stop