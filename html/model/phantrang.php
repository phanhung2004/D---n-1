<?php
function lay_so_luong_san_pham_aopolo(){
    $sql = "SELECT COUNT(*) AS total FROM sanpham WHERE iddm = 1"; // Truy vấn để đếm tổng số sản phẩm
    $ket_qua = pdo_query_one($sql);

    if ($ket_qua) {
        return $ket_qua['total']; // Trả về tổng số sản phẩm
    }

    return 0; // Trả về 0 nếu có lỗi hoặc không có sản phẩm
}
function tong_giohang(){
    $sql = "SELECT COUNT(*) AS total FROM giohang"; // Truy vấn để đếm tổng số sản phẩm
    $ket_qua = pdo_query_one($sql);

    if ($ket_qua) {
        return $ket_qua['total']; // Trả về tổng số sản phẩm
    }

    return 0; // Trả về 0 nếu có lỗi hoặc không có sản phẩm
}
?>