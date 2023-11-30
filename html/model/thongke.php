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

    function thongke_thang_moi_nhat(){
        $sql = "SELECT YEAR(date) AS nam, MONTH(date) AS thang, SUM(thanh_tien) AS tong_tien 
            FROM hoadon 
            WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = (SELECT MAX(MONTH(date)) FROM hoadon)
            GROUP BY nam, thang;";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }

    function thongke_tuan_moi_nhat(){
        $sql = "SELECT YEAR(date) AS nam, MONTH(date) AS thang, WEEK(date) AS tuan, SUM(thanh_tien) AS tong_tien 
                FROM hoadon 
                WHERE YEAR(date) = YEAR(CURRENT_DATE()) 
                AND MONTH(date) = (SELECT MAX(MONTH(date)) FROM hoadon WHERE YEAR(date) = YEAR(CURRENT_DATE()))
                AND WEEK(date) = (SELECT MAX(WEEK(date)) FROM hoadon WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = (SELECT MAX(MONTH(date)) FROM hoadon WHERE YEAR(date) = YEAR(CURRENT_DATE())))
                GROUP BY nam, thang, tuan;";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }

?>