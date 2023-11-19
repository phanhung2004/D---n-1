<?php
    function loadall_giohang($iduser){
        $sql = "SELECT * FROM `chitietgiohang` INNER JOIN `sanpham` ON chitietgiohang.id_sanpham = sanpham.id
        INNER JOIN `taikhoan` ON chitietgiohang.id_user = taikhoan.id WHERE `id_user` = $iduser
        ";
        $listgiohang=pdo_query($sql);
        return $listgiohang;
    }
    function insert_giohang($id, $iduser, $color, $size, $soluong, $image, $tongtien){
        $sql = "INSERT INTO `chitietgiohang` (`color_giohang`, `so_luong`, `tongtien`, `size_giohang`, `imagegiohang`, `id_user`, `id_sanpham`) VALUES ('$color', '$soluong','$tongtien','$size','$image', '$iduser', '$id');";
        pdo_execute($sql);
    }
?>