<?php
    function insert_taikhoan($user,$pass,$email)
    {
        $sql = "insert into account(user,pass,email) values('$user','$pass','$email')";
        pdo_execute($sql);
    }
function checkuser($user, $pass)
{
    $sql = "select * from account where user='".$user."' AND pass= '".$pass."' " ;
    $dm = pdo_query_one($sql);
    return $dm;
}
?>