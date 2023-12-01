<div style="margin-top: 80px;">
    <a href="?act=order-items" class="btn btn-info">Các đơn đã được thanh toán</a>
    <br>
    <table class="table table-bordered " id="myTable"style="margin-top: 10px;" >
        <thead class="">
        <tr class="">
            <th>Mã người dùng</th>
            <th>Tổng giá</th>
            <th>Trạng thái</th>
            <th >Xem chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($orders as $row){
            echo '<tr>';
            echo '<td style="text-align: center;">' . $row['user_id'] . '</td>';
            echo '<td style="text-align: center;">' . $row['total_amount'] . '</td>';
            echo '<td style="text-align: center;">Chưa được thanh toán</td>';
            echo '<td style="text-align: center;"><a href="?act=detail-unoder&user_id=' . $row['user_id'] . '">Xem chi tiết</a></td>';
            echo '</tr>';

        }?>
        </tbody>
    </table>
</div>