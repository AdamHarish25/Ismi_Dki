<?php

function dapetIsi(){
    global $db;
    $isi = "select * from AnggotaBaruIsmiDki where ID=:ID";
    $result = $db -> query($isi);
    return $result;
}

function GetListAnggota(){
    global $db;
    $query = "select * from AnggotaBaruIsmiDki";
    $result = $db -> query($query);
    $ros = $result -> fetchAll();
    return $ros;
}


function getIDlist($id){
    global $db;
    $query = "select * from AnggotaBaruIsmiDki where ID=:ID ";
    $stmt = $db -> prepare($query);
    $result = $stmt -> execute(array(":ID" => $id));
    $ros = $stmt -> fetch(PDO::FETCH_ASSOC);
    // print_r($ros);
    // exit();
    return $ros;
}


?>