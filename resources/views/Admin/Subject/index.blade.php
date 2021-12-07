@extends('welcome')
@section('title','Danh sách lớp học')
@section('css')
    @parent
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid"><br>
    <!-- Small boxes (Stat box) -->
    
    <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card card-primary">
            <div class="card-header"  style="background-color: yellow;">
              <h3 class="card-title">Danh sách môn học</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr class="text-center">
                    <th>ID</th>
                    <th>Mã môn học</th>
                    <th>Môn học</th>
                    <th>Số giờ dạy</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>

                @forelse ($subject as $subject)
                    <tr>
                      <td>{{$subject->id_subject}}</td>
                      <td>{{$subject->ma_subject}}</td>
                      <td>{{$subject->name_subject}}</td>
                      <td>{{$subject->total_hours}}</td>
                      <td class="project-actions">
                          <a class="btn btn-outline-warning" href="{{route('subject.edit',$subject->id_subject)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          @csrf
                          @method("DELETE")
                          <a th:date-id="${subject.id_subject}"
                    onclick="showConfirm(this.getAttribute('data-id'))"  class="btn btn-outline-warning">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
</a>
                      </td>
                    </tr>
                @empty
                  <tr><td colspan="5">Danh sách rỗng</td></tr>
                @endforelse
              </table>
              <script>
                    function showConfirm(id_subject){
                      $('#yes').attr('action','student.destroy' + id_subject);
                      $('#confirmId').modal('show');
                    }
                </script>
<!-- The Modal -->
<div class="modal" id="confirmId">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Mày Chắc Chưa?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal footer -->
      <form action="{{ route('subject.destroy',$subject->id_subject) }}" method="POST">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tao Nhầm!</button>
        @csrf 
        @method('DELETE')
        <button id="yes" type="submit" class="btn btn-danger">Ừ</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

  </div><!-- /.container-fluid -->
@endsection

@section('script')
    @parent
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
    </script>
@endsection