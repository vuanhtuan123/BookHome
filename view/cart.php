<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-down"></i></button>
<!-- cart -->
<section class="cart">
    <div class="container">
        <article class="row cart__head pc">
            <div class="col-3 cart__head-name" style="font-size: 2rem">
                Thông tin sản phẩm
            </div>
            <div class="col-3 cart__head-name" style="text-align: center;font-size: 2rem">
                Ảnh
            </div>
            <div class="col-3 cart__head-quantity" style="font-size: 2rem">
                Số lượng
            </div>
            <div class="col-3 cart__head-price" style="font-size: 2rem">
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
                        echo '<a href="?act=cart&action=decrement&id=' . $row['cart_id'] . '" style="margin-left: 3rem; font-size: 2rem; cursor: pointer;">-</a>';
                        echo '<a href="?act=cart&action=increment&id=' . $row['cart_id'] . '" style="margin-left: 3rem; font-size: 2rem; cursor: pointer;">+</a>';
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

            <form action="index.php?act=cart" method="post">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['idTaiKhoan'] ?>">
                <button style="font-size: 1.9rem; float: right" class="btn btn-success">Thanh toán</button>

            </form>

        </article>
    </div>
</section>
<!--end cart -->