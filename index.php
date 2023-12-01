<?php

include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include 'model/giohang.php';
include "global.php";
if(empty($_GET['act'])){
    $_GET['act'] = null;
}
$dsdm = loadall_danhmuc();
if($_GET['act'] != 'login'){
    include "view/header.php";
}
$spnew = loadall_sanpham_home();
if(isset($_GET['iddm'])){
    $spnew = loadsanpham($_GET['iddm']);
}
$dstopth=loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'sanphamct':
            include "view/product.php";
            break;
        case 'lienhe':

            include "view/lienhe.php";
            break;
        case 'login':
            include "dangnhap.php";
            break;
        case 'product':
            if(isset($_GET['idsp'])){
            $sp = getProduct($_GET['idsp'])[0];
            $comments = getComment($_GET['idsp']);
            include "view/product.php";
            break;
            }
        case 'cart':
            $giohang = null;
            if(isset($_SESSION['idTaiKhoan'])) {
                if (isset($_GET['action']) && isset($_GET['id'])) {
                    $action = $_GET['action'];
                    $id = $_GET['id'];
                    if($_GET['action'] == 'delete'){
                        deleteCart($id);
                    }
                    updateCart($action, $id);
                }
                if (isset($_SESSION['idTaiKhoan'])) {
                    if (isset($_POST['user_id'])) {
                        checkOut($_SESSION['idTaiKhoan']);
                        $text = "Bạn đã thanh toán thành công";
                    }
                    $carts = getCart($_SESSION['idTaiKhoan']);
                    $total = getTotalCart($_SESSION['idTaiKhoan']);
                } else {
                    header("Location: index.php?act=login");
                }
            }else{
                echo "<h1 style='text-align: center' > ban chua dang nhap</h1>";
                echo "<a href='index.php?act=login' style='text-align: center'><h3>Dang nhap tai day</h3></a>";
                die;
            }
            include "view/cartnew.php";

            break;
        case 'thanhtoan':
            if(isset($_SESSION['idTaiKhoan'])){
                $total = getTotalCart($_SESSION['idTaiKhoan']);
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if($total > 0){
                        if($_POST['checkout'] == 'cod'){
                            checkouCod($_SESSION['idTaiKhoan'],$_POST['name'],$_POST['address'],$_POST['phone']);
                        }else{
                            checkOutOnline($_SESSION['idTaiKhoan'],$_POST['name'],$_POST['address'],$_POST['phone']);
                        }
                    }
                }
                include "view/checkOut.php";
            }else{
                echo "ban chua dang nhap";
            }
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
if($_GET['act'] != 'login'){
    include "view/footer.php";
}
?>