<?php
    function loadall_giohang(){
        $sql = "SELECT * FROM `chitietgiohang` INNER JOIN `sanpham` ON chitietgiohang.id_sanpham = sanpham.id
        INNER JOIN `taikhoan` ON chitietgiohang.id_user = taikhoan.id
        ";
        $listgiohang=pdo_query($sql);
        return $listgiohang;
    }
?>