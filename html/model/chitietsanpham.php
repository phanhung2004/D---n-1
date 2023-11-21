<?php
    function loadall_chitiet($id){
        $sql = "SELECT * FROM `chitietsanpham` WHERE chitietsanpham.id_sanpham = '$id'";
        $list_chitiet = pdo_query($sql);
        return $list_chitiet;
    }
    
?>