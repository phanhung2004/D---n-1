<?php
function loadall_danhmuc(){
    $sql="SELECT * FROM `danhmuc` WHERE `trangthai` = 0 order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function delete_danhmuc($id){
    $sql = "DELETE FROM danhmuc WHERE `danhmuc`.`id` = '$id'";
    pdo_execute($sql);
}
function insert_danhmuc($name){
    $sql = "INSERT INTO `danhmuc` (`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql="SELECT * FROM `danhmuc` WHERE `danhmuc`.`id` = '$id'";
    $onedanhmuc=pdo_query_one($sql);
    return $onedanhmuc;
}
function update_danhmuc($id, $name){
    $sql="UPDATE `danhmuc` SET `name` = '$name' WHERE `danhmuc`.`id` = '$id'";
    pdo_query_one($sql);
    // return $onedanhmuc;
}
function update_danhmuc_mem($id){
    $sql = "UPDATE `danhmuc` SET `trangthai` = 1 WHERE `danhmuc`.`id` = '$id'";
    pdo_execute($sql);
}
?>