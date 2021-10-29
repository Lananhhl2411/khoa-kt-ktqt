<?php
	session_start();
	include "thuvien.php";
	if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
	// lấy thông tin khách hàng từ form
	$ten=$_POST['hoten'];
	$dia_chi=$_POST['diachi'];
	$dien_thoai=$_POST['dienthoai'];
	$email=$_POST['email'];
	$tong_tien=tongdonhang();

	//insert đơn hàng
	 
                                                // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                 include('config.php');

                                                // 2. insert)
                                 $sql="INSERT INTO `tbl_hoa_don` (`hoa_don_id`, `ten`, `dia_chi`, `dien_thoai`, `email`, `tong_tien`) VALUES (NULL, '".$ten."', '".$dia_chi."', '".$dien_thoai."', '".$email."', '".$tong_tien."')";
                                               // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
          							 			 $noi_dung_hoa_don = mysqli_query($ket_noi, $sql);
                                                
                                 				$last_id = mysqli_insert_id($ket_noi);
                                 mysqli_close($ket_noi);
                                           


	//lấy thông tin giỏ hàng từu sesion+id vừa tạo để insert vào giỏ hàng
       for($i=0;$i<sizeof($_SESSION['giohang']);$i++)
       {
       	$tensp=$_SESSION['giohang'][$i][1];
       	$anh=$_SESSION['giohang'][$i][0];
       	$dongia=$_SESSION['giohang'][$i][2];
       	$soluong=$_SESSION['giohang'][$i][3];
       	$thanhtien=$dongia*$soluong;
       	 include('config.php');

                                              // 2. insert)
                             $sql="INSERT INTO `tbl_gio_hang` (`gio_hang_id`, `ten_san_pham`, `anh`, `gia`, `so_luong`, `thanh_tien`, `hoa_don_id`) 
                                   VALUES (NULL, '".$tensp."', '".$anh."', '".$dongia."', '".$soluong."', '".$thanhtien."', '".$last_id."');";
                                               // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
          					$noi_dung_hoa_don = mysqli_query($ket_noi, $sql);
                                            
                            mysqli_close($ket_noi);

       }

	//show đon hàng

     			 $ttkh='<h1>Mã đơn hàng:'.$last_id.'</h1><br>
      					 <h2>THÔNG TIN NHẬN HÀNG</h2>
      					<table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td>'.$ten.'</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>'.$dia_chi.'</td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td>'.$dien_thoai.'</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>'.$email.'</td>
                        </tr>
                    </table>';
                    $ttgh=showgiohang();

	//unset giỏ hàng session
          unset($_SESSION['giohang']);
		//echo "bạn đã tạo thành công";
	}

;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/product-item.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
      
    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a  class="navbar-brand" href="index.php" style="color: #CF111A;"><b>Nhà sách HVNH</b></a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nhập sách cần tìm kiếm...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
            </div>
        </div>
    </nav>
    

    <!-- form dang ky khi click vao button tren header-->
    

    <!-- form dang nhap khi click vao button tren header-->
    

    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
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
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>1900 1999</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
            </ol>
        </div>
    </section>


   <div class="boxcenter">
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
           
                <div class="row" >
                   <?php echo $ttkh;?>
                    
                </div>
                <div class="row mb">
                    <h2>GIỎ HÀNG</h2>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền (vnd)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php echo $ttgh; ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                
            </div>
                </div>
                
        </div>
    </div>

</body>

</html>