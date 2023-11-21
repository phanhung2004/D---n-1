    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/cart.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">	<main class="bg_gray">
		<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Cart page</h1>
		</div>
		<!-- /page_header -->
		<table class="table">
							<thead>
								<tr>
									<th>
										Product
									</th>
									<th>
										Trạng thái
									</th>
									<th>
										Size
									</th>
									<th>
										Số Lượng
									</th>
									<th>
										Tổng Tiền
									</th>
									<th>
										Màu Sắc
									</th>
									<th>

									</th>
									<th>
										
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										$tongtien2=0;
										foreach($listgiohang as $gh){
											extract($gh);
											$image=$img_path.$imagegiohang;
											$linkdelete="index.php?act=deletecart&idgh=".$gh['id'];
											$tongtien2+=$tongtien;
											echo $tongtien;
									?>
									<td>
										<div class="thumb_cart">
											<img src="<?=$imagegiohang?>" class="lazy" alt="Image">
										</div>
										<span class="item_cart"><?=$name?></span>
									</td>
									<td>
										<?php
											if($trangthai==0){
												echo "Đang xác thực";
											}else if($trangthai==1){
												echo "Đang đợi đơn vị vận chuyển";
											}else if($trangthai==2){
												echo "Đơn hàng đàn giao";
											}else if($trangthai==3){
												echo "Đã nhận đơn hàng";
											}
										?>
									</td>
									<td>
										<strong><?=$size_giohang?></strong>
									</td>
									<td>
										<strong><?=$so_luong?></strong>
									</td>
									<!-- <td>
										<div class="numbers-row">
											<input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
										<div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
									</td> -->
									<td>
										<strong><?=$tongtien?></strong>
									</td>
									<td>
										<strong><?=$color_giohang?></strong>
									</td>
									<td class="options">
										<a href="<?=$linkdelete?>"><i class="ti-trash"></i></a>
									</td>
								</tr>
								<?php
										}
								?>
							</tbody>
						</table>

						<div class="row add_top_30 flex-sm-row-reverse cart_actions">
						<div class="col-sm-4 text-end">
						</div>
							<div class="col-sm-8">
						</div>
					</div>
	
		</div>
		<!-- /container -->
		
		<div class="box_cart">
			<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-4 col-lg-4 col-md-6">
			<ul>
				<li>
					<span>Total</span><?=$tongtien2?>
				</li>
			</ul>
			<a href="index.php?act=checkout" class="btn_1 full-width cart">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!--/main-->
    <div id="toTop"></div>
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
