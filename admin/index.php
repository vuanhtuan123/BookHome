<?php
session_start();
if($_SESSION['role'] !=1){
    header('Location: ../dangnhap.php');
}
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/comment.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";

        }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                delete_danhmuc($_GET['id']);
            }
            ;
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                // echo 1234;die;
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                // echo $tenloai;die;
                update_danhmuc($id, $tenloai);
                $thongbao = " uPDATE thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


        /**sp */
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $hinh, $giasp, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // var_dump($listdanhmuc);
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];

            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                delete_sanpham($_GET['id']);
            }
            ;
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập Nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();

            include "sanpham/list.php";
            break;

        case 'addcm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $coment = $_POST['comm_details'];
                $id_pro = $_POST['id'];
                $created_at = date("Y-m-d");
                insert_comment($coment, $created_at, $id_pro);
                $thongbao = "Thêm thành công";
            }
            include "comment/add.php";
            break;
        case 'listcm':
            $listComment = loadAll_comment();
            include "comment/list.php";
            break;

        case 'xoacm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                delete_comment($_GET['id']);
            }
            ;
            $listComment = loadAll_comment();
            include "comment/list.php";
            break;
        case 'order-items':
            $orders = getOrders();
            include "order.php";
            break;
        case 'detail':
            if(isset($_GET['order_id'])){
                $order = detail($_GET['order_id']);
                include "detail-ordered.php";
            }
            break;
        case 'unplaced-orders':
            $orders = getUnplaced();
            include  "unplaced-orders.php";
            break;
        case 'detail-unoder':
            if(isset($_GET['user_id'])){
                $order = detailUnoder($_GET['user_id']);
                include  "detail-unplaced-orders.php";
                break;
            }
        case 'statistical':
            if(isset($_GET['month'])){
                $data = getMonth($_GET['month']);
            }else{
                $data = getALl();
            }
            include "statistical.php";
            break;
        case 'day':
            if(isset($_GET['detailDay'])){
               $data =  getDetail($_GET['detailDay']);
            }else{
                $data = getDayAll();
            }
            include "day.php";
            break;
        default:
            include "home.php";
            break;
    }
    ;
} else {
    include "home.php";
}
include "footer.php";