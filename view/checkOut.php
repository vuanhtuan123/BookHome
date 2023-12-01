<style>
    .containerfull {
        width: 100%;
        max-width: 120rem;
        margin: 0 auto;
        padding: 0 1.6rem;
    }

    .viewcart {
        margin-bottom: 2rem;
    }

    .ttdathang h2 {
        font-size: 2.4rem;
        margin-bottom: 1.6rem;
    }

    #order input[type="text"] {
        width: 100%;
        padding: 1rem;
        margin-bottom: 1.6rem;
        font-size: 1.6rem;
    }

    #order label {
        font-size: 1.6rem;
    }

    h2 {
        font-size: 2.4rem;
        margin-bottom: 1.6rem;
    }

    .total {
        margin-bottom: 2rem;
    }

    .boxcart {
        padding: 1.6rem;
        border: 1px solid #ccc;
        margin-bottom: 1.6rem;
    }

    .bggray {
        background-color: #f5f5f5;
    }

    .pttt h3 {
        font-size: 1.8rem;
        margin-bottom: 1.6rem;
    }

    button {
        padding: 1rem 2rem;
        font-size: 1.6rem;
        cursor: pointer;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 0.4rem;
    }

    button:hover {
        background-color: #2980b9;
    }
    b{
        font-size: 1.6rem;
    }

</style>
    <section class="containerfull">
        <div class="container">
            <form id="order" method="POST" action="">
            <div class="col9 viewcart">
                <div class="ttdathang">
                    <h2>Thông tin người đặt hàng</h2>
                        <label for="fullname" required><b>Họ và tên</b></label>
                        <input type="text" placeholder="Nhập họ tên đầy đủ" name="name" id="fullname" required />
                        <label for="address"><b>Địa chỉ</b></label>
                        <input type="text" placeholder="Nhập địa chỉ" name="address" id="address" required />
                        <label for="phone"><b>Điện thoại</b></label>
                        <input type="text" placeholder="Nhập điện thoại" name="phone" id="phone" required />

                </div>

            </div>
            <div class="col3">
                <div class="pttt">
                    <div class="boxcart">
                        <h3>Phương thức thanh toán:</h3>
                        <input type="radio" name="checkout" value="cod"  />
                        <p style="font-size: 1.6rem">Tiền mặt</p>
                        <input type="radio" name="checkout" value="banking" />
                        <p style="font-size: 1.6rem">Chuyển khoản</p>
                        <br />

                    </div>
                </div>
                <div class="total">
                    <div class="boxcart bggray">
                        <h3>Tổng thanh toán:
                    <?php echo $total ?>
                        </h3>
                    </div>
                </div>
                <button type="submit" name="submit-order" onclick="submitForm()">Thanh toán</button>
            </div>
            </form>
        </div>
    </section>

