<?php 
    include "../model/pdo.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    pdo_execute($sql);
                    $thongbao="Thêm thành công";
                }
               
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $sql="select *from danhmuc order by name";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;

            default:
            include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
    
?>