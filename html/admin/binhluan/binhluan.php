
<body>
<!-- <button type="button" class="btn btn-success">Primary</button> -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Nội dung</th>
        <th scope="col">ID Sản phẩm</th>
        <th scope="col">ID user</th>
        <th scope="col">Ngày Bình Luận</th>
        <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt=0;
        // echo "<pre>";
        // var_dump($listbinhluan);
            foreach($listbinhluan as $bl){
                extract($bl);
                $stt+=1;
                $add_danhmuc= "index.php?act=add_danhmuc";
                $delete_danhmuc= "index.php?act=delete_danhmuc&iddm=".$id;
                $update_danhmuc= "index.php?act=update_danhmuc&iddm=".$id;
        ?>
        <tr>
            <th scope="row"><?=$stt?></th>
            <td><?=$noidung?></td>
            <td><?=$name?></td>
            <td><?=$email?></td>
            <td><?php echo date("d/m/Y", strtotime($bl['ngaydangbinhluan']))?></td>
            <td>
                <a href="<?=$update_danhmuc?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                <a href="<?=$delete_danhmuc?>"><button type="button" class="btn btn-danger" onclick="return confirm('bạn có muốn xóa không')" >Xóa</button></a> 
            </td>
        </tr>
        <?php
        }
        ?>
        <!-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr> -->
    </tbody>
    </table>
    <a href="<?=$add_danhmuc?>"><button type="button" class="btn btn-success">Thêm</button></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
