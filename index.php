<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
// include "model/taikhoan.php";
include "global.php";

$dsdm = loadall_danhmuc();
include "view/header.php";

$spnew = loadall_sanpham_home();
$dstopth=loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'dangky':
            if ((isset($_POST['dangky'])) && ($_POST['dangky'] )) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($user,$pass,$email);
                $thongbao="da dang ky thanh cong. vui long dang nhap de thuc hien chac nang binh luan hoac dat hang";
            };
            include "view/taikhoan/dangkky.php";
            break;
        case 'dangnhap':
            if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'] )) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser=checkuser($user, $pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    // $thongbao="Ban da dang ky thanh cong!";
                    header('Location: index.php');
                }else{
                    $thongbao="KTai khoan ko ton tai. vui long kiem tra hoac dang ky";
                }
            };
            include "view/taikhoan/dangnhap.php";
            break;
        case 'sanphamct':
            include "view/sanpham.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>