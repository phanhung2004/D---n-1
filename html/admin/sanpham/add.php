<link rel="stylesheet" href="../css/addsp.css">
<form action="" method="POST" enctype="multipart/form-data">

    <div class="row2 mb10 form_content_container">
        <label> Tên Sản Phẩm </label> <br>
        <input type="text" name="name" placeholder="nhập vào tên sản phẩm">
        <h6 style="color: red">
            <?php
                if(isset($erroname)){
                    echo $erroname;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Giá Sản Phẩm</label> <br>
        <input type="text" name="price" placeholder="nhập vào giá sản phẩm">
        <h6 style="color: red">
            <?php
                if(isset($erroprice)){
                    echo $erroprice;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Màu sắc </label> <br>
        <input type="text" name="color" placeholder="nhập vào màu sắc sản phẩm">
        <h6 style="color: red">
            <?php
                if(isset($errocolor)){
                    echo $errocolor;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Hình ảnh </label> <br>
    <input type="file" name="image">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Kích cỡ </label> <br>
    <input type="text" name="size" placeholder="nhập vào kích cỡ">
    <h6 style="color: red">
            <?php
                if(isset($errosize)){
                    echo $errosize;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Mô tả </label> <br>
    <input type="text" name="mota" placeholder="nhập vào mô tả">
    <h6 style="color: red">
            <?php
                if(isset($erromota)){
                    echo $erromota;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Ngày đăng </label> <br>
    <input type="date" name="date">
    </div>

    <div class="row2 mb10 form_content_container">
           <label> Loại sản phẩm </label> <br>
            <select name="iddm" id="">
                    <option value="0" selected>tat ca</option>
                    <?php
                        foreach($listdanhmuc as $dm){
                            extract($dm);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
            </select>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Số lương</label> <br>
    <input type="text" name="soluong">
    <h6 style="color: red">
            <?php
                if(isset($errosoluong)){
                    echo $errosoluong;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá Gốc</label> <br>
    <input type="text" name="giagoc">
    <h6 style="color: red">
            <?php
                if(isset($errogiagoc)){
                    echo $errogiagoc;
                }
            ?>
        </h6>
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá khuyến mãi</label> <br>
    <input type="text" name="giakhuyenmai">
    <h6 style="color: red">
            <?php
                if(isset($errogiakhuyenmai)){
                    echo $errogiakhuyenmai;
                }
            ?>
        </h6>
    </div>
    <br>
    <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
    <!-- <input  class="mr20" type="reset" value="NHẬP LẠI"> -->
    <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
</form>