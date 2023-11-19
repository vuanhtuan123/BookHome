<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addcm" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Nội dung </label> <br>
                <input type="text" name="comm_details" placeholder="nhập vào nội dung">
            </div>
            <div class="row2 mb10">
                <label>Sản phẩm </label> <br>
                <input type="text" name="id" placeholder="nhập vào sản phẩm">
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listcm"><input class="mr20" type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
    </div>
</div>