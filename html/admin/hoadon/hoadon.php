<main class="bg_gray">
		<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Hóa Đơn</h1>
		</div>
		<!-- /page_header -->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Phương thức thanh toán</th>
            <th scope="col">Phương thức vận chuyển</th>
            <th scope="col">Chuyển Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
                foreach($listhoadon as $hd){
                    extract($hd);
                    $stt+=1;
                    $link = "index.php?act=hoadon_trangthai&idhd0=".$id;
                    $link1 = "index.php?act=hoadon_trangthai&idhd1=".$id;
                    $link2 = "index.php?act=hoadon_trangthai&idhd2=".$id;
                    $link3 = "index.php?act=hoadon_trangthai&idhd3=".$id;
            ?>
            <tr>
                
                <th scope="row"><?=$stt?></th>
                <td><?=$name?></td>
                <td>
                    <?php
                        if($trang_thai == 0){
                            echo '<span style="color: blue;" >Đã Đặt Hàng</span>';
                        } else if($trang_thai == 1){
                            echo '<span style="color: aqua;">Đang Đợi Đơn Vị Vận Chuyển</span>';
                        } else if($trang_thai == 2){
                            echo '<span style="color: yellow;">Đang Giao Hàng</span>';
                        } else if($trang_thai == 3){
                            echo '<span style="color: green;">Đã Nhận Hàng</span>';
                        }
                    ?>
                </td>
                <td><?=$thanh_tien?></td>
                <td><?=$so_luong?></td>
                <td><?=$email?></td>
                <td><?=$sodienthoai?></td>
                <td><?=$phuong_thuc_thanh_toan?></td>
                <td><?=$phuong_thuc_van_chuyen?></td>
                <td>
                    <a href="<?=$link?>"><button type="button" class="btn btn-primary">Đã Đặt Hàng</button></a>
                    <a href="<?=$link1?>"><button type="button" class="btn btn-info">Đợi Đơn vị vận chuyển</button></a> 
                    <a href="<?=$link2?>"><button type="button" class="btn btn-warning">Đang giao hàng</button></a>
                    <a href="<?=$link3?>"><button type="button" class="btn btn-success">Đã Nhận Hàng</button></a> 
                </td>
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

		</div>
		<!-- /container -->
	</main>