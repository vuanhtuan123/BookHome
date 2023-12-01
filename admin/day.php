<div style="margin-top: 80px;">
    <style>
        input[type="date"] {
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
        <a href="?act=statistical" class="btn btn-info">Danh thu theo tháng</a>
    <br>
    <input id="monthInput" type="date" name="date">
    <a id="filterLink" href="index.php?act=day&detailDay=" class="btn btn-circle">Lọc</a>

    <table class="table table-bordered " id="myTable"style="margin-top: 10px;" >
        <thead class="">
        <tr class="">
            <th>Ngày</th>
            <th>Tháng</th>
            <th>Năm</th>
            <th>Tổng doanh thu</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(count($data)){
            foreach ($data as $item){
                echo '<tr>';
                echo '<td style="text-align: center;">' . $item['order_day'] . '</td>';
                echo '<td style="text-align: center;">' . $item['order_month'] . '</td>';
                echo '<td style="text-align: center;">' . $item['order_year'] . '</td>';
                echo '<td style="text-align: center;">' . $item['total_amount'] . '</td>';
                echo '</tr>';
            }
        }else{
            echo '<tr>';
            echo '<td style="text-align: center;" colspan="4">KHông có dữ liệu</td>';
            echo '</tr>';
        }?>

        </tbody>
    </table>
</div>
<script>
    document.getElementById('monthInput').addEventListener('change', function() {
        var selectedDate = this.value;
        var filterLink = document.getElementById('filterLink');
        filterLink.href = "index.php?act=day&day=" + selectedDate;
    });
    // Lấy tham số day từ URL
    const urlParams = new URLSearchParams(window.location.search);
    const dayParam = urlParams.get('day');

    // Nếu có giá trị day trên URL
    if (dayParam) {
        // Gán giá trị day từ URL vào input
        document.getElementById('monthInput').value = dayParam;
    }

    // Thêm sự kiện change vào input để cập nhật URL khi giá trị thay đổi
    document.getElementById('monthInput').addEventListener('change', function() {
        var selectedDate = this.value;
        var filterLink = document.getElementById('filterLink');
        filterLink.href = "index.php?act=day&detailDay=" + selectedDate;
    });


</script>
