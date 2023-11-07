<?php
    session_start();
    include "model/pdo.php";
    include "view/header.php";

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
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
            case "product-detail-3":
                include "view/product-detail-3.php";
                break;
            case "product-detail-2":
                include "view/product-detail-2.php";
                break;
            case "product-detail-1":
                include "view/product-detail-1.php";
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