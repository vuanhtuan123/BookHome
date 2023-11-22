<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/comment.php";
$input = json_decode(file_get_contents('php://input'), true);
$coment = $input['comm_details'];
$id_pro = $input['id'];
$created_at = date("Y-m-d");
insert_comment($coment, $created_at, $id_pro);