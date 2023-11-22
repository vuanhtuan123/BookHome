<?php
function insert_sanpham($tensp,$hinh,$giasp,$mota,$iddm)
{
    $sql = "insert into sanpham(name,img,price,mota,iddm) values('$tensp','$hinh','$giasp','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" .$id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw="", $iddm=0)
{
    $sql = "select * from sanpham where 1";
    if($kyw!=""){
        $kyw.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }

    $sql.= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function find_sanpham_detail($id)
{

    $sql = "select * from sanpham where id = '".$id."' limit 1";
    $sanpham = pdo_query($sql);
    return $sanpham;
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id,$iddm, $tensp, $giasp, $mota, $hinh)
{
    if($hinh!=""){
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."', price='".$giasp."', mota='".$mota. "', img='".$hinh."' where id=" .$id;
    }else{
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=" .$id;
    }
    pdo_execute($sql);
}
