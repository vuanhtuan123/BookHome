<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
      $hinh ="<img src='".$hinhpath."' height='80'>";
    }else{
      $hinh ="No photo";
    }
  

?>
<div class="row2">
         <div class="row2 font_title">
          <h1 class="mt-56">Cap nhat sach</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select name="iddm" >
              <option value="0" selected>Tất cả</option>
            <?php
              foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              if($iddm==$id){
                echo '<option value="'.$id.'" selected>'.$name.'</option>';
              }else{
                echo '<option value="'.$id.'">'.$name.'</option>';
              }
              }
            ?>
          </select>
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên" value="<?=$name?>">
           </div>
           <div class="row2 mb10">
            <label>Hình </label> <br>
            <input type="file" name="hinh">
            <?=$hinh?>
           </div>
           <div class="row2 mb10">
            <label>Giá </label> <br>
            <input type="text" name="giasp" value="<?=$price?>">
           </div>
           <div class="row2 mb10">
            <label>mota </label> <br>
            <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
           </div>
           <div class="row mb10 ">
              <input type="hidden" name="id" value="<?=  $_GET['id'];
?>">
              <input class="mr20" type="submit" name="capnhap" value="Cập Nhật">
              <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="Danh sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
          </div>

</div>