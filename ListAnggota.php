<?php

function GetListAnggota(){
    global $db;
    $query = "select * from AnggotaBaruIsmiDki";
    $result = $db -> query($query);
    $ros = $result -> fetchAll();
    return $ros;
}


?>