<?php
function insert_hoadon($iduser, $name, $email, $sodienthoai, $diachi, $id_sanpham, $price, $so_luong, $tongtien, $phuongthucthanhtoan, $phuongthucvanchuyen, $date){
    $sql = "INSERT INTO `hoadon` (`id_user`, `name`, `email`, `sodienthoai`, `diachi`, `id_sanpham`,`gia_ban`,`so_luong`,`thanh_tien`,`phuong_thuc_thanh_toan`,`phuong_thuc_van_chuyen`, `date`) 
    VALUES ('$iduser', '$name','$email','$sodienthoai','$diachi', '$id_sanpham', '$price','$so_luong','$tongtien','$phuongthucthanhtoan','$phuongthucvanchuyen','$date');";
    pdo_execute($sql);

}
function loadall_hoadon($id){
    $sql="SELECT * FROM `hoadon` WHERE `id_user`= '$id'";
    $listhoadon=pdo_query($sql);
    return $listhoadon;
}
function loadall_hoadonadmin(){
    $sql="SELECT * FROM `hoadon`";
    $listhoadon=pdo_query($sql);
    return $listhoadon;
}
function update_trangthai_hoadon0($id){
    $sql = "UPDATE `hoadon` SET `trang_thai` = '0' WHERE `hoadon`.`id` = '$id'";
    pdo_execute($sql);
}
function update_trangthai_hoadon1($id){
    $sql = "UPDATE `hoadon` SET `trang_thai` = '1' WHERE `hoadon`.`id` = '$id'";
    pdo_execute($sql);
}
function update_trangthai_hoadon2($id){
    $sql = "UPDATE `hoadon` SET `trang_thai` = '2' WHERE `hoadon`.`id` = '$id'";
    pdo_execute($sql);
}
function update_trangthai_hoadon3($id){
    $sql = "UPDATE `hoadon` SET `trang_thai` = '3' WHERE `hoadon`.`id` = '$id'";
    pdo_execute($sql);
}
?>