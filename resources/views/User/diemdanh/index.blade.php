
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Minh Ria | Điểm Danh</title>
        <base href="{{asset('')}}assets/">
        <!-- meta description -->
        <meta name="description" content="">
        <!-- mobile viwport meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fevicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        
        <!-- ================================
        CSS Files
        ================================= -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/themefisher-fonts.min.css">
        <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/main.css">
        <link rel="stylesheet" href="dist/css/dark.css">
        <link id="color-changer" rel="stylesheet" href="dist/css/colors/color-0.css">
    </head>

    <body class="dark">

        <div class="preloader">
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
        </div>

        <div class="preview-wrapper" style="background-color: brown;">
            <div class="switcher-head">
                <span>Welcome: </span>
                <div class="switcher-trigger tf-tools"></div>
            </div>

            <div class="switcher-body">
                <span style="color: brown;">Infomation:</span>
                <ul class="color-options list-none">
                <a href="{{url('home')}}" class="brand-link">
      
                <a href="{{route('user.logout')}}" class="nav-link">Đăng Xuất</a>
                </a> 
                </ul>
            </div>
        </div>
        <main class="site-wrapper">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="pt-table" >
                <div class="pt-tablecell page-about relative" >
                    <!-- .close -->
                    <a href="{{url('  ')}}" class="page-close">&rarr;</a>
                    <!-- /.close -->

                    

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                    <h2>Bảng <span class="primary">Điểm Danh</span> <span class="title-bg">MinhRia</span></h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                            
              <!-- /.card-header -->
              <div class="form-group i10"  style="text-align: center;">
                    <div>
                         
                         <input type="date" autocomplete="off" class="input-text" name="" spellcheck="false" value=""/>
                    </div><br>
                    <div class="input-group w-40">
                    
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="min-width:400px; block-size: 30px;">
                     <option value="" selected disabled>Chọn Môn</option>
                         @foreach ($subject as $subject)
                                    <option value="{{$subject->id_subject}}">{{$subject->name_subject}}</option>
                                @endforeach
                     </select>
                    </div>
                    <div class="input-group w-20">
                    
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="min-width:100px; block-size: 30px;">
                    <option value="" selected disabled>Ca Học</option>
                    @foreach ($studytime as $studytime)
                                    <option value="{{$studytime->id_studytime}}">{{$studytime->studytime}}</option>
                                @endforeach
                    </select>
                   </div>
                    <div class="input-group w-30">
                   
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="min-width:300px; block-size: 30px;">
                        <option value="" selected disabled>Chọn lớp</option>
                        @foreach ($classroom as $classroom)
                                    <option value="{{$classroom->id_classroom}}"><button type="submit">{{$classroom->name_classroom}}</button></option>
                                @endforeach
                     </select>
                    </div>
                    
                   
                
               </div><br><br><hr style="border: 3px solid brown; border-radius:1px">
               
        
               
               <div class="card-body">
                 
                   <table id="example1" class="table" role="grid" aria-describedby="example1_info" style="text-align: center;">
                  
                   
  <thead>
    <tr style="color: orange;">
      <th style="width:10%;">Mã Sinh Viên</th>
      <th style="width:25%;">Tên/Trình Trạng</th>
      <th scope="col">Điểm Danh</th>

      
    </tr>
  </thead>
  


                            <tfoot >
                                <tr>
                                    <td colspan="1">
                                        <button type="submit"  class="btn btn-primary">Điểm Danh</button>
                                    </td>
                                </tr>
                            </tfoot>
  <!-- <tbody>
    <tr>
      <th>1</th>
      <th><span>Đặng Văn Minh</span><br><a>Nghỉ:</a><span style="color: green;">1/16</span></th>
      <td>
          <div class="input-group w-16">
                 Có:
                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
          </div> 
          <div class="input-group w-16">
                 Muộn:
                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
          </div>
          <div class="input-group w-16">
                 Nghỉ:
                <input  type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
          </div>
      </td>
      
    </tr>
    
  </tbody> -->

                     
                     
                  
                  
                  
                </table>
              </div>
               
               
               
                
                
            
            </div>
            
             </form>
        </main> <!-- /.site-wrapper -->
        <style>
            .w-16, .w-20, .w-25, .w-30, .w-33, .w-40, .w-50, .w-60, .w-70, .w-75, .w-80, .w-100 {
    float: left;
}
.w-100 {
    width: 100%;
}
@media (min-width: 415px) {
    .w-16 {width: 16.67%;}
    .w-20 {width: 20%;}
    .w-25 {width: 25%;}
    .w-30 {width: 30%;}
    .w-33 {width: 33.33%;}
    .w-35 {width: 35%;}
    .w-40 {width: 40%;}
    .w-50 {width: 50%;}
    .w-60 {width: 60%;}
    .w-70 {width: 70%;}
    .w-75 {width: 75%;}
    .w-80 {width: 80%;}
    .w-85 {width: 85%;}
    .w-90 {width: 90%;}
}
@media (min-width: 321px) and (max-width: 414px) {
    .w-16 {width: 25%;}
    .w-20, .w-25, .w-30, .w-33, .w-35, .w-40 {width: 50%;}
}
@media (max-width: 414px) {
    .w-50, .w-60, .w-70, .w-75, .w-80 {width: 100%;}
}
@media (max-width: 320px) {
    .w-16, .w-20, .w-25 {width: 50%;}
    .w-30, .w-33, .w-35, .w-40 {width: 100%;}
}
.i10{
    border-bottom-color: red;
border-top-width: 5px;
border-right-style: dotted;
}
        </style>
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
    <script>
        $(document).ready(function(){
            $("#id_classroom").change(function(){
                var id_classroom = $(this).val();
                var url = "{{ route('user.in.class',":id_student") }}",
                    url = url.replace(':id_classroom', id_classroom);
                $.ajax({
                    type:'GET',
                    url:url,
                    data: '',
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        for(let i=0; i<data.length; i++) {
                                let id_student = data[i].id_student;
                                let name = data[i].name;
                                html +='<tr>';
                                html +='<td>'+id_student+'</td>';
                                html +='<td>'+name+'</td>';
                                html +='<td>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id_student+']" value="1"> Đi học';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id_student+']" value="2"> Nghỉ học';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id_student+']" value="3"> Muộn';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id_student+']" value="4"> Có phép';
                                html +='</span>';
                                html +='</td>';
                                html +='</tr>';
                            }
                        $("#table_body").html('');
                        $("#table_body").append(html);
                    },
                    error: function(data) {}
                });
            });
        });
    </script>
@endsection
        
          
        

        
        <script src="dist/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="dist/js/vendor/bootstrap.min.js"></script>
        <script src="dist/js/jquery.easing.min.js"></script>
        <script src="dist/js/isotope.pkgd.min.js"></script>
        <script src="dist/js/jquery.nicescroll.min.js"></script>
        <script src="dist/js/owl.carousel.min.js"></script>
        <script src="dist/js/jquery-validation.min.js "></script>
        <script src="dist/js/form.min.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>