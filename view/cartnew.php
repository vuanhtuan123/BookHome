<style>
    .cart {

    }

    .cart__head {
        padding: 1.6rem 0;
        margin-top: 2rem;
        border-bottom: 1px solid #ccc;
        background: #fafafa;
        border-radius: 0.2rem;
    }

    .cart__head-name {
        font-size: 1.6rem;
        font-weight: 500;
    }

    .cart__head-quantity {
        font-size: 1.6rem;
        font-weight: 500;
    }

    .cart__head-price {
        font-size: 1.6rem;
        font-weight: 500;
    }

    .cart__body {
        padding: 2rem 0;
        border-bottom: 1px solid #efefef;
    }

    .cart__body-name {
        display: flex;

    }

    .cart__body-name-img {
        width: 20%;
    }

    .cart__body-name-img img {
        max-width: 100%;
    }

    .cart__body-name-title {
        font-size: 1.6rem;
        font-weight: 500;
        color: var(--text-color);
    }

    .cart__body-name-title:hover {
        color: var(--primary-color);
        text-decoration: none;
        opacity: 0.8;
    }

    .cart__body-quantity {
        font-size: 1.4rem;
    }

    .cart__body-quantity-minus {
        width: 2rem;
        height: 3rem;
        outline: none;
    }

    .cart__body-quantity-total {
        width: 3rem;
        height: 3rem;
        margin-left: -0.5rem;
        outline: none;
        text-align: center;

    }

    .cart__body-price span {
        font-size: 1.8rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    .cart__body-price a {
        display: block;
        width: 7rem;
        height: 2.6rem;
        background: var(--primary-color);
        color: var(--white-color);
        font-size: 1.4rem;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.2rem;
        margin-top: 0.6rem;
    }

    .cart__body-price a:hover {
        text-decoration: none;
        opacity: 0.8;
    }

    .cart__foot {
        padding: 2rem 0;
    }

    .cart__foot-update {

    }

    .cart__foot-update-btn {
        padding: 1rem 1.8rem;
        font-size: 1.4rem;
        outline: none;
        border: none;
        background: var(--primary-color);
        border-radius: 0.2rem;
        color: var(--white-color);
        cursor: pointer;
    }

    .cart__foot-total {
        font-size: 1.8rem;
        font-weight: 500;
    }

    .cart__foot-price {
        font-size: 2rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    .cart__foot-price-btn {
        font-size: 1.4rem;
        outline: none;
        border: none;
        background: var(--primary-color);
        border-radius: 0.2rem;
        color: var(--white-color);
        cursor: pointer;
        margin-top: 2rem;
        width: 20rem;
        height: 4rem;
    }

    .cart__foot-price-btn:hover,
    .cart__foot-update-btn:hover {
        opacity: 0.8;
    }


    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .cart__body-quantity-plus {
        width: 2rem;
        height: 3rem;
        margin-left: -0.5rem;
        outline: none;
    }


    @media (max-width: 992px) {
        .cart__body-name-img {
            width: 36%;
        }
    }

    @media (max-width: 768px) {
        .cart__body-name-img {
            width: 60%;

        }

        .cart__foot-price-btn {
            width: 11rem;
        }
    }


    .pc {
        position: relative;
    }

    .menu__nav {
        position: absolute;
        top: -2rem;
        left: 0;
        z-index: 10;
        box-shadow: 1px 1px 5px 1px #ccc;
        display: none;
    }

    .menu__nav {
        padding: 0;

    }

    .menu__list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .menu__item {
        padding-left: .15rem;
    }

    .menu__item-icon {
        width: 1.6rem;
        height: 1.6rem;
        display: inline-block;
        margin-right: 1.5rem;
    }

    .menu__item:hover {
        background: var(--primary-color);

    }

    .menu__item:hover .menu__link {
        color: var(--white-color);
        background: var(--primary-color);
        text-decoration: none;
        fill: var(--white-color);
    }

    .menu__item--active .menu__link {
        color: var(--primary-color);
        fill: var(--primary-color);
    }

    .menu__link {
        font-size: 1.5rem;
        font-weight: 500;
        color: var(--text-color);
        display: block;
        padding: 1rem 2.8rem;
        text-decoration: none;
        border-top: 1px solid #eff0f3;
        background: var(--white-color);
        background-clip: padding-box;
        display: flex;
        align-items: center;
    }


</style>
<section class="cart">
    <div class="container">
        <article class="row cart__head pc">
            <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                <ul class="menu__list">
                    <li class="menu__item menu__item--active">
                        <a href="#" class="menu__link">
                            <img src="images1/item/baby-boy.png" alt="" class="menu__item-icon" id="Capa_1"
                                 enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách Tiếng Việt</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <img src="images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1"
                                 enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách nước ngoài</a>
                    </li>

                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <img src="images1/item/1380754_batman_comic_hero_superhero_icon.png" alt=""
                                 class="menu__item-icon" viewBox="0 0 512 512" width="1012" height="512">
                            Manga - Comic</a>
                    </li>

                </ul>
            </nav>
            <div class="col-6 cart__head-name">
                Thông tin sản phẩm
            </div>
            <div class="col-2 cart__head-quantity">
                Số lượng
            </div>
            <div class="col-2 cart__head-price">
                Đơn giá
            </div>
            <div class="col-2 cart__head-price">
                Thao tác
            </div>
        </article>

        <article class="row cart__body">
            <?php
            if (isset($text)) {
                echo '<div class="col-12 cart__data-price" style="font-size: 1.8rem;text-align: center">Bạn đã thanh toán thành công</div>';
            } else {
                if ($carts->num_rows > 0) {
                    while ($row = $carts->fetch_assoc()) {
                        $total_price = $row['price'] * $row['quantity']; // Tính tổng giá trị
                        echo '<div class="col-6 cart__body-name">
                    <div class="cart__body-name-img">
                        <img src="upload/' . $row['img'] . '" alt="Hình ảnh sản phẩm">
                    </div>
                    <a href="#" class="cart__body-name-title" style="margin-left: 15px">' . $row['name'] . '</a>
                </div>
                <div class="col-2 cart__body-quantity">
                   <a href="?act=cart&action=decrement&id=' . $row['cart_id'] . '"> <input type="button" value="-" class="cart__body-quantity-minus"></a>
                    <input type="number" readonly step="1" min="1" max="999" value="' . $row['quantity'] . '">
                   <a href="?act=cart&action=increment&id=' . $row['cart_id'] . '"> <input type="button" value="+" class="cart__body-quantity-plus"></a>
                </div>
                <div class="col-2 cart__body-price">
                    <span id="total_price">' .$total_price . '</span>
                </div>
                <div class="col-2 cart__body-price">
                    <a href="?act=cart&action=delete&id=' . $row['cart_id'] . '">Xóa</a>
                </div>';
                    }
                } else {
                    echo '<div class="col-12 cart__data-price" style="font-size: 1.8rem;text-align: center">Không có sản phẩm</div>';
                }
            }
            ?>

        </article>

        <article class="row cart__foot">
            <div class="col-6 col-lg-6 col-sm-6 cart__foot-update">
            </div>

            <p class="col-3 col-lg-3 col-sm-3 cart__foot-total">
                Tổng cộng:
            </p>

            <span class="col-3 col-lg-3 col-sm-3 cart__foot-price">
                    <h2 id="total-price"><?php echo $total ?>
                    </h2>
                        <a href="index.php?act=thanhtoan">
                <button type="submit" class="cart__foot-price-btn">Thanh toán</button>
                        </a>
                </span>
        </article>
    </div>
</section>


</body>

</html>