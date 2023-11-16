<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "sua_binhluan":
                if(isset($_POST['suabl']) && ($_POST['suabl'])){
                    $id=$_POST['id'];
                    $noidung=$_POST['noidung'];

                    update_binhluan($id,$noidung);
                    echo "<script>window.location.href = 'index.php?act=binhluan';</script>";
                }
                include "binhluan/binhluan.php";
                break;
            case "update_binhluan":
                if(isset($_GET['idbl']) && ($_GET['idbl'] > 0)){
                    $onebinhluan=loadone_binhluan($_GET['idbl']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "binhluan/update_binhluan.php";
                break;
            case "delete_binhluan":
                if(isset($_GET['idbl']) && ($_GET['idbl']>0)){
                    delete_binhluan($_GET['idbl']);
                }
                $listbinhluan = loadall_binhluanadmin();
                include "binhluan/binhluan.php";
                break;
            case "binhluan":
                $listbinhluan = loadall_binhluanadmin();
                // echo "<pre>";
                // var_dump($listbinhluan['ngaydangbinhluan']);
                include "binhluan/binhluan.php";
                break;
            case "sua_danhmuc":
                if(isset($_POST['sua']) && ($_POST['sua'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];

                    update_danhmuc($id,$name);
                    echo "<script>window.location.href = 'index.php?act=danhmuc';</script>";
                }
                include "danhmuc/danhmuc.php";
                break;
            case "update_danhmuc":
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $onedanhmuc=loadone_danhmuc($_GET['iddm']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/update_danhmuc.php";
                break;
            case "add_danhmuc":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name=$_POST['name'];

                    if(empty($name)){
                        $erroName = "chưa nhập trường danh mục";
                    }else{
                        insert_danhmuc($name);
                        echo "<script>window.location.href = 'index.php?act=danhmuc';</script>";
                    }
                }
                include "danhmuc/add_danhmuc.php";
                break;
            case "delete_danhmuc":
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    delete_danhmuc($_GET['iddm']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            case "danhmuc":
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/danhmuc.php";
                break;


            case "suataikhoan":
                if(isset($_POST['suatk']) && ($_POST['suatk'])){
                    $id=$_POST['id'];
                    $username=$_POST['username'];
                    $pass=$_POST['pass'];
                    $sodienthoai=$_POST['sodienthoai'];
                    // $username=$_POST['username'];
                    // echo $username;

                    update_taikhoan($id,$username,$pass,$sodienthoai);
                    echo "<script>window.location.href = 'index.php?act=taikhoan'; alert('Sửa thành công') </script>";
                }
                include "taikhoan/taikhoan.php";
                break;
            case "update_taikhoan":
                if(isset($_GET['idtk']) && ($_GET['idtk'] > 0)){
                    $onetaikhoan=loadone_taikhoan($_GET['idtk']);
                }
                $listtaikhoan=loadAll_taikhoan();
                include "taikhoan/update_taikhoan.php";
                break;       
            case "delete_taikhoan":
                if(isset($_GET['idtk']) && ($_GET['idtk']>0)){
                    delete_taikhoan($_GET['idtk']);
                }
                $listtaikhoan=loadAll_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
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

                    if(empty($name)){
                        $erroname = "chua nhập trường name";
                    }else if(empty($price)){
                        $erroprice = "chua nhập trường price";
                    }else if(empty($color)){
                        $errocolor = "chua nhập trường color";
                    }
                    else if(empty($size)){
                        $errosize = "chua nhập trường size";
                    }else if(empty($mota)){
                        $erromota = "chua nhập trường mota";
                    }
                    else if(empty($soluong)){
                        $errosoluong = "chua nhập trường soluong";
                    }
                    else if(empty($giagoc)){
                        $errogiagoc = "chua nhập trường giagoc";
                    }else if(empty($giakhuyenmai)){
                        $errogiakhuyenmai = "chua nhập trường giakhuyenmai";
                    }else{
                        insert_sanpham($name, $price, $color, $image, $size, $mota, $date, $soluong, $giagoc, $giakhuyenmai, $iddm);
                        echo "<script>window.location.href = 'index.php?act=listsp';</script>";
                    }

                    // insert_sanpham($name, $price, $color, $image, $size, $mota, $date, $soluong, $giagoc, $giakhuyenmai, $iddm);
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
            // case "comfirm":
                
            //     echo "<script>
            //         setTimeout(function(){
            //         window.location.href = 'index.php?act=home';
            //         }, 2000); 
            //     </script>";
            //     include "comfirm.php";
            //     break;
            case "home":
                include "home.php";
                break;
        }
    }else{
        include "home.php";  
    }
    include "footer.php";
?>