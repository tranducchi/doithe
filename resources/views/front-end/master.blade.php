<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet" >
        <link href="/css/font-awesome.min.css" rel="stylesheet" >
        <link href="/css/bootstrap.min.css" rel="stylesheet" >
       
    </head>
    <body>
    <!-- Top -->
    @include('front-end.layouts.top')
    <!-- End Top -->
    <!-- Menu -->
    @include('front-end.layouts.menu')
    <!-- End Menu -->
    <!-- Slide -->
    @yield('slider')
    <!-- End Slide -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->
    @yield('message')
    <!-- Service -->
    @yield('info')
    <!-- End service -->
    @include('front-end.layouts.footer')
    <!-- End footer -->

    <!-- Modal -->
     <div class="modal fade" id="register" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span><i class="fa fa-pencil p-2"></i></span>Đăng kí thành viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Họ và tên : </label>
                        <input type="text" class="form-control" placeholder="Nhập họ tên">
                    </div>
                    <div class="form-group">
                        <label for="">Email : </label>
                        <input type="text" class="form-control" placeholder="Điền tài khoản">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại : </label>
                        <input type="text" class="form-control" placeholder="Điền tài khoản">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu : </label>
                        <input type="text" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="">Xác nhận mật khẩu : </label>
                        <input type="text" class="form-control" placeholder="Nhập lại mật khẩu">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger">Đăng kí</button>
            </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span><i class="fa fa-user p-2"></i></span>Thông tin đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Email : </label>
                        <input type="text" class="form-control" placeholder="Điền tài khoản">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu : </label>
                        <input type="text" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                </form>
            </div>
            <div class="form-group text-right mr-3"><p>Bạn chưa có tài khoản ?  <span><a href="#">Đăng kí ngay</a></span></p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-info">Đăng nhập</button>
            </div>
            </div>
        </div>
    </div>
    <!-- End two modal -->
    <!-- Link script  -->
        
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
   
</html>
