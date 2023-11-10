<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath="../upload/".$image;
    if(is_file($hinhpath)){
        $hinhpath="<img src='".$hinhpath."' width='150px' height='150px'>";
    }else{
        $hinhpath = "lỗi";
    }

?>


<link rel="stylesheet" href="../css/addsp.css">
<form action="index.php?act=update-databasse" method="POST" enctype="multipart/form-data">

    <div class="row2 mb10 form_content_container">
        <label> Tên Sản Phẩm </label> <br>
        <input type="text" name="name" value="<?=$name?>">
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Giá Sản Phẩm</label> <br>
        <input type="text" name="price" value="<?=$price?>">
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Màu sắc </label> <br>
        <input type="text" name="color" value="<?=$color?>">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Hình ảnh </label> <br>
    <input type="file" name="image">
    <?php
        echo $hinhpath;
    ?>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Kích cỡ </label> <br>
    <input type="text" name="size" value="<?=$size?>">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Mô tả </label> <br>
    <input type="text" name="mota" value="<?=$mota?>">
    </div>


    <div class="row2 mb10 form_content_container">
           <label> Loại sản phẩm </label> <br>
           <select name="iddm" id="">
                    <option value="0">tat ca</option>
                    <?php
                        foreach($listdanhmuc as $key=>$dm){
                            if($iddm==$dm['id']){
                                echo '<option value="'.$dm['id'].'"selected>'.$dm['name'].'</option>';
                            }else{
                                echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                            }
                        }
                    ?>
            </select>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Số lương</label> <br>
    <input type="text" name="soluong" value="<?=$soluong?>">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá Gốc</label> <br>
    <input type="text" name="giagoc" value="<?=$giagoc?>">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá khuyến mãi</label> <br>
    <input type="text" name="giakhuyenmai" value="<?=$giakhuyenmai?>">
    </div>
    <br>
    <input type="hidden" name="id" value="<?=$id?>">
    <input class="mr20" name="capnhat" type="submit" value="Sửa sản phẩm">
    <!-- <input  class="mr20" type="reset" value="NHẬP LẠI"> -->
    <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
</form>