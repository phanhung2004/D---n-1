<?php
    function loadall_chitiet($id){
        $sql = "SELECT * FROM `chitietsanpham` WHERE chitietsanpham.id_sanpham = '$id'";
        $list_chitiet = pdo_query($sql);
        return $list_chitiet;
    }
    function loadall_chitiet_admin(){
        $sql = "SELECT * FROM `chitietsanpham`";
        $listchitietsanpham = pdo_query($sql);
        return $listchitietsanpham;
    }
    function loadall_chitiet_admin_add(){
        $sql = "SELECT * FROM `chitietsanpham` INNER JOIN `sanpham` ON sanpham.id = chitietsanpham.id_sanpham";
        $listchitietsanpham = pdo_query($sql);
        return $listchitietsanpham;
    }
    
?>