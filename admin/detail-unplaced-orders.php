<div style="margin-top: 80px;">
    <a href="?act=unplaced-orders" class="btn btn-success">Quay lại</a>
    <br>
    <table class="table table-bordered " id="myTable"style="margin-top: 10px;" >
        <thead class="">
        <tr class="">
            <th>Mã hàng</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Ngày mua</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($order as $item){
            echo '<tr>';
            echo '<td style="text-align: center;">' . $item['danhmucname'] . '</td>';
            echo '<td style="text-align: center;">' . $item['name'] . '</td>';
            echo '<td style="text-align: center;"><img src=../upload/' . $item['img'] . ' alt="Hình ảnh sản phẩm" style="height: 19rem;text-align:center"></td>';
            echo '<td style="text-align: center;">' . $item['price'] . '</td>';
            echo '<td style="text-align: center;">' . $item['date'] . '</td>';
            echo '<td style="text-align: center;">Chưa được thanh toán</td>';
            echo '</tr>';

        }?>
        </tbody>
    </table>
</div>