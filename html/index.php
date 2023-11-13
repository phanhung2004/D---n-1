<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/chitietsanpham.php";

    include "view/header.php";
    include "global.php";

    $spnew = loadall_sanpham_home();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                include "view/sanpham.php";
                break;
            case "dangxuat":
                session_unset();
                echo "<script>window.location.href = 'index.php?act=account';</script>";
                break;
            case "login":
                if(isset($_POST['login']) && ($_POST['login'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $email==""){
                        $erroEmailLogin="email không hợp lệ";
                    }else if(strlen($password) < 8 && ($password=="")){
                        $erroPassLogin="pass không hợp lệ";
                    }else{
                        $checkuser=checkuser($email, $password);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            // $loginfinish="Đăng nhập thành công";
                            echo "<script>window.location.href = 'index.php?act=home';</script>";
                        }else{
                            $loginFale="Đăng nhập thất bại-đăng kí hoặc quên mật khẩu";
                        }
                    }
                }
                include "view/account.php";
                break;
            case "register":
                if(isset($_POST['register']) && ($_POST['register'])){
                
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $name=$_POST['name'];
                    $diachi=$_POST['diachi'];
                    $sodienthoai=$_POST['sodienthoai'];

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $email==""){
                        $erroEmail="email không hợp lệ";
                    }else if(strlen($password) < 8 && ($password=="")){
                        $erroPass="pass không hợp lệ";
                    }else {
                        if(check_existing_email($email)){
                            $erroEmail2="email đã được sử dụng";
                        }else{
                            insert_taikhoan($name, $email, $sodienthoai, $diachi, $password);
                            $thongbao="Đăng kí thành công";
                            $_SESSION['loginIn'] = true;
                            echo "<script>window.location.href = 'index.php?act=account';</script>";
                            // echo "<script>alert('Đăng ký thành công');</script>";
                        }
                    }
                }
                include "view/account.php";
                break;
            case "aopolo":
                $spaopolo = load_danhmuc_polo();
                include "view/aopolo.php";
                break;
            case "aophong":
                $spaophong = load_danhmuc_aophong();
                include "view/aophong.php";
                break;
            case "home2":
                $spsomi = load_danhmuc_aosomi();
                include "view/home2.php";
                break;
            case "leave-review":
                include "view/leave-review.php";
                break;
            case "account":
                include "view/account.php";
                break;
            case "cart":
                include "view/cart.php";
                break;
            case "checkout":
                include "view/checkout.php";
                break;
            case "blog":
                include "view/blog.php";
                break;
            case "product-detail-1":
                if(isset($_POST['guibinhluan'])){
                    $iduser = $_SESSION['user']['id'];
                    // insert_binhluan($_POST['idpro'], $_POST['noidung'], $iduser);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamchitiet = loadall_chitiet($_GET['idsp']);
                    // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/product-detail-1.php";
                }else{
                    include "view/home.php";            
                }
                break;
            case "listing-row-4-sidebar-extended":
                include "view/listing-row-4-sidebar-extended.php";
                break;
            case "listing-row-3-sidebar-left":
                include "view/listing-row-3-sidebar-left.php";
                break;
            case "listing-row-2-sidebar-right":
                include "view/listing-row-2-sidebar-right.php";
                break;
            case "listing-row-1-sidebar-left":
                include "view/listing-row-1-sidebar-left.php";
                break;
            case "listing-grid-7-sidebar-right":
                include "view/listing-grid-7-sidebar-right.php";
                break;
            case "listing-grid-6-sidebar-left":
                include "view/listing-grid-6-sidebar-left.php";
                break;
            case "listing-grid-5-sidebar-right":
                include "view/listing-grid-5-sidebar-right.php";
                break;
            case "listing-grid-4-sidebar-left":
                include "view/listing-grid-4-sidebar-left.php";
                break;
            case "listing-grid-3":
                include "view/listing-grid-3.php";
                break;
            case "listing-grid-2-full":
                include "view/listing-grid-2-full.php";
                break;
            case "listing-grid-1-full":
                include "view/listing-grid-1-full.php";
                break;
            case "index-4":
                include "view/index-4.php";
                break;
            case "index-3":
                include "view/index-3.php";
                break;
            case "index-2":
                include "view/index-2.php";
                break;
            case "home":
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";

?>