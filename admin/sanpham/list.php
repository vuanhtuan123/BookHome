<form action="index.php?act=litsp" method="post">
    <input type="text" name="kyw" plac>
    <select name="iddm">
        <option value="0" selected>Tất cả</option>
        <?php
            foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="'.$id.'">'.$name.'</option>';
            }
        ?>
    </select>
    <input type="submit" name="listok" value="Go">
</form>
<table class="table table-bordered" id="myTable">
    <thead>
        <tr class="ex">
            <th width="auto">Mã loại</th>
            <th width="auto">Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>lượt xem</th>
            <th>Mô tả</th>
            <th width="5px; !important">Tính Năng</th>
        </tr>
    </thead>
    <?php 
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;

                    if(is_file($hinhpath)){
                        $hinh ="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh ="No photo";
                    }
                    
                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$view.'</td>
                    <td>'.$mota.'</td>
                    <td>
                        <a href="" class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a href="'.$suasp.'" class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a href="'.$xoasp.'" class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>
                    </td>
                </tr>';
                }
            ?>
</table>
<div class="row mb10">
    <input type="button" value="Chọn Tất cả">
    <input type="button" value="Bỏ chọn Tất cả">
    <input type="button" value="Xóa các mục tiêu">
    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
</div>