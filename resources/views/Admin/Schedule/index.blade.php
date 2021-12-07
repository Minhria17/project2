@extends('welcome')
@section('title','Danh sách Lịch Học')
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
            <div class="card-header" style="background-color: yellow;">
              <h3 class="card-title">Danh sách lịch dạy</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Giáo viên</th>
                        <th>Môn học</th>
                        <th>Lớp Học</th>
                        <th>Ca học</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                
                @forelse ($schedule as $schedule)
                    <tr>
                      <td>{{$schedule->id_schedule}}</td>
                      <td>{{$schedule->name_teacher}}</td>
                      <td>{{$schedule->name_subject}}</td>
                      <td>{{$schedule->name_classroom}}</td>
                      <td>{{$schedule->studytime}}</td>
                      <td class="project-actions">
                          <a class="btn btn-outline-warning" href="{{url('schedule/'.$schedule->id_schedule.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          @csrf
                          @method("DELETE")
                          <a th:date-id="${student.id_student}"
                    onclick="showConfirm(this.getAttribute('data-id'))"  class="btn btn-outline-warning" style="background-color: pink;">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                    </tr>
                @empty
                  <tr><td colspan="6">Danh sách rỗng</td></tr>
                @endforelse 
              </table>
              <script>
                    function showConfirm(id_schedule){
                      $('#yes').attr('action','student.destroy' + id_schedule);
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
      <form action="{{ route('schedule.destroy',$schedule->id_schedule) }}" method="POST">
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