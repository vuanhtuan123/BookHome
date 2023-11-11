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
                    extract($danhmuc)
                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'g</td>
                    <td>
                        <a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>
                    </td>
                </tr>';
                }
            ?>
</table>
