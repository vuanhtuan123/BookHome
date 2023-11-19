<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Bin-It">
    <meta property="og:url" />
    <meta property="og:type" content="truongbinit" />
    <meta property="og:title" content="Website TruongBin" />
    <meta property="og:description" content="Wellcome to my Website" />

    <title>Nhân Viên | Quản Lý Bán Hàng</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!--===============================================================================================-->
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="time()">
    <script>
    // swal("Xin Chào Admin", "Chúc Bạn 1 Ngày Tốt Lành Nhé", "");
    </script>
    <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> QUẢN
                    LÝ SẢN PHẨM</a>
            </div>
            <div class="collapse navbar-collapse mt-8" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home" data-toggle="tooltip" data-placement="bottom"
                            title="NHÂN VIÊN">Sản Phẩm</a></li>
                    <li><a href="index.php" data-toggle="tooltip" data-placement="bottom" title="ĐIỂM DANH">Trang
                            chủ</a></li>
                    <li><a href="index.php?act=adddm" data-toggle="tooltip" data-placement="bottom"
                            title="TIỀN LƯƠNG">Danh mục</a></li>
                    <li><a href="index.php?act=addsp" data-toggle="tooltip" data-placement="bottom"
                            title="LỊCH CÔNG TÁC">SẢN PHẨM</a>
                    </li>
                    <li><a href="#contact" data-toggle="tooltip" data-placement="bottom" title="BÁO CÁO">Thống kê</a>
                    </li>
                    <li><a href="index.php?act=addcm" data-toggle="tooltip" data-placement="bottom" title="SỰ KIỆN">Bình
                            luận</a></li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="TÀI KHOẢN"><b>Tài Khoản</b>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown">
                            <li><a href="index.html" data-toggle="tooltip" data-placement="bottom"
                                    title="ĐĂNG XUẤT"><b>Đăng xuất <i class="fas fa-sign-out-alt"></i></b></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>