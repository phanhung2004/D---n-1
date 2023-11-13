<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "taikhoan":
                $listtaikhoan=loadAll_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
            case "updatesp":
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0) ){
                    $sanpham=loadone_sanpham($_GET['idsp']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "update-databasse":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $color=$_POST['color'];

                    $image=$_FILES['image']['name'];
                    $dir="../upload/";
                    $upFile=$dir.basename($_FILES['image']['name']);
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $upFile)){
                        // echo "thanh cong";
                    }else{
                        // echo "lỗi";
                    }
                    
                    $size=$_POST['size'];
                    $mota=$_POST['mota'];
                    // $date=$_POST['date'];
                    $soluong=$_POST['soluong'];
                    $giagoc=$_POST['giagoc'];
                    $giakhuyenmai=$_POST['giakhuyenmai'];

                    updatesp($id,$name, $price, $color, $image, $size, $mota, $soluong, $giagoc, $giakhuyenmai, $iddm);     
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $color=$_POST['color'];
                    
                    $image=$_FILES['image']['name'];
                    $dir="../upload/";
                    $upFile=$dir.basename($_FILES['image']['name']);
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $upFile)){
                        // echo "bạn đẫ upload thành công";
                    }else{
                        echo "chua upload anh";
                    }

                    $size=$_POST['size'];
                    $mota=$_POST['mota'];
                    $date=$_POST['date'];
                    $soluong=$_POST['soluong'];
                    $giagoc=$_POST['giagoc'];
                    $giakhuyenmai=$_POST['giakhuyenmai'];

                    insert_sanpham($name, $price, $color, $image, $size, $mota, $date, $soluong, $giagoc, $giakhuyenmai, $iddm);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;

            case "listsp":
                if(isset($_POST['clickok']) && ($_POST['clickok'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw='';
                    $iddm=0;
                }
                // $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;

            case "xoasp":
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    delete($_GET['idsp']);
                }

                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
        }
    }else{
        include "home.php";  
    }
    include "footer.php";
?>