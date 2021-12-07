@extends('welcome')

@section('title', 'Danh Sách Sinh Viên')



@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh Sách Sinh Viên</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 
                   <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  
                     <tr role="row" style="text-align: center;">
                           <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">MSSV</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên SV</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Giới Tính</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ngày Sinh</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Phone</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Lớp</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                     </tr>
                     
                         
                        @forelse ($student as $student)
                <tr> 
                      <td>{{$student->MSV}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->birthday}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td>{{$student->name_classroom}}</td>
                   <td style="text-align: center;">
                   <form>
                     <a class="btn btn-primary" href="{{ url('student/'.$student->id_student.'/edit') }}">Sửa</a> 
                     @csrf 
                    @method('DELETE')
                    <a th:date-id="${student.id_student}"
                    onclick="showConfirm(this.getAttribute('data-id'))"  class="btn btn-outline-warning" style="background-color: red;">Xóa</a>
                     </form>
                   </td>
                </tr>
           @empty 
             <tr>
             <td colspan="6" class="text-center">Không có liên hệ</td>
             </tr>
           @endforelse
                </table>
                <script>
                    function showConfirm(id_student){
                      $('#yes').attr('action','student.destroy' + id_student);
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
      <form action="{{route('student.destroy',$student->id_student)}}" method="POST">
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
                
                <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              
</div>
@stop