
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Minh Ria | Lịch Dạy</title>
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
                <span>Welcome: {{ Auth::user()->name }}</span>
                <div class="switcher-trigger tf-tools"></div>
            </div>

            <div class="switcher-body">
                <ul class="color-options list-none">
                <a href="{{url('home')}}" class="brand-link">
      
                <a href="{{route('user.logout')}}" class="nav-link">Đăng Xuất</a>
                </a> 
                </ul>
            </div>
        </div>
        <main class="site-wrapper">
            <form>
            <div class="pt-table" >
                <div class="pt-tablecell page-about relative" >
                    <!-- .close -->
                    <a href="{{url('welcome2')}}" class="page-close">&rarr;</a>
                    <!-- /.close -->

                    

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                    <h2>LỊCH <span class="primary">DẠY</span> <span class="title-bg">MinhRia</span></h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="input-group">
                       <div class="form-outline">
                       
                           <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
                         </div>
                         
                     </div> -->

                            
              <!-- /.card-header -->
              
               
        
               
               <div class="card-body">
                 
                   <table id="example1" class="table" role="grid" aria-describedby="example1_info">
                  
                   
  <thead>
    <tr style="color: orange;">
      <th style="width:10%;">ID</th>
      <th style="width:20%;">Giáo Viên</th>
      <th scope="col">Môn Học</th>
      <th scope="col">Lớp</th>
      <th scope="col">Ca Học</th>
      

      
    </tr>
  </thead>
  <tbody id="listUser">
  @forelse ($schedule as $schedule)
                    <tr>
                      <td>{{$schedule->id_schedule}}</td>
                      <td>{{$schedule->name_teacher}}</td>
                      <td>{{$schedule->name_subject}}</td>
                      <td>{{$schedule->name_classroom}}</td>
                      <td>{{$schedule->studytime}}</td>
                      
                    </tr>
                @empty
                  <tr><td colspan="6">Danh sách rỗng</td></tr>
                @endforelse 
                </tbody>
  
  


                     
                     
                  
                  
                  
                </table>
              </div>
               
               
               
                
                
            
            </div>
            
             </form>
        </main> <!-- /.site-wrapper -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
            <script>
               $(document).ready(function (){
                 $(document).on('keyup', '#keyword' ,function(){
                      var keyword = $(this).val();
                      console.log(keyword);

                      $.ajax({
                        type: "get",
                        url:  "/search",
                        data: {
                          keyword: keyword
                        },
                        dataType: "json",
                        success: function(response){
                          console.log(response);
                           $('#listUser').html(response);
                        }
                      
                 });
               });
               </script>
        
        
          
        

        
        <script src="dist/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="dist/js/vendor/bootstrap.min.js"></script>
        <script src="dist/js/jquery.easing.min.js"></script>
        <script src="dist/js/isotope.pkgd.min.js"></script>
        <script src="dist/js/jquery.nicescroll.min.js"></script>
        <script src="dist/js/owl.carousel.min.js"></script>
        <script src="dist/js/jquery-validation.min.js"></script>
        <script src="dist/js/form.min.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>