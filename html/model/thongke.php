<?php
    function thongke(){
        $sql = "SELECT YEAR(date) AS nam, MONTH(date) AS thang, WEEK(date) AS tuan, SUM(thanh_tien) AS tong_tien 
        FROM hoadon 
        GROUP BY nam, thang, tuan 
        ORDER BY nam DESC, thang DESC, tuan DESC;";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }
    function thongke_sanpham(){
        $sql = "SELECT YEAR(date) AS nam, MONTH(date) AS thang, WEEK(date) AS tuan, SUM(so_luong) AS so_luong
        FROM hoadon 
        GROUP BY nam, thang, tuan 
        ORDER BY nam DESC, thang DESC, tuan DESC;";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }

?>