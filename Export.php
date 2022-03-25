<?php

include 'connection.php';
include 'ListAnggota.php';
$variabel = GetListAnggota();

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 

$fileName = "Data-Anggota-" . date('Y/m/d') . ".xls";

$fields = array('NAMA', 'EMAIL', 'NO HP', 'TGL LAHIR', 'ALAMAT', 'NAMA PERUSAHAAN', 'NAMA PRODUK', 'JENIS PRODUK', 'WEB PERUSAHAAN');

$excelData = implode("\t", array_values($fields)) . "\n";

// $query = $db->query("SELECT * FROM AnggotaBaruIsmiDki ORDER BY id ASC");

if (count($variabel) > 0) {
    for ($i = 0; $i < count($variabel); $i++) {
        $lineData = array($variabel[$i]["Nama"], $variabel[$i]["Email"], $variabel[$i]["NoHp"], $variabel[$i]["TglLahir"], $variabel[$i]["Alamat"], $variabel[$i]["NamaPerusahaan"], $variabel[$i]["NamaProduk"], $variabel[$i]["JenisProduk"], $variabel[$i]["WebPerusahaan"]);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
}else{
    $excelData.= "Tidak ada data yang bisa ditampilkan..." . "\n";
}


header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 

// Render excel data 
echo $excelData; 
 
exit;
