<link rel="stylesheet" href="../css/addsp.css">
<form action="" method="POST" enctype="multipart/form-data">

    <div class="row2 mb10 form_content_container">
        <label> Tên Sản Phẩm </label> <br>
        <input type="text" name="name" placeholder="nhập vào tên sản phẩm">
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Giá Sản Phẩm</label> <br>
        <input type="text" name="price" placeholder="nhập vào giá sản phẩm">
    </div>

    <div class="row2 mb10 form_content_container">
        <label> Màu sắc </label> <br>
        <input type="text" name="color" placeholder="nhập vào màu sắc sản phẩm">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Hình ảnh </label> <br>
    <input type="file" name="image">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Kích cỡ </label> <br>
    <input type="text" name="size" placeholder="nhập vào kích cỡ">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Mô tả </label> <br>
    <input type="text" name="mota" placeholder="nhập vào mô tả">
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
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá Gốc</label> <br>
    <input type="text" name="giagoc">
    </div>

    <div class="row2 mb10 form_content_container">
    <label> Giá khuyến mãi</label> <br>
    <input type="text" name="giakhuyenmai">
    </div>
    <br>
    <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
    <!-- <input  class="mr20" type="reset" value="NHẬP LẠI"> -->
    <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
</form>