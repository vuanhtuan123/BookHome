<?php
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row2">
         <div class="row2 font_title">
          <h1 class="mt-56">Cap nhat sach</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <label> Mã sản phẩm </label> <br>
            <input type="text" name="masp" placeholder="nhập vào mã loại">
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên">
           </div>
           <div class="row2 mb10">
            <label>Hình </label> <br>
            <input type="file" name="hinh">
           </div>
           <div class="row2 mb10">
            <label>Giá </label> <br>
            <input type="text" name="giasp">
           </div>
           <div class="row2 mb10">
            <label>mota </label> <br>
            <input type="text" name="mota">
           </div>
           <div class="row mb10 ">
              <input class="mr20" type="submit" name="themmoi" value="Cập Nhật">
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="Danh sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
          </div>

</div>