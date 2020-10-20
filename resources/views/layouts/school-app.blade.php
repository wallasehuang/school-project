<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Animal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    @yield('head-config')

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0-canary.0/tailwind.min.css'/> --}}

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    @yield('style')

</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img  class="logo" src="img/logo.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('about')}}">我要領養</a></li>
                                        <li><a href="javascript:function() { return false; }">領養資訊 <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('shelter-info')}}">收容所資訊</a></li>
                                                <li><a href="https://www.ahiqo.ntpc.gov.tw/cht/index.php?code=list&flag=detail&ids=15&article_id=351">領養須知</a></li>
                                                <li><a href="https://www.pettalk.tw/blog/category/健康知識">寵物知識</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            @auth
                                                <a href="javascript:function() { return false; }">Hi {{Auth::user()->name}} <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="{{route('dashboard')}}">會員專區</a></li>
                                                        <li>
                                                            <form method="POST" action="{{route('logout')}}">
                                                                @csrf
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">登出</a>
                                                            </form>
                                                        </li>
                                                    </ul>
                                            @else
                                                <a href="{{route('login')}}">會員登入</a>
                                            @endauth

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                聯絡我們
                            </h3>
                            <ul class="address_line">
                                <li>0905-190-096</li>
                                <li><a href="#">aww15216@gmail.com</a></li>
                                <li>桃園市龜山區德明路5號 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                網站內部聯結
                            </h3>
                            <ul class="links">
                                <li><a href="{{route('home')}}">首頁</a></li>
                                <li><a href="{{route('about')}}">我要領養</a></li>
                                <li><a href="#">領養資訊</a></li>
                                <li><a href="#">寵兒交流區</a></li>
                                <li><a href="#">會員登入</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                網站外部連結
                            </h3>
                            <ul class="links">
                                <li><a href="#">寵物訓練影片</a></li>
                                <li><a href="#">報告狗班長</a></li>
                                <li><a href="#">About Dogs</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>粉絲專頁</p>
                                <ul>
                                    <li>
                                        <a href="https://m.facebook.com/寵心出發-101491335055547/">
                                            <i class="ti-facebook"></i> 寵心出發
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/make.a.fresh.start?igshid=hxkq5bt1m9d">
                                            <i class="ti-instagram"></i> make.a.fresh.start
                                        </a>
                                    </li>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>

     <!--contact js-->
     <script src="{{asset('js/contact.js')}}"></script>
     <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
     <script src="{{asset('js/jquery.form.js')}}"></script>
     <script src="{{asset('js/jquery.validate.min.js')}}"></script>
     <script src="{{asset('js/mail-script.js')}}"></script>

     <script src="{{asset('js/main.js')}}"></script>
     <script>
         $('#datepicker').datepicker({
             iconsLibrary: 'fontawesome',
             disableDaysOfWeek: [0, 0],
         //     icons: {
         //      rightIcon: '<span class="fa fa-caret-down"></span>'
         //  }
         });
         $('#datepicker2').datepicker({
             iconsLibrary: 'fontawesome',
             icons: {
              rightIcon: '<span class="fa fa-caret-down"></span>'
          }

         });
         var timepicker = $('#timepicker').timepicker({
          format: 'HH.MM'
      });
     </script>

     @yield('script')

</body>

</html>
