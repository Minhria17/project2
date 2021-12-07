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
            <div class="card-header" style="background-color: yellow;">
              <h3 class="card-title">Danh sách lớp học</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mã lớp học</th>
                    <th>Tên lớp</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                
                @forelse ($classroom as $classroom)
                    <tr>
                      <td>{{$classroom->id_classroom}}</td>
                      <td>{{$classroom->ma_classroom}}</td>
                      <td>{{$classroom->name_classroom}}</td>
                      <td class="project-actions ">
                          <a class="btn btn-outline-warning" href="{{route('classroom.edit',$classroom->id_classroom)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          @csrf
                          @method("DELETE")
                          <a th:date-id="${classroom.id_classroom}"
                    onclick="showConfirm(this.getAttribute('data-id'))"  class="btn btn-outline-warning">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                           </a>
                      </td>
                    </tr>
                @empty
                  <tr><td colspan="4">Danh sách rỗng</td></tr>
                @endforelse
               
              </table>
              <script>
                    function showConfirm(id_classroom){
                      $('#yes').attr('action','classroom.destroy' + id_classroom);
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
      <form action="{{ route('classroom.destroy',$classroom->id_classroom) }}" method="POST">
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