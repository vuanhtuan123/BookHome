<?php

include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
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
            include "view/taikhoan/taikhoan.php";
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