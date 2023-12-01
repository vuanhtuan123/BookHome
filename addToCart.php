<?php
session_start();
$id = $_POST['id'];
include "model/pdo.php";
include "model/sanpham.php";
if(isset($_SESSION['role']) && $_SESSION['role'] ==0){
    addToCart($_SESSION['idTaiKhoan'],$id);
}else{
    header("Location: index.php?act=login");
}
