<?php

function insert_binhluan($idpro, $noidung, $iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `iduser`, `idsanpham`, `ngaydang`) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}
?>