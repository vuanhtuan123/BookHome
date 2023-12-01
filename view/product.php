<link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/css/product.css">
<link rel="stylesheet" href="./EduBook-Cookie/EduBook-Cookie/css/style.css">

<article class="product__main  col-md-12 col-sm-12" style="padding: 0 200px;">
    <div class="row">
        <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
            <div class="product__main-img-primary">
                <img src="./upload/<?= $sp['img'] ?>">
            </div>

            <div class="product__main-img-list">
<!--                <img src="./upload/--><?php //= $sp['img'] ?><!--">-->
                <!-- <img src="./EduBook-Cookie/EduBook-Cookie/images1/product/hoc-tap-qua-du-an-2-01-1 1.jpg">
                <img src="./EduBook-Cookie/EduBook-Cookie/images1/product/hoc-tap-qua-du-an-2-01-1 2.jpg">
                <img src="./EduBook-Cookie/EduBook-Cookie/images1/product/23f849a0617301e63159067164aecfd2.png"> -->
            </div>
        </div>

        <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
            <div class="product__main-info-breadcrumb">
                Trang chủ / Sản phẩm
            </div>

            <a href="#" class="product__main-info-title">
                <h2 class="product__main-info-heading">
                    <?= $sp['name'] ?>
                </h2>
            </a>

            <div class="product__main-info-rate-wrap">
                <i class="fas fa-star product__main-info-rate"></i>
                <i class="fas fa-star product__main-info-rate"></i>
                <i class="fas fa-star product__main-info-rate"></i>
                <i class="fas fa-star product__main-info-rate"></i>
                <i class="fas fa-star product__main-info-rate"></i>
            </div>

            <div class="product__main-info-price">
                                <span class="product__main-info-price-current">
                                    <?= $sp['price'] ?>đ
                                </span>
            </div>

            <div class="product__main-info-description">
                Trong gần một thế kỷ qua, nhiều nhà giáo dục đã tiến hành nghiên cứu và ghi nhận về
                những lợi ích của việc học tập qua trải nghiệm, thực hành, và lấy người học làm trung
                tâm. Nhà bác học Albert Einste...
            </div>

            <div class="product__main-info-cart">
                <!--<div class="product__main-info-cart-quantity">
                    <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                    <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                    <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                </div>-->

                <div class="product__main-info-cart-btn-wrap">
                    <form action="addToCart.php" method="post">
                        <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                        <button class="product__main-info-cart-btn">
                            Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
            </div>

            <div class="product__main-info-contact">
                <a href="#" class="product__main-info-contact-fb">
                    <i class="fab fa-facebook-f"></i>
                    Chat Facebook
                </a>
                <div class="product__main-info-contact-phone-wrap">
                    <div class="product__main-info-contact-phone-icon">
                        <i class="fas fa-phone-alt "></i>
                    </div>

                    <div class="product__main-info-contact-phone">
                        <div class="product__main-info-contact-phone-title">
                            Gọi điện tư vấn
                        </div>
                        <div class="product__main-info-contact-phone-number">
                            ( 0352.860.701)
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row bg-white">
        <div class="col-12 product__main-tab">
            <a href="#" class="product__main-tab-link product__main-tab-link--active">
                Mô tả
            </a>
            <a href="#" class="product__main-tab-link">
                Đánh giá
            </a>
        </div>

        <div class="col-12 product__main-content-wrap">
            <p>
                <?php echo $sp['mota'] ?>
            </p>
            <!-- <h2 class="product__main-content-heading">
                Học tập qua dự án
            </h2>

            <p>
                <span>Trong gần một thế kỷ qua ,</span> nhiều nhà giáo dục đã tiến hành nghiên cứu và ghi nhận về những lợi ích của việc học tập qua trải nghiệm, thực hành, và lấy người học làm trung tâm. Nhà bác học Albert Einstein đã từng nói: “Ví dụ không phải là một cách khác để dạy học; ví dụ là cách duy nhất để dạy học”. Hầu như giáo viên nào cũng hiểu về sự hấp dẫn của việc học tập gắn liền với thực tế so với lớp học thuần lý thuyết.
            </p>

            <p>
                <span> Hai tác giả Hoàng Anh Đức và Tô Thụy Diễm Quyên </span> muốn đưa ra cách tiếp cận nhẹ nhàng và trực quan cho cả các giáo viên lẫn học sinh đối với Học tập qua dự án; sử dụng các dự án để làm những ví dụ đa dạng, đa chiều và gắn liền với thực tế nhất, qua đó giúp người đọc tự xây dựng nên kho tàng kiến thức và kỹ năng của chính bản thân mình.
            </p>

            <p>
                <span>Học tập qua dự án (PBL)</span> là một mô hình tổ chức lớp học nhằm làm năng động hoá lớp học truyền thống vốn lấy bài học làm trung tâm và giáo viên là trọng tâm. Học tập qua dự án hướng tới mục tiêu lâu dài, lấy người học làm trung tâm, liên nội dung và tích hợp các vấn đề thực hành thực tế. Bằng việc giáo viên lùi lại, đảm nhận vai trò dẫn dắt và trao quyền cho học sinh làm chủ quá trình học tập, học sinh hình thành tinh thần trách nhiệm đối với việc học, từ đó tạo dựng môi trường học tập chủ động hơn
            </p>
            <p> <span>Sách gồm 4 phần chính:</span></p>
            <p>
                <span>Phần I: Giới thiệu về học tập qua dự án</span> <br>
                Phần này gồm 3 chương, giới thiệu tổng quan về học tập qua dự án, 6 tính chất học tập của dự án học tập, và 8 bước triển khai học tập qua dự án trong trường phổ thông
            </p>
            <p>
                <span>Phần II: Triển khai dự án </span> <br>
                Phần này gồm 8 chương giúp giáo viên và học sinh biết cách đặt dự án vào một không gian phù hợp, biết cách triển khai dự án từ một không gian có sẵn.
            </p>
            <p>
                <span>Phần III: Giới thiệu về học tập qua dự án</span> <br>
                Phần này cung cấp kiến thức cơ bản về các biện pháp khác nhau để đánh giá Dự án học tập, cũng như các cấp độ khác nhau để đánh giá các hoạt động học tập.
            </p>
            <p>
                <span>Phần IV: Phụ lục </span> <br>
                Phần này mở rộng một số vấn đề như: Tư duy STEM trong học tập qua dự án, các vấn đề thường gặp và gợi ý hướng xử lí….

                Cuốn sách tích hợp với các mã QR code để giáo viên, học sinh có thể xem minh hoạ các dự án đã được thực hiện và đạt giải ở các cuộc thi Giáo viên sáng tạo.
            </p>
            <p>Trân trọng giới thiệu cùng bạn đọc.</p>

            <h2 class="thongtin">    <span>Thông tin chi tiết</span>
             </h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Công ty phát hành</th>
                                <td>NXB Giáo Dục Việt Nam</td>
                            </tr>
                            <tr><th>Ngày xuất bản</th><td>2019-03-15 11:47:36</td></tr>
                            <tr><th>Kích thước</th><td>19 x 27 cm</td></tr>
                            <tr><th>Loại bìa</th><td>Bìa gập</td></tr>
                            <tr><th>Số trang</th><td>168</td></tr>
                            <tr><th>SKU</th><td>4119626029817</td></tr>
                        </tbody>
                    </table>
                </div>

         -->
        </div>

    </div>
    <div class="customer-reviews row pb-4 pb-4  py-4 pb-4 py-4 py-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Bình luận sản phẩm</h3>
            <form id="formgroupcomment" method="post">
                <!-- <div class="form-group">
                    <label>Tên:</label>
                    <input name="comm_name" required="" type="text" id='form-name' class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="comm_mail" required="" type="email" class="form-control" id="pwd">
                </div> -->
                <input type="hidden" name="product_id" id="product_id" class="product_id"
                       value="<?php echo $id ?>">
                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea name="comm_details" required="" rows="8" id='formcontent'
                              class="form-control"></textarea>
                </div>
                <button type="submit" name="sbm" id="submitcomment" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>

    <div class="product-comment row pb-4 pb-4  py-4 pb-4 py-4 py-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php foreach ($comments as $comment): ?>
                <?php if (isset($comments)): ?>
                    <ul class=item-reviewer>

                    </ul>
                <?php endif; ?>
                <div class="comment-item">



                    <ul class=item-reviewer>
                        <!-- <div class="comment-item-user">
                            <img src="images/img/1.png" alt="" class="comment-item-user-img">

                            <li><b>Nguyễn Nhung</b></li>
                        </div> -->
                        <li>
                            <?php echo $comment['created_at'] ?>
                        </li>
                        <li>
                            <h4>
                                <?php echo $comment['content'] ?>
                            </h4>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>


        </div>
    </div>

</article>

