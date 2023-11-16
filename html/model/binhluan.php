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
    $sql = "SELECT binhluan.id as binhluan_id, binhluan.*,
            taikhoan.*, sanpham.*
            FROM `binhluan` 
            INNER JOIN `taikhoan` ON binhluan.iduser = taikhoan.id 
            INNER JOIN `sanpham` ON binhluan.idsanpham = sanpham.id";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE `binhluan`.`id` = '$id'";
    pdo_execute($sql);
}
function loadone_binhluan($id){
    $sql="SELECT * FROM `binhluan` WHERE `binhluan`.`id` = '$id'";
    $onebinhluan=pdo_query_one($sql);
    return $onebinhluan;
}
function update_binhluan($id, $noidung){
    $sql="UPDATE `binhluan` SET `noidung` = '$noidung' WHERE `binhluan`.`id` = '$id'";
    pdo_query_one($sql);
    // return $onedanhmuc;
}
?>