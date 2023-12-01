<div style="margin-top: 80px;">
    <style>
        input[type="month"] {
            width: 15%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 30px;
            height: 40px;
        }
    </style>
<!--    <a href="?act=statistical&type=month" class="btn btn-info">Danh thu theo tháng</a>-->
    <a href="?act=day" class="btn btn-info">Doanh thu theo ngày</a>
    <br>
    <input id="monthInput" type="month" name="month">
    <a id="filterLink" href="index.php?act=statistical&month=" class="btn btn-circle">Lọc</a>

    <table class="table table-bordered " id="myTable"style="margin-top: 10px;" >
        <thead class="">
        <tr class="">
            <th>Năm</th>
            <th>Tháng</th>
            <th>Tổng doanh thu</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(count($data)){
        foreach ($data as $item){
            echo '<tr>';
            echo '<td style="text-align: center;">' . $item['order_year'] . '</td>';
            echo '<td style="text-align: center;">' . $item['order_month'] . '</td>';
            echo '<td style="text-align: center;">' . $item['total_amount'] . '</td>';
            echo '</tr>';
        }
        }else{
            echo '<tr>';
            echo '<td style="text-align: center;" colspan="3">KHông có dữ liệu</td>';
            echo '</tr>';
        }?>

        </tbody>
    </table>
</div>
<script>
    document.getElementById('monthInput').addEventListener('change', function() {
        var selectedMonth = this.value;
        var filterLink = document.getElementById('filterLink');
        filterLink.href = "index.php?act=statistical&month=" + selectedMonth;
    });
    // Lấy tham số month từ URL
    const urlParams = new URLSearchParams(window.location.search);
    const monthParam = urlParams.get('month');

    // Nếu có giá trị month trên URL
    if (monthParam) {
        // Gán giá trị month từ URL vào input
        document.getElementById('monthInput').value = monthParam;
    }

    // Thêm sự kiện change vào input để cập nhật URL khi giá trị thay đổi
    document.getElementById('monthInput').addEventListener('change', function() {
        var selectedMonth = this.value;
        var filterLink = document.getElementById('filterLink');
        filterLink.href = "index.php?act=statistical&month=" + selectedMonth;
    });

</script>
