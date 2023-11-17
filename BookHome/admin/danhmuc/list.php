<table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="auto">Tên Nhân Viên</th>
                    <th width="auto">Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Địa Chỉ</th>
                    <th>Chức Vụ</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <?php 
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=" .$id;
                    $xoadm="index.php?act=xoadm&id=" .$id;
                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'g</td>
                    <td>
                        <a href="" class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a href="'.$suadm.'" class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a href="'.$xoadm.'" class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>
                    </td>
                </tr>';
                }
            ?>
</table>
