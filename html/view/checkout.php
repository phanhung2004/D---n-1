    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/checkout.css" rel="stylesheet">

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
		<h1>Sign In or Create an Account</h1>
			
	</div>
	<!-- /page_header -->
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="step first">
					<?php
					if(!isset($_SESSION['user'])){
				?>
						<h3>1. User Info and Billing address</h3>
					<ul class="nav nav-tabs" id="tab_checkout" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Register</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">Login</a>
					  </li>
					</ul>

					<form action="index.php?act=register_giohang" method="POST" enctype="multipart/form-data">

					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email">
								<h6 style="color: red;">
                                    <?php
                                        if(isset($erroEmail)&& ($erroEmail!="")){
                                            echo $erroEmail;
                                        }
                                        if(isset($erroEmail2)&& ($erroEmail2!="")){
                                            echo $erroEmail2;
                                        }
                                    ?>
                                </h6>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroPass)&& ($erroPass!="")){
                                            echo $erroPass;
                                        }
                                    ?>
                                </h6>
							</div>
							<hr>
							<div class="row no-gutters">
								<div class="col-6 form-group pr-1">
									<input type="text" name="name" class="form-control" placeholder="Name">
								</div>

							</div>
							<!-- /row -->
							<div class="form-group">
								<input type="text" name="diachi" class="form-control" placeholder="Full Address">
							</div>
							<div class="form-group">
								<input type="text" name="sodienthoai" class="form-control" placeholder="Telephone">
							</div>

							<input type="submit" name="register" class="btn_1 full-width" value="Đăng kí">
							<hr>

							<hr>
						</div>

						</form>


						<!-- /tab_1 -->
					<form action="index.php?act=login_giohang" method="POST" enctype="multipart/form-data">
					  <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2" style="position: relative;">
						  <!-- <a href="#0" class="social_bt facebook">Login con Facebook</a>
						  <a href="#0" class="social_bt google">Login con Google</a> -->
						  <div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" id="password_in">
							</div>
							<hr>
						  	<input type="submit" name="login_giohang" class="btn_1 full-width" value="Đăng nhập">
							  <h6 style="color: red;">
                                    <?php
                                        if(isset($loginFale)&& ($loginFale!="")){
                                            echo $loginFale;
                                        }
                                    ?>
                                </h6>
						</div>
						</form>
						<!-- /tab_2 -->
					</div>	
					<?php
					}
					?>
					</div>

					<!-- /step -->
				</div>

			
				<div class="col-lg-4 col-md-6">
				<form action="index.php?act=checkout" method="POST" enctype="">
					 <div class="step middle payments">
						<h3>2. Phương Thức Thanh Toán</h3>
							<ul>
								<li>
									<label class="container_radio">Trả Trước Bằng chuyển Khoản<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="Trả Trước" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Thanh Toán Sau Khi Nhận Hàng<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="Trả Sau">
										<span class="checkmark"></span>
									</label>
								</li>

							</ul>
							<div class="payment_info d-none d-sm-block"><figure><img src="img/cards_all.svg" alt=""></figure>	<p>Sensibus reformidans interpretaris sit ne, nec errem nostrum et, te nec meliore philosophia. At vix quidam periculis. Solet tritani ad pri, no iisque definitiones sea.</p></div>
							
							<h6 class="pb-2">Shipping Method (Phương thức vận chuyển)</h6>
							
						
						<ul>
								<li>
									<label class="container_radio">Standard shipping (Ship Bình Thường)<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" value="Bình Thường" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Express shipping (Ship Hỏa Tốc)<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" value="Hỏa Tốc">
										<span class="checkmark"></span>
									</label>
								</li>
								
							</ul>
					
					</div> 
					<!-- /step -->
					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step last">
						<h3>3. Hóa Đơn</h3>
					<div class="box_general summary">
						<?php
						$tongtien2 = 0;
							foreach($listgiohang as $gh){
								extract($gh);
								$tongtien2+=$tongtien;
						?>
						<ul>
							<li class="clearfix"><em><?=$so_luong?>-<?=$color?>-<?=$name?></em>  <span><?=$tongtien?></span></li>						</ul>
						<?php
							}
						?>
						<ul>
							<li class="clearfix"><em><strong>Subtotal</strong></em>  <span><?=$tongtien2?></span></li>
							<li class="clearfix"><em><strong>Shipping</strong></em> <span>$0</span></li>
							
						</ul>
						<div class="total clearfix">TOTAL <span><?=$tongtien2?></span></div>
						<!-- <div class="form-group">
								<label class="container_check">Register to the Newsletter.
								  <input type="checkbox" checked>
								  <span class="checkmark"></span>
								</label>
							</div> -->
						
						<!-- <a href="index.php?act=confirm" class="btn_1 full-width">Confirm and Pay</a> -->
						<?php
							if(isset($_SESSION['user'])){
						?>
						<input type="submit" name="hoadon" class="btn_1 full-width" value="Đặt Hàng ">
						<?php
							}else{
						?>
						<h5 style="color: blue;">Hãy đăng nhập hoặc đăng kí</h5>
						<?php
							}
						?>
					</div>
					<!-- /box_general -->
					</div>
					<!-- /step -->
					</form>
				</div>
				
			</div>
			
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
    	<!-- COMMON SCRIPTS -->
        <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    	// Other address Panel
		$('#other_addr input').on("change", function (){
	        if(this.checked)
	            $('#other_addr_c').fadeIn('fast');
	        else
	            $('#other_addr_c').fadeOut('fast');
	    });
	</script>