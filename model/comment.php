<?php
function insert_comment($commentContent, $commentCreated, $commentProductId)
{
    $sql = "insert into comment(content,product_id,created_at) values('$commentContent', '$commentProductId', '$commentCreated')";
    pdo_execute($sql);
}

function loadone_comment($product_id)
{
    $sql = "SELECT * FROM comment 
    INNER JOIN sanpham ON comment.product_id = sanpham.id 
    WHERE product_id = " . $product_id . " 
    ORDER BY comment.id DESC";
    $cm = pdo_query($sql);
    return $cm;
}

function loadAll_comment()
{
    $sql = "SELECT * FROM comment ORDER BY comment.id DESC";
    $cm = pdo_query($sql);
    return $cm;
}
function delete_comment($id)
{
    $sql = "delete from comment where id=" . $id;
    pdo_execute($sql);
}