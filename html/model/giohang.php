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
    function loadall_giohanguser(){
        $sql = "SELECT * FROM `giohanguser` INNER JOIN `sanpham` ON giohanguser.id_sanpham1 = sanpham.id
        ";
        $listgiohang=pdo_query($sql);
        return $listgiohang;
    }
    function insert_giohanguser($id, $color, $size, $soluong, $image, $tongtien){
        $sql = "INSERT INTO `giohanguser` (`color_giohang`, `so_luong`, `tongtien`, `size_giohang`, `imagegiohang`, `id_sanpham1`) VALUES ('$color', '$soluong','$tongtien','$size','$image', '$id');";
        pdo_execute($sql);
    }
    function clear_giohanguser(){
        $sql = "DELETE FROM `giohanguser`";
        pdo_execute($sql);
    }
?>