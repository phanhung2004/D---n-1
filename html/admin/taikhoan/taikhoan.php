
<body>
<!-- <button type="button" class="btn btn-success">Primary</button> -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Email</th>
        <th scope="col">pass</th>
        <th scope="col">name</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col">Chức Năng</th>
        <th scope="col">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt=0;
            foreach($listtaikhoan as $tk){
                extract($tk);
                $stt+=1;
        ?>
        <tr>
            <th scope="row"><?=$stt?></th>
            <td><?=$email?></td>
            <td><?=$pass?></td>
            <td><?=$name?></td>
            <td><?=$sodienthoai?></td>
            <td>
                <?php
                    if($role==1){
                        echo "Admin";
                    }else{
                        echo "User";
                    }
                ?>
            </td>
            <td>
                <button type="button" class="btn btn-primary"><a href="">Sửa</a></button>
                <button type="button" class="btn btn-primary"><a href="">Xóa</a></button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
