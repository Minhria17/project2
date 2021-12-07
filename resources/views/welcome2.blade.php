
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Minh Ria</title>
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
        <link id="color-changer" rel="stylesheet" href="dist/css/colors/red.css">
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
            <div class="pt-table">
                <div class="pt-tablecell page-home relative" style="background-image: url('dist/img/banner.jpg');">
                    <div class="overlay"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title home text-center">
                                    <img src="dist/img/truc3.png" alt="">
                                   
                                </div>

                                <div class="hexagon-menu clear">
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="{{ url('gioithieu') }}" class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title">Giới Thiệu</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="{{asset('attendance')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title">Điểm Danh</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="{{asset('student2')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title">Sinh Viên</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>    
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="{{asset('schedule2')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title">Lịch Dạy</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title"></span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a th:date-id="${teacher.id_teacher}"
                    onclick="showConfirm(this.getAttribute('data-id'))"  class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title">Contact</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a class="hex-content">
                                            <span class="hex-content-inner">
                                                
                                                <span class="title"></span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                </div> <!-- /.hexagon-menu -->

                            </div> <!-- /.col-xs-12 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
            <script>
                    function showConfirm(id_teacher){
                      $('#yes').attr('action','teacher.destroy' + id_teacher);
                      $('#confirmId').modal('show');
                    }
                </script>
<div class="modal" id="confirmId" style="text-align:center">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Liên Hệ Ngay Với Chúng Tôi Khi Gặp Sự Cố!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <hr>
      ADMIN: 0879956632 <br>
      EMAIL: dangm452@gmail.com <br>
      -><a href="https://www.facebook.com/dangvan.minh.0107" style="color: blue;">Facebook</a><-<br>
      -><a href="https://www.instagram.com/minhria17_dzai" style="color: brown;">Instagram</a><-<br>
      <hr>
      
      </div>
    </div>
  </div>
</div>
        </main> <!-- /.site-wrapper -->
        
        <!-- ================================
        JavaScript Libraries
        ================================= -->
        <script src="dist/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="dist/js/vendor/bootstrap.min.js"></script>
        <!-- <script src="js/jquery.easing.min.js"></script> -->
        <script src="dist/js/isotope.pkgd.min.js"></script>
        <script src="dist/js/jquery.nicescroll.min.js"></script>
        <script src="dist/js/owl.carousel.min.js"></script>
        <script src="dist/js/jquery-validation.min.js"></script>
        <script src="dist/js/form.min.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>