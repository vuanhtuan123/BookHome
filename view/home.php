<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
<!-- bestselling product -->
<section class="bestselling">
    <div class="container">
        <div class="row">
            <div class="bestselling__heading-wrap">
                <img src="view/images/bestselling.png" alt="Sản phẩm bán chạy" class="bestselling__heading-img">
                <div class="bestselling__heading">Top bán chạy nhất tuần</div>
            </div>
        </div>

        <section class="row">
            <?php
                    foreach ($dstopth as $sp) {
                        extract($sp);
                        $linksp="sanpham.php?idsp=".$id;
                        $img=$img_path.$img;
                        // echo($sp);
                        echo '<div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="'.$img.'" class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="'.$linksp.'" class="bestselling__product-link">'.$name.'</a>
                            </h3>
    
                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>
    
                            <span class="bestselling__product-price">
                                219.000đ
                            </span>
    
                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
            <!-- <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/image_195509_1_22250_thanh_ly_1.jpg" alt="Biểu tượng thất truyền" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Biểu tượng thất truyền</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            147.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/image_195509_1_31875.jpg" alt="Hỏa Ngục (Tái bản 2020)" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Hỏa Ngục (Tái bản 2020)</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            219.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/tr_-tue-do-thai_outline_15.9.2017-02.jpg" alt="Trí Tuệ Do Thái (Tái Bản 2018)" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Trí Tuệ Do Thái (Tái Bản 2018)</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            169.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/image_195509_1_36793.jpg" alt="Nhà Giả Kim (Tái Bản 2020)" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Nhà Giả Kim (Tái Bản 2020)</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            79.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/image_180164_2_287.jpg" alt="Tuổi Trẻ Đáng Giá Bao Nhiêu? " class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Tuổi Trẻ Đáng Giá Bao Nhiêu? </a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            80.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="view/images1/product/ttdc01.jpg" alt="Thám Tử Đã Chết - Tập 1 - Tặng Kèm Bookmark Tròn" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Thám Tử Đã Chết - Tập 1 - Tặng Kèm Bookmark Tròn</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            119.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Xem hàng</button>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row bestselling__banner">

                <div class="bestselling__banner-left col-lg-6">
                    <img src="view/images1/banner/920x420_phienchodocu.png" alt="Banner quảng cáo"
                    class="bestselling__banner-left-img">
                </div>
                <div class="bestselling__banner-right col-lg-6">
                    <img src="view/images1/banner/muonkiepnhansinh_resize_920x420.jpg" alt="Banner quảng cáo"
                    class="bestselling__banner-right-img">
                </div>
            </div>
        </div> -->
        </section>

        <!-- end bestselling product -->

        <!-- product -->
        <section class="product">
            <div class="container">
                <div class="row">
                    <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                        <div class="product__sidebar-heading">
                            <div class=""></div>
                            <h2 class="product__sidebar-title">
                                <img src="view/images1/item/1380754_batman_comic_hero_superhero_icon.png" alt=""
                                    class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                    viewBox="0 0 512 512" width="512">
                                Manga - Comic
                            </h2>
                        </div>

                        <nav class="product__sidebar-list">

                            <div class="row">
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="view/images1/product/【グラブル】「炭治郎&禰豆子&善逸&伊之助」の評価_性能検証｜鬼滅コラボ【グランブルーファンタジー】 - ゲームウィズ(GameWith).jfif"
                                        alt="" class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Manga</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="view/images1/product/My Anime For Life.jfif"
                                        class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Series Manga</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="view/images1/product/twd2_biaao_demo.jpg" alt=""
                                        class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Comics</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="view/images1/product/8936054081882.jpg" alt=""
                                        class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Truyện tranh Việt Nam</a>
                                </div>
                            </div>
                        </nav>

                        <div class="product__sidebar-img-wrap">
                            <!-- <img src="view/images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png" width="255" height="350" alt=""> -->
                            <video width="255" height="300" controls>
                                <source src="view/video/contra.st_1629123780_musicaldown.com.mp4" type="video/mp4">
                            </video>
                            <!-- <img src="view/images/banner_7.jpg" alt="" class="product__sidebar-img"> -->
                        </div>
                    </aside>

                    <article class="product__content col-lg-9 col-md-12 col-sm-12">
                        <nav class="row">
                            <ul class="product__list hide-on-mobile">
                                <li class="product__item product__item--active">
                                    <a href="#" class="product__link">Hành động - Phiêu lưu</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Bí ẩn - Siêu nhiên</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Giả tưởng - Khoa học</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Lãng mạn - Hài kịch</a>
                                </li>
                            </ul>

                            <div class="product__title-mobile">
                                <h2>Hành động - Phiêu lưu</h2>
                            </div>
                        </nav>

                        <div class="row product__panel">
                            <?php 
                                $i=0;
                            foreach ($spnew as $sp) {
                                extract($sp);
                                $hinh=$img_path.$img;
                                if(($i==2) || ($i==5) || ($i==8)){
                                    $mr="";
                                }else{
                                    $mr ="mr";
                                }
                                echo '<div class="product__panel-item col-lg-3 col-md-4 col-sm-6 '.$mr.'">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="'.$hinh.'" alt="" class="product__panel-img">
                                        </div>
                                    <h3 class="product__panel-heading">
                                        <a href="sanpham.php?idsp=' . $id . '" class="product__panel-link">'.$name.'</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    </div>
                                    
                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                        '.$price.'
                                        </span>
                                        </div>
                                        <div class="product__panel-price-sale-off">
                                        -20%
                                        </div>
                                        </div>
                                        
                                        </div>';
                                        $i+=1;
                                    }
                                    ?>

                            <!-- <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/600my-hero-academia-hoc-vien-sieu-anh-hung.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="product.html" class="product__panel-link">My Hero Academia - Tập 27: One’s Justice</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        20.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        19.580đ
                                    </span>
                                </div>

                                <div class="product__panel-price-sale-off">
                                    -11%
                                </div>
                            </div>
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/cau-ma-nha-xi-hanako---tap-1.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">"Cậu" Ma Nhà Xí Hanako - Tập 1</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        28.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        22.400đ
                                    </span>
                                </div>
                                <div class="product__panel-price-sale-off">
                                    -20%
                                </div>
                            </div>
                            
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/one-piece-tap-95_chuyen-chu-du-cua-oden_1.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">One Piece - Tập 95 (Bản Bìa Rời)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        19.500đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        16.575đ
                                    </span>
                                </div>
                                <div class="product__panel-price-sale-off">
                                    -15%
                                </div>
                            </div>
                            
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/mob-psycho-100_tap-3.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Mob Psycho 100 - Tập 3</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        30.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        21.000đ
                                    </span>
                                </div>

                                <div class="product__panel-price-sale-off">
                                    -30%
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/thanh-guom-diet-quy-tap-12.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Thanh Gươm Diệt Quỷ - Tập 12: Các Thượng Huyền Tập Hợp</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        25.000đ
                                    </span>
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/image_186914.jpg" alt="" class="product__panel-img" >
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">My Hero Academia - Tập 5: Todoroki Shoto: Khởi Đầu (Tái Bản)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        20.000đ
                                    </span>
                                </div>
                            </div>
                            
                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/image_186912.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">My Hero Academia - Tập 3: All Might (Tái Bản)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        20.000đ
                                    </span>
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                               <div class="product__panel-img-wrap">
                                    <img src="view/images1/product/one-22.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">One-Punch Man Tập 22: Ánh Sáng</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        21.000đ
                                    </span>
                                </div> 
                            </div> -->

                        </div>

                    </article>
                </div>
            </div>
        </section>
        <!--end product -->

        <!-- product love -->
        <section class="product__love">
            <div class="container">
                <div class="row bg-white">
                    <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                        <h2 class="product__love-heading">
                            Có thể bạn thích
                        </h2>
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product/image_187163.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                80.000đ
                            </span>
                            <span class="product__panel-price-current">
                                69.000đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product/image_188285.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Chuyện Con Mèo Dạy Hải Âu Bay</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                49.000đ
                            </span>
                            <span class="product__panel-price-current">
                                34.300đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product/8936186542176.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tôi thích một cô gái nhưng không dám ngỏ lời</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide 
                        ">
                                109.000đ
                            </span>
                            <span class="product__panel-price-current">
                                70.000đ
                            </span>
                        </div>
                    </div>
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product/biamem.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Con Chim Xanh Biếc Bay Về - Tặng Kèm 6 Postcard</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                150.000đ
                            </span>
                            <span class="product__panel-price-current">
                                112.500đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product//8936049524905.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">5 Centimet Trên Giây</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                50.000đ
                            </span>
                            <span class="product__panel-price-current">
                                39.500đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="view/images1/product/bia1_tobinhyen_2_1_1.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tô Bình Yên Vẽ Hạnh Phúc
                            </a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                78.000đ
                            </span>
                            <span class="product__panel-price-current">
                                63.960đ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product love -->