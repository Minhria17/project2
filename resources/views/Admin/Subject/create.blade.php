@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('subject.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm mới môn học</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputSubject">Mã môn học</label>
                  <input name="ma_subject" type="text" class="form-control" id="exampleInputSubject" placeholder="Mã môn học">
                </div>
                <div class="form-group">
                  <label for="exampleInputSubject">Môn học</label>
                  <input name="name_subject" type="text" class="form-control" id="exampleInputSubject" placeholder="Môn học">
                </div>  
                <div class="form-group">
                  <label for="exampleInputTime">Tổng số giờ</label>
                  <input name="total_hours" type="number" class="form-control" id="exampleInputTime" placeholder="Số giờ dạy">
                </div>
              </div>          
              <!-- /.card-body -->

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
              </div>
            </form>
          </div>
            <!-- /.card -->
        </div>
      </div>

  </div>
  <!-- /.container-fluid -->
</form>
@stop