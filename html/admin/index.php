<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/sanpham.php";



    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "home":
                $spnew=loadall_sanpham_home();
                include "home.php";
                break;
            case "xoasp":
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    delete($_GET['idsp']);
                }

                $spnew=loadall_sanpham("", 0);
                include "home.php";

                break;
        }
    }else{
        include "home.php";  
    }
    include "footer.php";
?>