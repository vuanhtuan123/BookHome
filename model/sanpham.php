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
function loadsanpham($id)
{
    $sql = "SELECT sanpham.*
FROM sanpham
INNER JOIN danhmuc ON sanpham.iddm = danhmuc.id
where danhmuc.id = $id
ORDER BY sanpham.id DESC
LIMIT 0, 9;
";
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

function addToCart($idUser,$idProduct)
{
    $sql = "select * from carts where user_id = $idUser and product_id = $idProduct and status = 0";
    $product = pdo_query($sql);
    if($product){
        $sql = "UPDATE carts SET quantity = quantity + 1, date = NOW() WHERE user_id = $idUser AND product_id = $idProduct";
        pdo_execute($sql);
        header('Location:index.php?act=cart');
    }else{
        $sql = "insert into carts(user_id,product_id,date) values('$idUser','$idProduct',NOW())";
        pdo_execute($sql);
        header('Location:index.php?act=cart');
    }
    die;

}
function getOrders(){
    $sql ="SELECT oi.order_id,oi.name,oi.address,oi.phone, SUM(oi.quantity * sp.price) AS total_amount
FROM order_items oi
JOIN sanpham sp ON oi.product_id = sp.id
GROUP BY oi.order_id, oi.name,oi.address,oi.phone;
";
    return pdo_query($sql);
}
function detail($id){
    $sql ="SELECT oi.*, tk.`user`, sp.*, dm.`name` as danhmucname
FROM order_items oi
JOIN taikhoan tk ON oi.user_id = tk.id
JOIN sanpham sp ON oi.product_id = sp.id
JOIN danhmuc dm ON sp.iddm = dm.id
WHERE oi.order_id = $id;
";
    return pdo_query($sql);
}
function getUnplaced(){
    $sql ="SELECT oi.user_id, SUM(oi.quantity * sp.price) AS total_amount
FROM carts oi
JOIN sanpham sp ON oi.product_id = sp.id
where oi.status = 1
GROUP BY oi.user_id;
";
    return pdo_query($sql);
}
function detailUnoder($id){

    $sql ="SELECT oi.*, tk.`user`, sp.*, dm.`name` as danhmucname
FROM carts oi
JOIN taikhoan tk ON oi.user_id = tk.id
JOIN sanpham sp ON oi.product_id = sp.id
JOIN danhmuc dm ON sp.iddm = dm.id
WHERE oi.user_id = $id and oi.status = 1;
";
    return pdo_query($sql);
}
function getProduct($id){
    $sql = "select * from sanpham where id = '".$id."' limit 1";
    return pdo_query($sql);
}
function getComment($id){
    $sql = "SELECT * FROM comment 
    INNER JOIN sanpham ON comment.product_id = sanpham.id 
    WHERE product_id = " . $id . " 
    ORDER BY comment.id DESC";
    return pdo_query($sql);
}
function getALl(){
    $sql = "SELECT YEAR(oi.date) AS order_year,
       MONTH(oi.date) AS order_month,
       SUM(oi.quantity * sp.price) AS total_amount
FROM order_items oi
JOIN sanpham sp ON oi.product_id = sp.id
GROUP BY YEAR(oi.date), MONTH(oi.date)
";
    return pdo_query($sql);
}
function detailMonth($month){
    $sql = "SELECT YEAR(oi.date) AS order_year,
       MONTH(oi.date) AS order_month,
       SUM(oi.quantity * sp.price) AS total_amount
FROM order_items oi
JOIN sanpham sp ON oi.product_id = sp.id
                where MONTH(oi.date) = $month
GROUP BY YEAR(oi.date), MONTH(oi.date)
";
    return pdo_query($sql);
}

function getMonth($month){
    $sql = "
    SELECT YEAR(oi.date) AS order_year,
           MONTH(oi.date) AS order_month,
           SUM(oi.quantity * sp.price) AS total_amount
    FROM order_items oi
    JOIN sanpham sp ON oi.product_id = sp.id
    WHERE DATE_FORMAT(oi.date, '%Y-%m') = '$month'
    GROUP BY YEAR(oi.date), MONTH(oi.date)
";
    return pdo_query($sql);
}
function getDayAll(){
    $sql = "
    SELECT YEAR(oi.date) AS order_year, MONTH(oi.date) AS order_month, DAY(oi.date) as order_day, SUM(oi.quantity * sp.price) AS total_amount FROM order_items oi JOIN sanpham sp ON oi.product_id = sp.id GROUP BY YEAR(oi.date), MONTH(oi.date), DAY(oi.date)
";
    return pdo_query($sql);
}
function getDetail($day){
    $sql = "
    SELECT YEAR(oi.date) AS order_year, MONTH(oi.date) AS order_month, DAY(oi.date) as order_day, SUM(oi.quantity * sp.price) AS total_amount FROM order_items oi JOIN sanpham sp ON oi.product_id = sp.id where oi.date  = '$day' GROUP BY YEAR(oi.date), MONTH(oi.date), DAY(oi.date)
";
    return pdo_query($sql);
}