<form action="index.php?act=litsp" method="post">
    <input type="text" name="kyw" plac>

    <input type="submit" name="listok" value="Go">
</form>
<table class="table table-bordered" id="myTable">
    <thead>
        <tr class="ex">
            <th width="auto">Mã comment</th>
            <th width="auto">Nội dung</th>
            <th>Mã sản phẩm</th>
            <th>Ngày thêm</th>
            <th width="5px; !important">Tính Năng</th>
        </tr>
    </thead>
    <?php
    foreach ($listComment as $comment) {
        extract($comment);
        $suasp = "index.php?act=suacm&id=" . $id;
        $xoasp = "index.php?act=xoacm&id=" . $id;

        echo ' <tr>
                    <td>' . $id . '</td>
                    <td>' . $content . '</td>
                    <td>' . $product_id . '</td>
                    <td>' . $created_at . '</td>
                    <td>
                        <a href="" class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a href="' . $suasp . '" class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a href="' . $xoasp . '" class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
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