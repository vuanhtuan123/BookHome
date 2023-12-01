<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - EduBook</title>
    <script src="view\js\jquery-3.3.1.js"></script>
    <script src="view\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="view\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view\fonts\fontawesome\css\all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view\css\style.css">
    <link rel="stylesheet" href="view\css\home.css">
</head>

<body>
    <div class="app">
        <header id="header">
            <!-- header top -->
            <div class="header__top">
                <div class="container">
                    <section class="row flex">
                        <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                            <span>EduBook - Cội nguồn của tri thức</span>
                        </div>

                        <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                            <ul class="header__top-list">
							<?php
									if(isset($_SESSION['idTaiKhoan'])){
										echo '<li class="header__top-item">
                                    <a style="color:white;"class="header__top-link">Xin chào '.$_SESSION['tentk'].'</a>
                                </li>';
									}?>
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">
                                        Hỏi đáp</a>
                                </li>
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">Hướng dẫn</a>
                                </li>
								<?php
									if(isset($_SESSION['idTaiKhoan'])){
										echo '<li class="header__top-item">
                                    <a href="logout.php" class="header__top-link">Đăng xuất</a>
                                </li>';
									}
									else{
										echo '<li class="header__top-item">
                                    <a href="dangkky.php" class="header__top-link">Đăng ký</a>
                                </li>
                                <li class="header__top-item">
                                    <a href="index.php?act=login" class="header__top-link">Đăng nhập</a>
                                </li>';
									}
								?>

                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
            <!--end header top -->

            <!-- header bottom -->
            <div class="header__bottom">
                <div class="container">
                    <section class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                            <h1 class="header__heading">
                                <a href="index.php" class="header__logo-link">
                                    <img src="view/images1/logo1.png" alt="Logo" class="header__logo-img">
                                </a>
                            </h1>
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                            <select name="" id="" class="header__search-select">
                                <option value="0">All</option>
                                <option value="1">Sách tiếng việt</option>
                                <option value="2">Sách sách nước ngoài</option>
                                <option value="3">Manga-Comic</option>

                            </select>
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                            <button class="header__search-btn">
                                <div class="header__search-icon-wrap">
                                    <i class="fas fa-search header__search-icon"></i>
                                </div>
                            </button>
                        </div>

                        <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                            <div class="header__call-icon-wrap">
                                <i class="fas fa-phone-alt header__call-icon"></i>
                            </div>
                            <div class="header__call-info">
                                <div class="header__call-text">
                                    Gọi điện tư vấn
                                </div>
                                <div class="header__call-number">
                                    039.882.3232
                                </div>
                            </div>
                        </div>

                        <a href="?act=cart" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                            <div class="header__cart-icon-wrap">
                                <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
            <!--end header bottom -->

            <!-- header nav -->
            <div class="header__nav">
                <div class="container">
                    <section class="row">
                        <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                            <i class="fas fa-bars header__nav-menu-icon"></i>
                            <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                        </div>

                        <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a href="index.php" class="header__nav-link">Trang chủ</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="category.html" class="header__nav-link">Danh mục sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="product.html" class="header__nav-link">Sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="post.html" class="header__nav-link">Bài viết</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="#" class="header__nav-link">Tuyển cộng tác viên</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="contact.html" class="header__nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </header>
        <!--end header nav -->

        <!-- slide - menu list -->
