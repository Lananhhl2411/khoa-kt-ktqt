<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Nhà sách HVNH</title>
    <meta name="description"
        content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>Nhà sách HVNH</b></a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form action="tim_kiem.php?tim_kiem=timkiem" class="form-inline ml-auto my-2 my-lg-0 mr-3" method="POST">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small" name="tukhoa"
                            placeholder="Nhập sách cần tìm kiếm...">
                        <div class="input-group-append">
                            <input type="submit" class="btn" style="background-color: #CF111A; color: white;" name="timkiem">
                                <i class="fa fa-search"></i>
                            </input>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">Đăng nhập</a>
                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="gio-hang.php" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="gio_hang.php"
                            style="display:inline-block">Giỏ
                            Hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signup" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">Đăng ký</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với nhà sách HVNH về</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                                vụ & Chính sách bảo mật</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signin" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                                khẩu</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">Đăng nhập</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fab fa-google mr-2"></i> Đăng nhập bằng Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                class="fab fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>0338386847</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                            <ul>
                                <li> <a href="#">Khoa lý luận chính trị</a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>

                                <li><a href="">Khoa ngân hàng </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                 <li><a href="">Khoa luật </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Khoa kế - kiểm </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Khoa HTTTQL </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Khoa tài chính </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Bộ môn toán </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Khoa ngôn ngữ Anh </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="">Khoa quản trị kinh doanh </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="khoa_kinh_te.php">Khoa kinh tế </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>
                                <li><a href="khoa_kinh_doanh_quoc_te.php">Khoa kinh doanh quốc tế </a><i
                                        class="fa fa-chevron-right float-right"></i>
                                </li>

                            </ul>
                        </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="images/banner2.png" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner3.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner5.png" class="img-fluid"
                                        style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="items">
                    <div class="row">
                
                             <?php 

                                $tukhoa=$_GET['tukhoa'];
                               echo $tukhoa;

                            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                            include('config.php');

                            // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                            
                           $sql="SELECT * 
                                FROM tbl_san_pham 
                                 WHERE ten_san_pham LIKE '%".$tukhoa."%'";
                                  echo $tukhoa;


                            // 3. Thực thi câu lệnh truy vấn (mục WHERE ten_khoa="khoa kinh tế đích trả về dữ liệu các bạn cần)
                            $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                            // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                            while ($row = mysqli_fetch_array($noi_dung_san_pham)) 
                            {
                            ;?>
                             <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                  <div class="card ">
                                <img class="card-img-top anh" src="<?php echo $row['anh'] ? 'images/'.$row['anh'] : 'images/bank-4.0.jpg';?>" alt="">
                                <div class="card-body noidungsp mt-3">
                                   <h6 style="text-align: center;" ><a href="chi_tiet_san_pham.php?id=<?php echo $row['san_pham_id'];?>"><?php echo $row["ten_san_pham"];?></h6>
                                   <small style="text-align: center;" class="tacgia text-muted"><?php echo $row["tac_gia"];?></small>
                                    <div style="text-align: center;" class="giamoi"><?php echo $row["gia"];?></div>
                                    </div>
                                    
                                </div>
                                </div>
                              </a>

                            <?php 
                            }

                            // 5. Đóng kết nối sau khi sử dụng xong
                            mysqli_close($ket_noi);
                        ;?>

                           
                    </div>
                </div>

   <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">THANH TOÁN QUA CHUYỂN KHOẢN</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">PHÍ GIAO HÀNG 30K</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">GIAO HÀNG NHANH</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về nhà sách HVNH</h6>
                        <div>12 Chùa Bộc, Đống Đa, Hà Nội</div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="huong_dan_dat_hang.php">Hướng dẫn đặt hàng</a>
    
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="images/atm-payment.jpg" alt="atm-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                        <img src="images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>