<?php
function insert_hoadon($iduser, $name, $email, $sodienthoai, $diachi, $id_sanpham, $price, $so_luong, $tongtien, $phuongthucthanhtoan, $phuongthucvanchuyen){
    $sql = "INSERT INTO `hoadon` (`id_user`, `name`, `email`, `sodienthoai`, `diachi`, `id_sanpham`,`gia_ban`,`so_luong`,`thanh_tien`,`phuong_thuc_thanh_toan`,`phuong_thuc_van_chuyen` ) 
    VALUES ('$iduser', '$name','$email','$sodienthoai','$diachi', '$id_sanpham', '$price','$so_luong','$tongtien','$phuongthucthanhtoan','$phuongthucvanchuyen');";
    pdo_execute($sql);

}

?>