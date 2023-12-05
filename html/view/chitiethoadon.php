    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/cart.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">	
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
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
                foreach($listhoadon as $hd){
                    extract($hd);
                    $stt+=1;
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
	<!--/main-->
    <div id="toTop"></div>
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
