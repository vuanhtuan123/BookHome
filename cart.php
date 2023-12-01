<?php
session_start();
	include './model/giohang.php';
	$giohang = null;
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    updateCart($action,$id);
}

if(isset($_SESSION['idTaiKhoan'])){
    if(isset($_POST['user_id'])){
        checkOut($_SESSION['idTaiKhoan']);
        $text = "Bạn đã thanh toán thành công";
    }
    $carts = getCart($_SESSION['idTaiKhoan']);
    $total = getTotalCart($_SESSION['idTaiKhoan']);
    }else{
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
//die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <script src="./EduBook-Cookie/EduBook-Cookie/js/jquery-3.3.1.js"></script>
    <script src="./EduBook-Cookie/EduBook-Cookie/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/css/style.css">
    <link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/css/cart.css">
</head>
<body>
    <!-- header -->
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
                                    <a href="dangnhap.php" class="header__top-link">Đăng nhập</a>
                                </li>';
									}
								?>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

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

                    <a href="cart.php" class="col-lg-1 col-md-1 col-sm-0 header__cart">
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
                                <a href="index.html" class="header__nav-link">Trang chủ</a>
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
    <!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-down"></i></button>
    <!-- cart -->
	<section class="cart">
		<div class="container">
			<article class="row cart__head pc">
				<nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--active">
                            <a href="#" class="menu__link">
                            <img src="images1/item/baby-boy.png" alt=""  class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách Tiếng Việt</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                            <img src="images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách nước ngoài</a>
                        </li>

                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                <img src="images1/item/1380754_batman_comic_hero_superhero_icon.png" alt="" class="menu__item-icon"  viewBox="0 0 512 512" width="1012" height="512">

                            Manga - Comic</a>
                        </li>

                    </ul>
                </nav>
				<div class="col-3 cart__head-name">
					Thông tin sản phẩm
				</div>
                <div class="col-3 cart__head-name" style="text-align: center">
                    Ảnh
                </div>
				<div class="col-3 cart__head-quantity">
					Số lượng
				</div>
				<div class="col-3 cart__head-price">
					Đơn giá
				</div>

                <?php
                if(isset($text)){
                    echo '<div class="col-12 cart__data-price" style="font-size: 1.8rem;text-align: center">Bạn đã thanh toán thành công</div>';
                }else{
                    if ($carts->num_rows > 0) {
                        // Lặp qua từng hàng dữ liệu
                        while ($row = $carts->fetch_assoc()) {
                            echo '<div class="col-3 cart__data-name" style="font-size: 1.8rem">' . $row['name'] . '</div>';
                            echo '<div class="col-3 cart__data-image" style="text-align: center">';
                            echo '<img src="upload/' . $row['img'] . '" alt="Hình ảnh sản phẩm" style="height: 19rem;text-align:center">';
                            echo '</div>';
                            echo '<div class="col-3 cart__data-quantity" style="font-size: 1.8rem;">';
                            echo $row['quantity'];
                            echo '<a href="?action=decrement&id=' . $row['cart_id'] . '" style="margin-left: 3rem; font-size: 2rem; cursor: pointer;">-</a>';
                            echo '<a href="?action=increment&id=' . $row['cart_id'] . '" style="margin-left: 3rem; font-size: 2rem; cursor: pointer;">+</a>';
                            echo '</div>';
                            echo '<div class="col-3 cart__data-price" style="font-size: 1.8rem">' . $row['price'] . '</div>';
                        }
                    } else {
                        echo '<div class="col-12 cart__data-price" style="font-size: 1.8rem;text-align: center">Không có sản phẩm</div>';
                    }
                }
                // Kiểm tra xem truy vấn có dữ liệu trả về không

                ?>
                <span style="font-size: 2rem;margin-right: 10rem;">Tổng tiền thanh toán <?php echo  $total ?></span>

                <form action="cart.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['idTaiKhoan'] ?>">
                    <button style="font-size: 1.9rem; float: right" class="btn btn-success">Thanh toán</button>

                </form>

            </article>
		</div>
	</section>
    <!--end cart -->

    <!-- footer -->
    <footer>
        <section class="footer__top">
            <div class="container">
                <div class="row">
                    <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                        <h4 class="footer__top-intro-heading">
                            Về chúng tôi
                        </h4>
                        <div class="footer__top-intro-content">
                            Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê
                            đọc sách trên khắp cả nước.Chúng tôi sẽ liên tục cập
                            nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất
                            giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br>
                            Điện thoại: 0352 860 701 <br>
                            Email: teamed2@gmail.com <br>
                            Zalo:  039.882.3232 <br>
                        </div>
                    </article>

                    <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                        <h4 class="footer__top-policy-heading">
                            Chính sách mua hàng
                        </h4>

                        <ul class="footer__top-policy-list">
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                            </li>
                        </ul>
                    </article>

                    <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                        <h4 class="footer__top-contact-heading">
                            Hotline liên hệ
                        </h4>

                        <div class="footer__top-contact">
                            <div class="footer__top-contact-icon">
                                <img src="images/phone_top.png" class="footer__top-contact-img">
                            </div>

                            <div class="footer__top-contact-phone-wrap">
                                <div class="footer__top-contact-phone">
                                    039.882.3232
                                </div>
                                <div class="footer__top-contact-des">
                                    (Giải đáp thắc mắc 24/24)
                                </div>
                            </div>
                        </div>

                        <h4 class="footer__top-contact-heading">
                            Kết nối với chúng tôi
                        </h4>

                        <div class="footer__top-contact-social">
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/facebook.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/youtube.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/tiktok.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/zalo.png">
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container">
                <div class="row">
                    <span class="footer__bottom-content">@Bản quyền thuộc về edubook | Thiết kế bởi team ED2 </span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->
    <script src="js/jq.js"></script>
</body>
</html>