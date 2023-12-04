<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/chitietsanpham.php";
    include "model/phantrang.php";
    include "model/binhluan.php";
    include "model/giohang.php";
    include "model/hoadon.php";

    include "view/header.php";
    include "global.php";

    // if(isset($_GET['idpt'])){
    //     $page = $_GET['idpt'];
    // }else{
    //     $page = "";
    // }
    // if($page == "" || $page == 1){
    //     $begin = 0;
    // }else{
    //     $begin = ($page*4)-4;
    // }
    // echo $begin;
    $spnew = loadall_sanpham_home();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "thaydoi_acc":
                if(isset($_POST['thaydoi']) && ($_POST['thaydoi'] != "")){
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $username = $_POST['username'];
                    $diachi = $_POST['diachi'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $id = $_SESSION['user']['id'];

                    update_taikhoan_new($id,$email,$pass,$username,$diachi,$sodienthoai);
                    echo '<script>';
                    echo 'setTimeout(function() { alert("Thay đổi thành công!"); }, 500);'; // Hiển thị alert sau 2 giây
                    echo '</script>';
                }

                $listacc = loadone_taikhoan($_SESSION['user']['id']);

                include "view/account.php";
                break;
            case "quenmatkhau":
                if(isset($_POST['sendemail'])){
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/quenmatkhau.php";
                break;
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
                    }else if(strlen($password) < 8 || ($password=="")){
                        $erroPass="pass không hợp lệ";
                    }else {
                        if(check_existing_email($email)){
                            $erroEmail2="email đã được sử dụng";
                        }else{
                            insert_taikhoan($name, $email, $sodienthoai, $diachi, $password);
                            $thongbao="Đăng kí thành công";
                            $_SESSION['loginIn'] = true;
                            echo "<script>window.location.href = 'index.php?act=comfirm';</script>";
                            // echo "<script>alert('Đăng ký thành công');</script>";
                        }
                    }
                }
                include "view/account.php";
                break;
            case "leave-review":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanphambinhluan = loadone_sanpham($_GET['idsp']);
                }
                // var_dump($sanpham);
                if(isset($_POST['guibinhluan'])){
                    $iduser = $_SESSION['user']['id'];
                    insert_binhluan($_POST['idpro'], $_POST['noidung'], $iduser);
                    echo "<script>window.location.href = 'index.php?act=comfirm';</script>";

                }
                include "view/leave-review.php";
                break;
            case "comfirm":
                echo "<script>
                    setTimeout(function(){
                    window.location.href = 'index.php?act=home';
                    }, 2000); 
                     </script>";
                include "view/comfirm.php";
                break;
            case "account":
                if(isset($_SESSION['user'])){
                    $listacc = loadone_taikhoan($_SESSION['user']['id']);
                }
                
                include "view/account.php";
                break;
            case "deletecart":
                if(isset($_GET['idgh'])){
                    deletecart_one($_GET['idgh']);
                   
                }
                if(isset($_SESSION['user'])){
                    $listgiohang = loadall_giohang($_SESSION['user']['id']);
                }else{
                    $listgiohang = loadall_giohanguser();
                }
                include "view/cart.php";
                break;
            case "cart_review":

                include "view/cart.php";
                break;
            case "cart":
                if(isset($_POST['cart']) && ($_POST['cart'])){
                    $color = $_POST['selectedColor'];
                    if($color==""){
                        $color="Đen";
                    }else if($color=="black"){
                        $color="Đen";
                    }else if($color=="whitesmoke"){
                        $color="Trắng";
                    }
                    $size = $_POST['idsize'];
                    if($size == 1){
                        $size="S";
                    }
                    $soluong = $_POST['quantity'];
                    if($soluong == 1){
                        $tongtien=$_POST['price'];
                    }else{
                        $tongtien=$_POST['tongtien'];
                    }
                    $id=$_GET['idsp'];
                    $image=$_POST['image'];
                    $iduser=$_SESSION['user']['id'];
                    
                    insert_giohang($id, $iduser, $color, $size, $soluong, $image, $tongtien);
                    // echo $iduser;
                    // echo $color;
                    // echo $size;
                    // echo $soluong;
                    // echo $id;
                    // echo $image;
                    // echo $tongtien;
                    
                }
                if(isset($_POST['cart_review']) && ($_POST['cart_review'])){
                    $color = $_POST['selectedColor'];
                    if($color==""){
                        $color="Đen";
                    }else if($color=="black"){
                        $color="Đen";
                    }else if($color=="whitesmoke"){
                        $color="Trắng";
                    }
                    $size = $_POST['idsize'];
                    if($size == 1){
                        $size="S";
                    }
                    $soluong = $_POST['quantity'];
                    if($soluong == 1){
                        $tongtien=$_POST['price'];
                    }else{
                        $tongtien=$_POST['tongtien'];
                    }
                    $id=$_GET['idsp'];
                    $image=$_POST['image'];

                    
                    // echo $iduser;
                    // echo $color;
                    // echo $size;
                    // echo $soluong;
                    // echo $id;
                    // echo $image;
                    // echo $tongtien;
                    insert_giohanguser($id, $color, $size, $soluong, $image, $tongtien);
                    // $product = array(
                    //     'id' => $id,
                    //     'color' => $color,
                    //     'size' => $size,
                    //     'soluong' => $soluong,
                    //     'image' => $image,
                    //     'tongtien' => $tongtien
                    // );
                    // if(!isset($_SESSION['cart_item'])){
                    //     $_SESSION['cart_item'] = array();
                    // }
                    // $_SESSION['cart_item'][] = $product;
                    // var_dump($_SESSION['cart_item']);
                }
                if(isset($_SESSION['user'])){
                    $listgiohang = loadall_giohang($_SESSION['user']['id']);
                }else{
                    $listgiohang = loadall_giohanguser();
                }
                // echo "<pre>";
                // var_dump($listgiohang);
                include "view/cart.php";
                break;
            case "register_giohang":
                    if(isset($_POST['register']) && ($_POST['register'])){
                    
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $name=$_POST['name'];
                        $diachi=$_POST['diachi'];
                        $sodienthoai=$_POST['sodienthoai'];
    
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $email==""){
                            $erroEmail="email không hợp lệ";
                        }else if(strlen($password) < 8 || ($password=="")){
                            $erroPass="pass không hợp lệ";
                        }else {
                            if(check_existing_email($email)){
                                $erroEmail2="email đã được sử dụng";
                            }else{
                                insert_taikhoan($name, $email, $sodienthoai, $diachi, $password);
                                $thongbao="Đăng kí thành công";
                                $_SESSION['loginIn'] = true;
                                echo "<script>window.location.href = 'index.php?act=checkout';</script>";
                                echo "<script>alert('Đăng ký thành công');</script>";
                            }
                        }
                    }
                include "view/account.php";
                break;
            case "login_giohang":
                    if(isset($_POST['login_giohang']) && ($_POST['login_giohang'])){
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

                                $iduser=$_SESSION['user']['id'];
                                $listgiohanguser=loadall_giohanguser();
                                if(!empty($listgiohanguser)){
                                    foreach($listgiohanguser as $cartItem){
                                        insert_giohang($cartItem['id_sanpham1'], $iduser, $cartItem['color_giohang'], $cartItem['size_giohang'], $cartItem['so_luong'], $cartItem['imagegiohang'], $cartItem['tongtien']);
                                    }
                                    clear_giohanguser();
                                }
                                // $loginfinish="Đăng nhập thành công";
                                echo "<script>window.location.href = 'index.php?act=cart';</script>";
                            }else{
                                $loginFale="Đăng nhập thất bại-đăng kí hoặc quên mật khẩu";
                                // echo "<script>window.location.href = 'index.php?act=checkout';</script>";
                            }
                        }
                    }

                include "view/checkout.php";
                break;
            case "checkout":
                if(isset($_POST['hoadon']) && ($_POST['hoadon'])){
                    $phuongthucthanhtoan=$_POST['payment'];
                    $phuongthucvanchuyen=$_POST['shipping'];
                    // echo $phuongthucvanchuyen;
                    $listgiohang = loadall_giohang($_SESSION['user']['id']);
                    foreach($listgiohang as $gh){
                        extract($gh);
                        $name=$gh['name'];
                        $iduser=$gh['id_user'];
                        $sodienthoai=$gh['sodienthoai'];
                        $diachi=$gh['diachi'];
                        $idsanpham=$gh['id_sanpham'];
                        $price=$gh['price'];
                        $soluong=$gh['so_luong'];
                        $tongtien=$gh['tongtien'];
                        $email=$gh['email'];
                        $phuongthucthanhtoan;
                        $phuongthucvanchuyen;
                        $date = date("Y-m-d");

                        insert_hoadon($iduser, $name, $email, $sodienthoai, $diachi, $id_sanpham, $price, $so_luong, $tongtien, $phuongthucthanhtoan, $phuongthucvanchuyen, $date);
                        clear_giohang();
                        echo "<script>window.location.href = 'index.php?act=comfirm';</script>";


                    }

                    echo $idsanpham;
    
                }
                $listgiohang = loadall_giohanguser();
                if(isset($_SESSION['user'])){
                    $listgiohang = loadall_giohang($_SESSION['user']['id']);
                }
                // var_dump($_SESSION['user']['id']);
                include "view/checkout.php";
                break;
            case "blog":
                include "view/blog.php";
                break;
            case "hoadon":
                $listhoadon = loadall_hoadon($_SESSION['user']['id']);
                include "view/hoadon.php";
                break;
            case "product-detail-1":
                if(isset($_POST['guibinhluan'])){
                    $iduser = $_SESSION['user']['id'];
                    // insert_binhluan($_POST['idpro'], $_POST['noidung'], $iduser);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    // $sizeandcolor= loadone_chitietsanpham($_GET['idsp']);
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamchitiet = loadall_chitiet($_GET['idsp']);
                    // var_dump($sanpham['price']);
                    // var_dump($sanphamchitiet);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    // echo "<pre>";
                    // var_dump($sanphamcl);
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
                // case "aopolo":
                //     $spaopolo = load_danhmuc_polo();
                //     include "view/aopolo.php";
                //     break;
                // case "aophong":
                //     $spaophong = load_danhmuc_aophong();
                //     include "view/aophong.php";
                //     break;
                // case "home2":
                //     $spsomi = load_danhmuc_aosomi();
                //     include "view/home2.php";
                //     break;
            case "aophong":
                if(isset($_GET['idpt'])){
                    $page = $_GET['idpt'];
                }else{
                    $page = "";
                }
                if($page == "" || $page == 1){
                    $begin = 0;
    
                }else{
                    $begin = ($page*4)-4;
                }
                    // echo $begin;
                $spaophong = load_danhmuc_aophong($begin);
                include "view/listing-row-3-sidebar-left.php";
                break;
            // case "sanpham_fill":
            //     $iddm = [];
            //     if(isset($_POST['fill'])){
            //         $iddm[] = $_POST['iddm'];
            //     }
            //     $spFill = load_all_fillter_danhmuc($iddm);
            //     include "view/listing-grid-4-sidebar-left-fill.php";
            //     break;
            case "sanpham_fill":
                $iddm = [];
                if(isset($_POST['fill']) && isset($_POST['iddm'])) {
                    $iddm = $_POST['iddm']; // Mảng chứa các giá trị iddm được chọn
                }
                // var_dump($iddm);
                $spFill = load_all_fillter_danhmuc($iddm);
                
                include "view/listing-row-4-sidebar-left-fill.php";
                break;
            case "aosomi":
                if(isset($_GET['idpt'])){
                    $page = $_GET['idpt'];
                }else{
                    $page = "";
                }
                if($page == "" || $page == 1){
                    $begin = 0;

                }else{
                    $begin = ($page*4)-4;
                }
                $spaosomi = load_danhmuc_aosomi($begin);
                // $spaosomi = load_all_fillter_danhmuc([1,5]);
                include "view/listing-row-2-sidebar-left.php";
                break;
            case "aopolo":
                if(isset($_GET['idpt'])){
                    $page = $_GET['idpt'];
                }else{
                    $page = "";
                }
                if($page == "" || $page == 1){
                    $begin = 0;
                }else{
                    $begin = ($page*4)-4;
                }
                $spaopolo = load_danhmuc_polo($begin);
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