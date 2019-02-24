<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đổi thẻ cào uy tín</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet" >
        <link href="/css/font-awesome.min.css" rel="stylesheet" >
        <link href="/css/bootstrap.min.css" rel="stylesheet" >
       
    </head>
    <body>
    <!-- Top -->
    <div id="top">
        <div class="container d-flex justify-content-between p-3">
            
            <div class="left">
                <div class="logo">
                    <img src="img/logo.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="right d-flex justify-content-between d-lg-none d-md-none">
                <a href="#" class="text-danger" data-target="#register" data-toggle="modal">Đăng kí</a>
                or
                <a href="#" class="text-info" data-target="#login" data-toggle="modal">Đăng nhập</a>
            </div>
            <div class="right d-flex justify-content-between">
                <div class="contact pl-3 pr-3">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    19008198
                    <a href="https://sky.com"><i class="fa fa-skype" aria-hidden="true"></i></a>
                </div>
                <div class="register d-none d-sm-block">
                    <button type="button" class="btn btn-outline-danger mr-2" data-toggle="modal" data-target="#register">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <a href="#" class="text-danger p-2" >Đăng kí</a>
                    </button>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#login">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="#" class="text-info p-2">Đăng nhập</a>
                    </button>
                </div>
            </div>
        </div>
       
    </div>
    <!-- End Top -->
    <!-- Menu -->
    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info text-white menu">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">TRANG CHỦ </i><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <div class="dropdown show">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DỊCH VỤ
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#">Mua thẻ điện thoại</a>
                                  <a class="dropdown-item" href="#">Nạp tiền điện thoại</a>
                                  <a class="dropdown-item" href="#">Bán thẻ cào</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">TRIẾT KHẤU</a>
                        </li>
                        <li class="nav-item active">
                            <div class="dropdown show">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DỊCH VỤ
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#">Hỏi đáp</a>
                                  <a class="dropdown-item" href="#">Hướng dẫn</a>
                             
                                </div>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">NẠP TIỀN VÀO TÀI KHOẢN</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 position-relative">
                        <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <a href="#" class="text-white"><i class="fa fa-search" aria-hidden="true" class="position-absolute "></i></a>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Menu -->
    <!-- Slide -->
    <div id="slide" class="mt-4 mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="http://placehold.jp/1366x400.png"  alt="First slide">
                </div>
                <div class="carousel-item img-fluid">
                    <img class="d-block w-100" src="http://placehold.jp/1366x400.png"  alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="http://placehold.jp/1366x400.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Tiếp</span>
            </a>
        </div>
    </div>
    <!-- End Slide -->

    <!-- Content -->
    <div id="content">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-12 col-sm-12 col-md-12 border border-info rounded">
                    <h3>MUA MÃ THẺ</h3>
                    <hr>
                    <div class="card border-0">
                        <form method="post" action="#">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Chọn nhà cung cấp</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Mệnh giá thẻ nạp</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Số lượng thẻ cần mua" class="form-control mt-3 mb-3">
                            <input type="text" placeholder="Địa chỉ email nhận mã thẻ" class="form-control mt-3 mb-3">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Ngân hàng</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Mật khẩu cấp 2" class="form-control mt-3 mb-3">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info">MUA THẺ NGAY</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End col -4 -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 border border-info rounded">
                    <h3>MUA THẺ GAME, VIRUS, 3G/4G DATA</h3>
                    <hr>
                    <div class="card border-0">
                        <form method="post" action="#">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Chọn nhà cung cấp</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Mệnh giá thẻ nạp</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Số lượng thẻ cần mua" class="form-control mt-3 mb-3">
                            <input type="text" placeholder="Địa chỉ email nhận mã thẻ" class="form-control mt-3 mb-3">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Ngân hàng</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Mật khẩu cấp 2" class="form-control mt-3 mb-3">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info">MUA THẺ NGAY</button>
                            </div>
                        </form>
                        
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End col -4 -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 border border-info rounded">
                    <h3>NẠP TIỀN ĐIỆN THOẠI</h3>
                    <hr>
                    <div class="card border-0">
                        <form method="post" action="#">
                            <input type="text" class="form-control mb-3 mt-3" placeholder="Số điện thoại">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Mệnh giá thẻ nạp</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Địa chỉ Email kiểm tra giao dịch" class="form-control mt-3 mb-3">
                            <select class="form-control mt-3 mb-3" id="exampleFormControlSelect1">
                                <option>Ngân hàng</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" placeholder="Mật khẩu cấp 2" class="form-control mt-3 mb-3">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info">MUA THẺ NGAY</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End col -4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End Content -->
    <div id="message">
        <div class="container">
            <div class="title">
                <h2 class="text-center text-danger p-3"><i class="fa fa-hand-o-right pr-4" aria-hidden="true"></i>BÁN THẺ GIẤY VTT, MOBI, VINA chiết khấu: 3.0% (Có xuất VAT)</h2>
            </div>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Tạm dừng hỗ trợ chuyển hoàn tiền về tài khoản ngân hàng cho KH</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Nạp tiền vào tài khoản</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Thông tin tài khoản ngân hàng để nạp tiền</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Tải app Android doithe123</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Tài liệu kết nối mua thẻ</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Phần mềm in thẻ</a></p>
                <hr>
                <p><i class="fa fa-bell" aria-hidden="true"></i><a href="" class="ml-2">Chiết khấu mua thẻ tại Doithe123</a></p>
                <hr>
           
        </div>
    </div>
    <!-- Service -->
    <div id="service" class="mb-3">
        <div class="container border border-info rounded">
            <ul class="list-group">
                <a class="navbar-brand text-center p-2" href="#">DỊCH VỤ CỦA DOITHE123.COM</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link btn btn-info mr-2" href="#info">Thông tin dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-info mr-2" href="#code">Dịch vụ thẻ cào</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-info" href="#recharge">Nạp tiền</a>
                        </li>
                    </ul>
            </ul>
            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" style="overflow-y: scroll; height:300px;" class="mt-4">
                <h4 id="info">I.Thông tin dịch vụ</h4>
                <p>Các dịch vụ của Doithe123.com bao gồm:

                    Mua thẻ điện thoại online.
                    Nạp tiền điện thoại online.
                    Mua thẻ game. 
                    Mua key Phần mềm diệt virus.
                    Mua thẻ Data Mobifone (thẻ data 3G/4G).
                    Tại Doithe123.com chúng tôi tối ưu hóa các thao tác giúp Quý khách hàng dễ dàng thao tác những chức năng để sử dụng thuận tiện nhất. Đặc biệt hệ thống trên nền tảng bảo mật SSL an toàn, mã hóa thông tin và bảo mật tuyệt đối giúp Quý khách hàng an tâm đăng ký và sử dụng tất cả các dịch vụ.

                    Chúng tôi cung cấp cho khách hàng một cách thanh toán thuận tiện nhất khi sử dụng tài khoản thành viên với số dư thể hiện trong mục Tổng Tiền. Để thấy được chức năng này khách hàng cần ĐĂNG KÝ mới tài khoản thành công (tài khoản cần được xác thực trong địa chỉ email đăng ký). Hoặc Quý khách có thể Đăng nhập với tài khoản Google rất nhanh chóng. 

                    Khi đăng ký tài khoản thành viên thành công, Quý khách hàng sẽ CHUYỂN KHOẢN vào một trong những TÀI KHOẢN NHẬN TIỀN. Hệ thống sẽ cộng tương đương số tiền khi nhận được thông báo. Khi đó khách hàng có thể thực hiện mọi thao tác trên hệ thống. 

                    Lúc này Quý khách hàng sẽ thao tác mua thẻ cào điện thoại, mua mã thẻ game hay nạp tiền điện thoại (nhanh) trên hệ thống cũng như các thao tác mua key phần mềm diệt Virus hoặc mua thẻ Data Mobi.</p>
                <h4 id="code">II.Dịch vụ thẻ cào</h4>
                    <p>Dịch vụ mua mã thẻ điện thoại sẽ được thực hiện tại Mục MUA MÃ THẺ. Tại đây bạn sẽ mua được những mã thẻ cào của những nhà mạng di động Viettel, Vinaphone, Mobifone và nhà mạng Vietnammobile.
                        Dịch vụ mua mã thẻ điện thoại sẽ được thực hiện tại Mục MUA MÃ THẺ. Tại đây bạn sẽ mua được những mã thẻ cào của những nhà mạng di động Viettel, Vinaphone, Mobifone và nhà mạng Vietnammobile. Những thông tin cần thiết để điền chọn và điền vào hệ thống để mua mã thẻ cào điện thoại là: Chọn nhà cung cấp. Chọn Mệnh giá thẻ nạp. Điền Số lượng. Điền Mật khẩu cấp 2. Chọn MUA THẺ NGAY. Hệ thống thông báo thao tác thực hiện thành công, bạn sẽ nhận được mã thẻ tương ứng với tệp tin đính kèm dịnh dạng excel và gửi về hòm thư điện tử đăng ký. Mỗi mệnh giá bạn mua sẽ nhận được mức chiết khấu tương ứng. Hãy thao tác chính xác để nhận được mã thẻ nhanh nhất.
                        Những thông tin cần thiết để điền chọn và điền vào hệ thống để mua mã thẻ cào điện thoại là:

                        Chọn nhà cung cấp.
                        Chọn Mệnh giá thẻ nạp.
                        Điền Số lượng.
                        Điền Mật khẩu cấp 2.
                        Chọn MUA THẺ NGAY. 
                        Hệ thống thông báo thao tác thực hiện thành công, bạn sẽ nhận được mã thẻ tương ứng với tệp tin đính kèm dịnh dạng excel và gửi về hòm thư điện tử đăng ký.

                        Mỗi mệnh giá bạn mua sẽ nhận được mức chiết khấu tương ứng. Hãy thao tác chính xác để nhận được mã thẻ nhanh nhất.</p>
                <h4 id="recharge">III.Nạp tiền</h4>
                <p>Dịch vụ này là hình thức nạp tiền nhanh, thực hiện bằng việc điền số thuê bao cần nạp. Dịch vụ áp dụng cho các thuê bao của ba nhà mạng VIETTEL, VINAPHOPNE và MOBIFONE. 

                    Quý khách hàng chọn mục “Nạp tiền điện thoại” và điền chính xác các thông tin như sau:

                    Điền Số điện thoại.
                    Chọn Mệnh giá thẻ nạp.
                    Địa chỉ email kiểm tra giao dịch: địa chỉ email đăng ký tài khoản.
                    Mật khẩu cấp 2.
                    Chọn NẠP TIỀN NGAY.
                    Thao tác thông bao thành công, tài khoản điện thoại số thuê bao được nạp sẽ được cộng tương ứng. Quý khách hãy kiểm tra lại, thông tin nạp tiền sẽ được gửi tại hòm thư email. </p>
            </div>
        </div>
        
        <!-- End container -->
    </div>
    <!-- End service -->
    <div id="footer">
        <div class="container">
            <div class="row">   
                <div class="col-sm-12 col-md-12 col-lg-6">
                <!-- Left -->
                    <div class="contact">
                 
                        <span>THÔNG TIN LIÊN HỆ</span>
                        <p>Công ty cổ phần ABC.COM</p>
                        <p>Địa chỉ : Hà Đông - Hà Nội</p>
                        <p>Địa chỉ : Hà Nội</p>
                    </div>
                </div>
                <!-- End left --> 
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="info_detail">
                   
                        <img src="/img/logo.png" alt=""/>
                        <p style="font-size:18px; padding-top:21px">Ý KIẾN VỀ DỊCH VỤ DOITHE123</p>
                        <p class="service"><i class="fa fa-user-circle-o text-info" aria-hidden="true"></i><a href="">KIẾU NẠI DỊCH VỤ</a></p>
                        <div class="email">
                            <i class="fa fa-envelope text-info" aria-hidden="true"></i>
                            <small>chitranduc@gmail.com</small>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone text-info" aria-hidden="true"></i>
                            <small>0326833330</small>
                        </div>
                        <p style="margin-bottom:2px; margin-left:8px">doithe123.com cảm ơn quý kdụng dịch vụ và góp ý cho chúng tôi</p>
                    </div>
                   
                </div>
                <!-- Right -->
                
                <!-- End right -->
            </div>
        </div>
    </div>
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
