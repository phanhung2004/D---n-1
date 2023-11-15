<?php

function insert_binhluan($idpro, $noidung, $iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `iduser`, `idsanpham`, `ngaydangbinhluan`) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}
function loadall_binhluan($idsp){
    $sql="SELECT * FROM `binhluan` INNER JOIN `taikhoan` ON binhluan.iduser = taikhoan.id WHERE `idsanpham` = '$idsp'";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function loadall_binhluanadmin() {
    $sql="SELECT * from `binhluan` INNER JOIN `taikhoan` 
    ON binhluan.iduser = taikhoan.id INNER JOIN `sanpham` 
    ON binhluan.idsanpham = sanpham.id";
    $listbinhluan=pdo_query($sql);
    return  $listbinhluan;
}
?>